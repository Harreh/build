<div class="users form">
	<h2><?php echo __d('users', 'Change your password'); ?></h2>
	<?php
	echo $this->Form->create($model, array('action' => 'change_password'));
	echo $this->Form->input('old_password', array(
		'label' => __d('users', 'Old Password'),
		'type' => 'password',
		'div' => 'form-group',
		'placeholder' => 'Enter Old Password',
		'class' => 'input-lg form-control')
	);
	echo $this->Form->input('new_password', array(
		'label' => __d('users', 'New Password'),
		'type' => 'password',
		'div' => 'form-group',
		'placeholder' => 'Enter New Password',
		'class' => 'input-lg form-control')
	);
	echo $this->Form->input('confirm_password', array(
		'label' => __d('users', 'Confirm'),
		'type' => 'password',
		'div' => 'form-group',
		'placeholder' => 'Repeat Password',
		'class' => 'input-lg form-control')
	);
	echo $this->Form->end(array('label' => __d('users', 'Submit'), 'div' => 'form-group', 'class' => 'btn btn-primary'));
	?>
</div>
<?php echo $this->element('Users.Users/sidebar'); ?>
