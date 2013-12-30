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
               	echo $this->build->item(14, 'Assimilator');
               	echo $this->build->item(16, 'Pylon');
                    echo $this->build->item(18, 'Cybernetics Core');
                    echo $this->build->event('Gateway', 'Zealot (To be cancelled)');
                    echo $this->build->item(21, 'Nexus');
                    echo $this->build->item(21, 'Mothership Core');
                    echo $this->build->resource('vespene', 50, 'Warpgate Research');
                    echo $this->build->resource('minerals', 100, 'Pylon (at natural)');
                    echo $this->build->resource('vespene', 50, 'Stalker');
                    echo $this->build->resource('minerals', 75, 'Assimilator');
                    echo $this->build->resource('minerals', 300, 'Gateway x2 (For wall off)');
                    echo $this->build->event('Stalker', 'Stalker');
                    echo $this->build->resource('vespene', 150, 'Stargate');
                    echo $this->build->resource('minerals', 100, 'Pylon');
				?>
			</div>
		</div>

	<div class='col-md-9'>
		<div class='row'>
		</div>
	</div>
</div>
