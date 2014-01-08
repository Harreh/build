<?php
class BuildOrdersController extends AppController {

	public $helpers = array('form', 'html', 'build');

	public $components = array(
    	'Auth',
		'Session',
		'Cookie',
		'Paginator',
		'Search.Prg',
		'Users.RememberMe',
	);

	public function beforeFilter() {
		$this->Auth->allow('index', 'view');
	}

	public function index() {
		$this->set('buildOrders', $this->Paginator->paginate());
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['BuidOrder']['user_id'] = $this->Auth->user('id');
			if ($this->BuildOrder->save($this->request->data)) {
		    	$this->Session->setFlash(__('Your build has been saved'), 'flash_notification', array('class' => 'alert-success'));
			    return $this->redirect(array('action' => 'view', $this->BuildOrder->id));
			}
		    $this->Session->setFlash(__('Unable to save your build.'), 'flash_notification', array('class' => 'alert-warning'));
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
		$this->BuildOrder->id = $id;
		$this->set('title_for_layout',  $buildOrder['BuildOrder']['title']);
		$this->set('buildOrder', $buildOrder);
	}

	public function edit($id = null) {
		if (!$id) {
		    throw new NotFoundException(__('Invalid build.'));
		}

		$buildOrder = $this->BuildOrder->findById($id);
		if (!$buildOrder) {
		    throw new NotFoundException(__('Invalid build.'));
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
}
