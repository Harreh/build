<div class='row'>
	<div class='col-md-3'>
		<div data-spy="affix" data-offset-top="0" class="hidden-print affix-top" role="complementary">
			<ul class="nav">
				<?php
				echo $this->element('nav/nav');
				echo $this->element('nav/login');
				?>
			</ul>
		</div>
	</div>
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
					<td><?php echo h(ucfirst($buildOrder['BuildOrder']['race'])); ?></td>
					<td><?php echo $this->html->link($buildOrder['BuildOrder']['title'], array('action' => 'view', $buildOrder['BuildOrder']['id'])); ?></td>
					<td>
						<?php echo $this->html->link('Edit', array("controller" => "buildorders", "action" => "edit", $buildOrder['BuildOrder']['id'])); ?>
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
