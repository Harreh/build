<div class="row">
	<div class='col-md-3'>
		<div data-spy="affix" data-offset-top="0" class="hidden-print affix-top" role="complementary">
			<ul class="nav">
				<?php echo $this->element('nav/nav'); ?>
				<?php echo $this->element('nav/login'); ?>
				<li><?php echo $this->Html->link(__d('users', 'My Account'), array('action' => 'edit')); ?></li>
				<li><?php echo $this->Html->link(__d('users', 'Change password'), array('action' => 'change_password')); ?></li>
			</ul>
		</div>
	</div>

	<div class='col-md-6'>
		<div class='page-header'>
			<h1><?php echo __d('users', 'Login'); ?></h1>
		</div>
		<?php
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
</div>
