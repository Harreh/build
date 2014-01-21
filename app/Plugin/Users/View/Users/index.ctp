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
		<div class='page-header'>
			<h1><?php echo __d('users', 'Users'); ?></h1>
		</div>

		<table class='table'>
			<tr>
				<th><?php echo $this->Paginator->sort('username'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php echo __d('users', 'Actions'); ?></th>
			</tr>
			<?php foreach ($users as $user): ?>
				<tr>
					<td><?php echo $this->Html->link($user[$model]['username'], array('action' => 'view', $user[$model]['id'])); ?></td>
					<td><?php echo $user[$model]['created']; ?></td>
					<td><?php echo $this->Html->link(__d('users', 'View'), array('action' => 'view', $user[$model]['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
		<?php echo $this->element('pagination'); ?>
	<div>
</div>
