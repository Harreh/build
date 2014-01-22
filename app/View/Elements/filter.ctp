<?php
echo $this->Form->create('BuildOrder', array('class' => 'form-horizontal'));
	echo $this->Form->input('title',
		array(
			'label' => __('Title'),
			'div' => 'form-group',
			'placeholder' => 'Enter Title',
			'class' => 'input-lg form-control'
		)
	);
	echo $this->Form->input('race', array(
	    'options' => array('' => 'Any', 'terran' => 'Terran', 'protoss' => 'Protoss', 'zerg' => 'Zerg'),
	    'value' => array('any', 'terran', 'protoss', 'zerg'),
	    'label' => 'Race',
	    'div' => 'form-group',
	    'class' => 'input-lg form-control'
	));
echo $this->form->end(array('label' => 'Search', 'div' => 'form-group', 'class' => 'btn btn-primary btn-lg'));
