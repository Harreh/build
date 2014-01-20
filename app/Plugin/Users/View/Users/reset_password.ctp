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
			<h1><?php echo __d('users', 'Reset your password'); ?></h1>
		</div>
		<?php
		echo $this->Form->create($model, array(
			'url' => array(
				'action' => 'reset_password',
				$token)
			)
		);
		echo $this->Form->input('new_password', array(
			'label' => __d('users', 'New Password'),
			'type' => 'password',
			'div' => 'form-group',
			'placeholder' => 'Enter Password',
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
</div>
