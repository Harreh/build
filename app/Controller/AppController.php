<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $components = array(
		'DebugKit.Toolbar',
		'Session',
    	'Auth' => array(
			'authorize' => array('Controller')
		),
		'Security'
	);

	public function isAuthorized($user) {
	    // Admin can access every action
	    if (isset($user['role']) && $user['role'] === 'admin') {
	        return true;
	    }

	    // Default deny
	    return false;
	}
}
