<?php
class BuildOrdersController extends AppController {

	public $helpers = array('form', 'html', 'build');

	public function index() {
		$this->set('buildOrders', $this->Paginator->paginate());
	}

	public function add() {
		if ($this->request->is('post')) {
			if ($this->BuildOrder->save($this->request->data)) {
		    	$this->Session->setFlash(__('Your build has been saved'), 'flash_notification', array('class' => 'alert-success'));
			    return $this->redirect(array('action' => 'index'));
			}
		    $this->Session->setFlash(__('Unable to save your build.'), 'flash_notification', array('class' => 'alert-warning'));
		}
	}

	public function view($id) {
		$this->BuildOrder->id = $id;
		$this->set('title_for_layout',  $this->BuildOrder->field('title'));
		$this->set('buildOrder', $this->BuildOrder->findById($id));
	}
}
