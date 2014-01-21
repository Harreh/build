<div class="row">
	<div class='col-md-3'>
		<div data-spy="affix" data-offset-top="0" class="hidden-print affix-top" role="complementary">
			<ul class="nav">
				<?php echo $this->element('nav/nav'); ?>
				<?php echo $this->element('nav/login'); ?>
				<li><?php echo $this->Html->link(__d('users', 'Change password'), array('action' => 'change_password')); ?></li>
			</ul>
		</div>
	</div>

	<div class='col-md-9'>
		<h2><?php echo __d('users', 'User'); ?></h2>
		<dl>
			<dt><?php echo __d('users', 'Username'); ?></dt>
			<dd>
				<?php echo $user[$model]['username']; ?>
				&nbsp;
			</dd>
			<dt><?php echo __d('users', 'Created'); ?></dt>
			<dd>
				<?php echo $user[$model]['created']; ?>
				&nbsp;
			</dd>
			<dt><?php echo __d('users', 'Modified'); ?></dt>
			<dd>
				<?php echo $user[$model]['modified']; ?>
				&nbsp;
			</dd>
		</dl>
	</div>
</div>
