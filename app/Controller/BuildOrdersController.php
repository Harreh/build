<?php
class BuildOrdersController extends AppController {

	public $helpers = array('form', 'html', 'build');

	public function index() {
	}

	public function view($id) {
		
	}

	public function zerg() {

	}

	public function pvt() {
        $this->set('title_for_layout', 'PvT NaNiwa\'s Gateway expand');

	}

	public function pvz() {
        $this->set('title_for_layout', 'PvZ HerO’s Aggressive Stargate Build');
	}

	public function pvp() {
        $this->set('title_for_layout', 'PvP');
	}

	public function db($id) {
		$this->set('buildOrder', $this->BuildOrder->find('first', $id));
	}
}
