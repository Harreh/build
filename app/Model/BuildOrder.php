<?php

class BuildOrder extends AppModel {
	
	public $belongsTo = array(
	    'User' => array(
	        'className' => 'User',
	        'foreignKey' => 'user_id'
	    )
	);

	public function isOwnedBy($buildOrder, $user) {
	    return $this->field('id', array('id' => $buildOrder, 'user_id' => $user)) === $buildOrder;
	}
}
