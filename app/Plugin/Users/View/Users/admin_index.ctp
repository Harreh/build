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
			<h1><?php echo __d('users', 'Users'); ?></h1>
		</div>

		<?php echo $this->element('Users.filter'); ?>

		<table class='table'>
			<tr>
				<th><?php echo $this->Paginator->sort('username'); ?></th>
				<th><?php echo $this->Paginator->sort('email'); ?></th>
				<th><?php echo $this->Paginator->sort('email_verified'); ?></th>
				<th><?php echo $this->Paginator->sort('active'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php echo __d('users', 'Actions'); ?></th>
			</tr>
			<?php foreach ($users as $user) : ?>
				<tr>
					<td><?php echo $user[$model]['username']; ?></td>
					<td><?php echo $user[$model]['email']; ?></td>
					<td><?php echo $user[$model]['email_verified'] == 1 ? __d('users', 'Yes') : __d('users', 'No'); ?></td>
					<td><?php echo $user[$model]['active'] == 1 ? __d('users', 'Yes') : __d('users', 'No'); ?></td>
					<td><?php echo $user[$model]['created']; ?></td>
					<td>
						<?php echo $this->Html->link(__d('users', 'View'), array('action'=>'view', $user[$model]['id'])); ?>
						<?php echo $this->Html->link(__d('users', 'Edit'), array('action'=>'edit', $user[$model]['id'])); ?>
						<?php echo $this->Html->link(__d('users', 'Delete'), array('action'=>'admin_delete', $user[$model]['id']), null, sprintf(__d('users', 'Are you sure you want to delete # %s?'), $user[$model]['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		<?php echo $this->element('Users.pagination'); ?>
	</div>
</div>
