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
			<h1><?php echo __d('users', 'Forgot your password?'); ?></h1>
		</div>
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
</div>
