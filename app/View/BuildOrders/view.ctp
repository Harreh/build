<div class='row'>
	<div class='col-md-3'>
		<div data-spy="affix" data-offset-top="0" class="hidden-print affix-top" role="complementary">
			<ul class="nav">
				<?php echo $this->element('nav/nav');
				if ($isOwned) : ?>
					<li>
						<a href="<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "edit", $buildOrder['BuildOrder']['id'])); ?>">Edit Build</a>
					</li>
				<?php endif; ?>
				<li>
					<?php if (isset($favourite)) :
						echo $this->Form->postlink(
							__('Remove Favourite'),
							array(
								'controller' => 'favourites',
								'action' => 'delete',
								$favourite['Favourite']['id']
							)
						);
					else:
						echo $this->Form->postLink(
							__('Save as Favourite'),
							array(
								'controller' => 'favourites',
								'action' => 'add',
								$buildOrder['BuildOrder']['id']
							)
						);
					endif; ?>
				</li>
				<?php echo $this->element('nav/login'); ?>
			</ul>
		</div>
	</div>

	<div class='col-md-4'>
		<div class='page-header'>
			<h1><?php echo h($title_for_layout); ?></h1>
		</div>
		<div class='collapse-group'>
			<div class='list-group in collapse collapseable'>
				<?php echo $this->build->generate_build($buildOrder['BuildOrder']['race'], $buildOrder['BuildOrder']['build']); ?>
			</div>
			<div class='collapse collapseable'>
				<?php echo $this->build->generate_build_text($buildOrder['BuildOrder']['race'], $buildOrder['BuildOrder']['build']); ?>
			</div>
			<button class='btn btn-default' data-toggle="collapse" data-target=".collapseable">Toggle View</button>
		</div>
	</div>
</div>
