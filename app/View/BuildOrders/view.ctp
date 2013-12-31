<div class='row'>
	<div class='col-md-4'>
		<div class='row'>
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

	<div class='col-md-9'>
		<div class='row'>
		</div>
	</div>
</div>
