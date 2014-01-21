<?php
class FavouritesController extends AppController {

	public $helpers = array('form', 'html', 'build', 'Session');

    public $uses = array('Favourite', 'BuildOrder');

	public $components = array(
		'Session',
		'Cookie',
		'Paginator',
		'Search.Prg',
		'Users.RememberMe',
	);

    public function isAuthorized($user = null) {
        return true;
    }
	
	public function index() {
        $favourites = $this->Paginator->paginate(array('Favourite.user_id' => $this->Auth->user('id')));
        if ($favourites) {
            $this->set('favourites', $favourites);
        } else {
            $this->render('empty/index');
        }
    }

    public function add($id = null) {
        if ($this->request->is('post')) {
            if (!$id) {
                throw new NotFoundException(__('Invalid build.'));
            }
            $favourite = $this->BuildOrder->findById($id);
            if (!$favourite) {
                throw new NotFoundException(__('Invalid build.'));
            }

            $this->request->data['user_id'] = $this->Auth->user('id');
            $this->request->data['build_id'] = $id;
            if ($this->Favourite->save($this->request->data)) {
                $this->Session->setFlash(__('Your favourite has been saved'), 'flash_notification', array('class' => 'alert-success'));
                return $this->redirect(array('controller' => 'buildorders', 'action' => 'view', $id));
            }
            $this->Session->setFlash(__('Unable to save your favourite.'), 'flash_notification', array('class' => 'alert-warning'));
        }
    }

    public function delete($id = null) {
    	if (!$this->request->is('post')) {
    	    throw new MethodNotAllowedException();
    	}

    	$this->Favourite->id = $id;

    	if (!$this->Favourite->exists()) {
    		throw new NotFoundException(__('Invalid favourite.'));
    	}

    	if ($this->Favourite->delete()) {
			$this->Session->setFlash(__('Favourite removed.'), 'flash_notification', array('class' => 'alert-success'));
			return $this->redirect(array('action' => 'index'));
    	}

    	$this->Session->setFlash(__('Unable to remove favourite.'), 'flash_notifcation', array('class' => 'alert-warning'));

    	return $this->redirect(array('action' => 'index'));
    }
}
