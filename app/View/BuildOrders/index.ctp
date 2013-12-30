<div class='row'>
	<div class='col-md-4'>
		<div class='row'>
			<div class='page-header'>
				<h1>2 Base 3 Immortal All-In</h1>
			</div>
			<div class='list-group'>
				<?php
                $this->build->race = 'protoss';
				echo $this->build->item(9, 'Pylon (Chrono Probes 3 Times)');
				echo $this->build->item(13, 'Gateway');
				echo $this->build->item(15, 'Assimilator');
				echo $this->build->item(16, 'Pylon');
				echo $this->build->item(18, 'Cybernetics Core');
				echo $this->build->item(19, 'Zealot');
				echo $this->build->item(21, 'Assimilator');
				echo $this->build->item(22, 'Pylon');
				echo $this->build->event('Cybernetics Core', 'Stalker');
				echo $this->build->event('Stalker', 'Sentry');
				echo $this->build->resource('vespene', 100, 'Robotics Facility');
				echo $this->build->resource('minerals', 100, 'Pylon');
				echo $this->build->item(32, 'Cut Probes');
				echo $this->build->item(32, 'Mothership Core');
				echo $this->build->resource('minerals', 400, 'Nexus');
				echo $this->build->event('Robotics Facility', 'Observer (Chrono)');
				echo $this->build->event('Observer', 'Immortal (Chrono)');
				echo $this->build->event('Warpgate Research', 'Sentry');
				echo $this->build->event('Immortal', 'Immortal (Chrono)');
				echo $this->build->resource('minerals', 300, 'Gateway x2');
				echo $this->build->resources(50, 100, 'Sentry');
				echo $this->build->event('Immortal', 'Immortal (Chrono)');
				echo $this->build->note('Resume Probe Production');
				echo $this->build->event('Gateway x2', 'Zealot x3');
				echo $this->build->note('Push out once the third Immortal finishes.');
				echo $this->build->note('Get two more rounds of warp-ins at your proxy pylon, then attack!');
				?>
			</div>
		</div>

	<div class='col-md-9'>
		<div class='row'>
		</div>
	</div>
</div>
