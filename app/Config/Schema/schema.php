<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $build_orders = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'utf16_general_ci', 'charset' => 'utf16'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf16_general_ci', 'charset' => 'utf16'),
		'race' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf16_general_ci', 'charset' => 'utf16'),
		'build' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf16_general_ci', 'charset' => 'utf16'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf16', 'collate' => 'utf16_general_ci', 'engine' => 'InnoDB')
	);

	public $favourites = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'build_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'utf16_general_ci', 'charset' => 'utf16'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf16', 'collate' => 'utf16_general_ci', 'engine' => 'InnoDB')
	);

}
