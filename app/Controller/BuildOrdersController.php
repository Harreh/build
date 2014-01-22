<?php
class BuildOrdersController extends AppController {

	public $helpers = array('form', 'html', 'build', 'Session');

	public $components = array(
		'Session',
		'Cookie',
		'Paginator',
		'Search.Prg',
		'Users.RememberMe',
	);

	public $presetVars = true;

	protected function _pluginLoaded($plugin, $exception = true) {
		$result = CakePlugin::loaded($plugin);
		if ($exception === true && $result === false) {
			throw new MissingPluginException(array('plugin' => $plugin));
		}
		return $result;
	}

	protected function _setupComponents() {
		if ($this->_pluginLoaded('Search', false)) {
			$this->components[] = 'Search.Prg';
		}
	}

	public function isAuthorized($user = null) {
		return true;
	}

	public function beforeFilter() {
		$this->Auth->allow('index', 'view');
		parent::beforeFilter();
	}

	public function index() {
		$this->set('buildOrders', $this->Paginator->paginate());
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['user_id'] = $this->Auth->user('id');
			if ($this->BuildOrder->save($this->request->data)) {
		    	$this->Session->setFlash(__('Your build has been saved'), 'flash_notification', array('class' => 'alert-success'));
			    return $this->redirect(array('action' => 'view', $this->BuildOrder->id));
			}
		    $this->Session->setFlash(__('Unable to save your build.'), 'flash_notification', array('class' => 'alert-warning'));
		}
	}

	public function saved() {
		$buildOrders = $this->Paginator->paginate(array('user_id' => $this->Auth->user('id')));
		if ($buildOrders) {
			$this->set('buildOrders', $buildOrders);
		} else {
			$this->render('empty/saved');
		}
	}

	public function view($id = null) {
		if (!$id) {
		    throw new NotFoundException(__('Invalid build.'));
		}

		$buildOrder = $this->BuildOrder->findById($id);
		if (!$buildOrder) {
		    throw new NotFoundException(__('Invalid build.'));
		}

		$this->loadModel('Favourite');
		$favourite = $this->Favourite->find('first', array('conditions' => array('Favourite.user_id' => $this->Auth->user('id'), 'Favourite.build_id' => $id)));
		if ($favourite) {
			$this->set('favourite', $favourite);
		}

		$this->BuildOrder->id = $id;
		$this->set('title_for_layout',  $buildOrder['BuildOrder']['title']);
		$this->set('buildOrder', $buildOrder);
		$this->set('isOwned', $this->BuildOrder->isOwnedBy($buildOrder['BuildOrder']['id'], $this->Auth->user('id')));
	}

	public function edit($id = null) {
		if (!$id) {
		    throw new NotFoundException(__('Invalid build.'));
		}

		$buildOrder = $this->BuildOrder->findById($id);
		if (!$buildOrder) {
		    throw new NotFoundException(__('Invalid build.'));
		}

		if (!$this->BuildOrder->isOwnedBy($id, $this->Auth->user('id'))) {
			$this->Session->setFlash(__('You cannot modify that build.'), 'flash_notification', array('class' => 'alert-danger'));
			return $this->redirect(array('action' => 'index'));
		}

		$this->BuildOrder->id = $id;
		if ($this->request->is('post')) {
			if ($this->BuildOrder->save($this->request->data)) {
				$this->Session->setFlash(__('Your changes have been saved.'), 'flash_notification', array('class' => 'alert-success'));
				return $this->redirect(array('action' => 'edit', $id));
			}
			$this->Session->setFlash(__('Unable to save your changes.'), 'flash_notification', array('class' => 'alert-warning'));
		}
		$this->set('buildOrder', $this->BuildOrder->findById($id));
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
		    throw new MethodNotAllowedException();
		}

		$this->BuildOrder->id = $id;

		if (!$this->BuildOrder->exists()) {
		    throw new NotFoundException(__('Invalid build.'));
		}

		if (!$this->BuildOrder->isOwnedBy($id, $this->Auth->user('id'))) {
			$this->Session->setFlash(__('Unable to delete build.'), 'flash_notification', array('class' => 'alert-warning'));
			return $this->redirect(array('action' => 'saved'));
		}

		if ($this->BuildOrder->delete()) {
			$this->Session->setFlash(__('Build deleted.'), 'flash_notification', array('class' => 'alert-success'));
			return $this->redirect(array('action' => 'saved'));
		}
		$this->Session->setFlash(__('Unable to delete build.'), 'flash_notifcation', array('class' => 'alert-warning'));

		return $this->redirect(array('action' => 'saved'));
	}

	public function search() {
		$this->_pluginLoaded('Search');

		$this->Prg->commonProcess($this->modelClass);

		if (!empty($this->request->params['named']['title'])) {
            $this->Paginator->settings['title'] = $this->request->params['named']['title'];
		}
		if (!empty($this->request->params['named']['race'])) {
            $this->Paginator->settings['race'] = $this->request->params['named']['race'];
		}

        $this->Paginator->settings[0] = 'search';

		$this->set('buildOrders', $this->Paginator->paginate($this->modelClass));
	}
}
