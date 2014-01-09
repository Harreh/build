<div class='row'>
	<div class='col-md-3'>
		<div data-spy="affix" data-offset-top="0" class="hidden-print affix-top" role="complementary">
			<ul class="nav">
				<?php echo $this->element('nav'); ?>
				<li><a href="<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "edit", $buildOrder['BuildOrder']['id'])); ?>">Edit Build</a></li>
			</ul>
		</div>
	</div>
	<div class='col-md-4'>
		<div class='page-header'>
			<h1><?php echo htmlspecialchars($title_for_layout); ?></h1>
		</div>
		<div class='list-group'>
			<?php
			$this->build->race = $buildOrder['BuildOrder']['race'];
			$buildOrder['BuildOrder']['build'] = explode("\n", $buildOrder['BuildOrder']['build']);
			foreach ($buildOrder['BuildOrder']['build'] as $line) {
				if (empty($line)) {
					continue;
				}
				echo $this->build->line($line);
			}
			?>
		</div>
	</div>
</div>
