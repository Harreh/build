<div class='row'>
	<div class='col-md-4'>
		<div class='row'>
			<div class='page-header'>
				<h1><?php echo htmlspecialchars($title_for_layout); ?></h1>
			</div>
			<div class='list-group'>
				<?php
                    $this->build->race = 'protoss';
               	echo $this->build->item(9, 'Pylon');
                    echo $this->build->item(13, 'Gateway');
               	echo $this->build->item(15, 'Assimilator x2');
                    echo $this->build->note('Only put 2 probes in each assimilator.');
                    echo $this->build->item(16, 'Pylon');
                    echo $this->build->item(18, 'Cybernetics Core');
                    echo $this->build->item(19, 'Gateway');
                    echo $this->build->event('Cybernetics Core', 'Warpgate Tech');
                    echo $this->build->resource('vespene', 50, 'Stalker');
                    echo $this->build->item(23, 'Pylon');
                    echo $this->build->event('2nd Gateway', '2 Stalkers');
                    echo $this->build->note('Add 1 additional probe to each assimilator.');
                    echo $this->build->resource('vespene', 100, 'Mothership Core');
				?>
			</div>
		</div>

	<div class='col-md-9'>
		<div class='row'>
		</div>
	</div>
</div>
