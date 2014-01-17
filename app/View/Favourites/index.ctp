<div class='row'>
	<div class='col-md-3'>
		<div data-spy="affix" data-offset-top="0" class="hidden-print affix-top" role="complementary">
			<ul class="nav">
				<?php echo $this->element('nav'); ?>
			</ul>
		</div>
	</div>
	
	<div class='col-md-9'>
		<div class='page-header'>
			<h1>Your Favourites</h1>
		</div>
		<table class='table'>
			<tr>
				<th>Race</th>
				<th>Title</th>
				<th>Action</th>
			</tr>
			<?php foreach ($favourites as $favourite) : ?>
				<tr>
					<td><?php echo htmlspecialchars($favourite['BuildOrder']['race']); ?></td>
					<td><?php echo $this->html->link($favourite['BuildOrder']['title'], array('controller' => 'buildorders', 'action' => 'view', $favourite['BuildOrder']['id'])); ?></td>
					<td>
						<a href="<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "edit", $favourite['BuildOrder']['id'])); ?>">Edit</a>
						<?php echo $this->Form->postLink(
							__('Remove'),
							array(
								'action' => 'delete',
								$favourite['Favourite']['id']
							),
							null,
							__('Are You sure you want to remove "%s"?', $favourite['BuildOrder']['title'])
						); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		<?php echo $this->element('pagination'); ?>
	</div>
</div>
