<h3><?php echo __d('users', 'Filter'); ?></h3>
<?php 
echo $this->Form->create($model, array('action' => 'search'));
	echo $this->Form->input('username',
		array(
			'label' => __d('users', 'Username'),
			'div' => 'form-group',
			'placeholder' => 'Enter Username',
			'class' => 'input-lg form-control'
		)
	);
	echo $this->Form->input('email',
		array(
			'label' => __d('users', 'Email'),
			'div' => 'form-group',
			'placeholder' => 'Enter Email',
			'class' => 'input-lg form-control'
		)
	);
echo $this->Form->end(array('label' => __d('users', 'Search'), 'div' => 'form-group', 'class' => 'btn btn-primary'));
