<div class="users form">
	<h2><?php echo __d('users', 'Forgot your password?'); ?></h2>
	<p><?php echo __d('users', 'Please enter the email you used for registration and you\'ll get an email with further instructions.'); ?></p>
	<?php
	echo $this->Form->create($model, array(
		'url' => array(
			'admin' => false,
			'action' => 'reset_password')));
	echo $this->Form->input('email', array(
		'label' => __d('users', 'Your Email'),
		'div' => 'form-group',
		'placeholder' => 'Enter Email',
		'class' => 'input-lg form-control')
	);
	echo $this->Form->end(array('label' => __d('users', 'Submit'), 'div' => 'form-group', 'class' => 'btn btn-primary'));
	?>
</div>
<?php echo $this->element('Users.Users/sidebar'); ?>
