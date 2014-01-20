<div class="users index">
	<h2><?php echo __d('users', 'Login'); ?></h2>
	<?php
	echo $this->Session->flash('auth', array('class' => 'alert-info', 'element' => 'flash_notification'));
	echo $this->Form->create($model, array(
		'action' => 'login',
		'id' => 'LoginForm')
	);
	echo $this->Form->input('email', array(
		'label' => __d('users', 'Email'),
		'div' => 'form-group',
		'placeholder' => 'Enter Email',
		'class' => 'input-lg form-control')
	);
	echo $this->Form->input('password',  array(
		'label' => __d('users', 'Password'),
		'div' => 'form-group',
		'placeholder' => 'Enter Password',
		'class' => 'input-lg form-control')
	);

	echo $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Remember Me')));
	echo $this->Html->link(__d('users', 'I forgot my password'), array('action' => 'reset_password'));

	echo $this->Form->hidden('User.return_to', array('value' => $return_to));
	echo $this->Form->end(array('label' => __d('users', 'Submit'), 'div' => 'form-group', 'class' => 'btn btn-primary'));
	?>
</div>
<?php echo $this->element('Users.Users/sidebar'); ?>
