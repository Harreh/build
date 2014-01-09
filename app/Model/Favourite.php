<?php
class Favourite extends AppModel {

	public $belongsTo = array(
	    'BuildOrder' => array(
	        'className' => 'BuildOrder',
	        'foreignKey' => 'build_id'
	    )
	);

	public function isOwnedBy($favourite, $user) {
	    return $this->field('id', array('id' => $favourite, 'user_id' => $user)) === $favourite;
	}
}
