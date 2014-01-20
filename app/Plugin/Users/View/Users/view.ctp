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
		<div class='page-header'>
			<h1><?php echo __d('users', 'User'); ?></h1>
		</div>
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
			<?php
			if (!empty($user['UserDetail'])) {
				foreach ($user['UserDetail'] as $section => $details) {
					foreach ($details as $field => $value) {
						echo '<dt>' . $section . ' - ' . $field . '</dt>';
						echo '<dd>' . $value . '</dd>';
					}
				}
			}
			?>
		</dl>
	</div>
</div>
