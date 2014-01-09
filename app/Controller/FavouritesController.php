<?php
class FavouritesController extends AppController {

	public $helpers = array('form', 'html', 'build');

	public $components = array(
    	'Auth',
		'Session',
		'Cookie',
		'Paginator',
		'Search.Prg',
		'Users.RememberMe',
	);
	
	public function index() {
        $this->set('favourites', $this->Paginator->paginate(array('Favourite.user_id' => $this->Auth->user('id'))));
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
