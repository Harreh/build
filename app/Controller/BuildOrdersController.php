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

	}

	public function pvz() {
		
	}

	public function db($id) {
		$this->set('buildOrder', $this->BuildOrder->find('first', $id));
	}
}
