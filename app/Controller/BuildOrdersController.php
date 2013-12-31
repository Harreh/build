<?php
class BuildOrdersController extends AppController {

	public $helpers = array('form', 'html', 'build');
	public $components = array('Session');

	public function index() {
		$this->set('buildOrders', $this->BuildOrder->find('all'));
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

	public function pvt() {
        $this->set('title_for_layout', 'PvT NaNiwa\'s Gateway expand');

	}

	public function pvz() {
        $this->set('title_for_layout', 'PvZ HerO’s Aggressive Stargate Build');
	}

	public function pvp() {
        $this->set('title_for_layout', 'PvP 3 Stalker Rush');
	}

	public function db($id) {
		$this->set('buildOrder', $this->BuildOrder->find('first', $id));
	}
}
