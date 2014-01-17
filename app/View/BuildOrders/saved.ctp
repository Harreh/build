<div class='row'>

	<?php echo $this->element('nav'); ?>

	<div class='col-md-9'>
		<div class='page-header'>
			<h1>Your Saved Builds</h1>
		</div>
		<table class='table'>
			<tr>
				<th>Race</th>
				<th>Title</th>
				<th>Action</th>
			</tr>
			<?php foreach ($buildOrders as $buildOrder) : ?>
				<tr>
					<td><?php echo htmlspecialchars($buildOrder['BuildOrder']['race']); ?></td>
					<td><?php echo $this->html->link($buildOrder['BuildOrder']['title'], array('action' => 'view', $buildOrder['BuildOrder']['id'])); ?></td>
					<td>
						<a href="<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "edit", $buildOrder['BuildOrder']['id'])); ?>">Edit</a>
						<?php echo $this->Form->postLink(
							__('Delete'),
							array(
								'action' => 'delete',
								$buildOrder['BuildOrder']['id']
							),
							null,
							__('Are You sure you want to delete "%s"?', $buildOrder['BuildOrder']['title'])
						); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		<?php echo $this->element('pagination'); ?>
	</div>
</div>
