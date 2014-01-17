<div class='row'>

	<?php if ($isOwned) : ?>
		<?php
		$navs = array(
					array(
						'link' => array("controller" => "buildorders", "action" => "edit", $buildOrder['BuildOrder']['id']),
						'title' => 'Edit Build',
						'active' => false
					)
				);
		echo $this->element('nav', array('navs' => $navs)); ?>
	<?php else :
		echo $this->element('nav'); ?>
	<?php endif; ?>

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
