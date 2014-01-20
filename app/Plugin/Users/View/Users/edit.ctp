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
			<h1><?php echo __d('users', 'Edit User'); ?></h1>
		</div>
		<?php echo $this->Form->create($model); ?>
				<?php
				echo $this->Form->input('UserDetail.first_name', array('div' => 'form-group', 'class' => 'input-lg form-control', 'placeholder' => 'Enter First Name'));
				echo $this->Form->input('UserDetail.last_name', array('div' => 'form-group', 'class' => 'input-lg form-control', 'placeholder' => 'Enter Last Name'));
				echo $this->Form->input('UserDetail.birthday', array('div' => 'form-group', 'class' => 'input-lg form-control', 'placeholder' => 'Enter Birthday'));
				?>
				<p><?php echo $this->Html->link(__d('users', 'Change your password'), array('action' => 'change_password')); ?></p>
			</fieldset>
		<?php echo $this->Form->end(array('label' => __d('users', 'Submit'), 'div' => 'form-group', 'class' => 'btn btn-primary')); ?>
	</div>
</div>
