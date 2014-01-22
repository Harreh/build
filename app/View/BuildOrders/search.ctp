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
			<h1>Builds</h1>
		</div>

		<?php echo $this->element('filter'); ?>

		<table class='table'>
			<tr>
				<th>Race</th>
				<th>Title</th>
			</tr>
			<?php foreach ($buildOrders as $buildOrder) : ?>
				<tr>
					<td><?php echo h(ucfirst($buildOrder['BuildOrder']['race'])); ?></td>
					<td><?php echo $this->html->link($buildOrder['BuildOrder']['title'], array('action' => 'view', $buildOrder['BuildOrder']['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
		<?php echo $this->element('pagination'); ?>
	</div>
</div>
