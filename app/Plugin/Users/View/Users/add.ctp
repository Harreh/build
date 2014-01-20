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

	<div class='col-md-9'>
		<h2><?php echo __d('users', 'Add User'); ?></h2>
		<?php
		echo $this->Form->create($model);
		echo $this->Form->input('username', array(
			'label' => __d('users', 'Username'),
			'div' => 'form-group',
			'placeholder' => 'Enter Username',
			'class' => 'input-lg form-control'
			)
		);
		echo $this->Form->input('email', array(
			'label' => __d('users', 'E-mail (used as login)'),
			'error' => array(
				'isValid' => __d('users', 'Must be a valid email address'),
				'isUnique' => __d('users', 'An account with that email already exists')
				),
			'div' => 'form-group',
			'placeholder' => 'Enter Email',
			'class' => 'input-lg form-control'
			)
		);
		echo $this->Form->input('password', array(
			'label' => __d('users', 'Password'),
			'type' => 'password',
			'div' => 'form-group',
			'placeholder' => 'Enter Password',
			'class' => 'input-lg form-control'
			)
		);
		echo $this->Form->input('temppassword', array(
			'label' => __d('users', 'Password (confirm)'),
			'type' => 'password',
			'div' => 'form-group',
			'placeholder' => 'Repeat Password',
			'class' => 'input-lg form-control'
			)
		);
		$tosLink = $this->Html->link(__d('users', 'Terms of Service'), array('controller' => 'pages', 'action' => 'tos', 'plugin' => null));
		echo $this->Form->input('tos', array('label' => __d('users', 'I have read and agreed to the ') . $tosLink));
		echo $this->Form->end(array('label' => __d('users', 'Submit'), 'div' => 'form-group', 'class' => 'btn btn-primary'));
		?>
	</div>
</div>
