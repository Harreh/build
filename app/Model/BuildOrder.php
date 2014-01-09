<?php

class BuildOrder extends AppModel {

	public function isOwnedBy($buildOrder, $user) {
	    return $this->field('id', array('id' => $buildOrder, 'user_id' => $user)) === $buildOrder;
	}
}
