<div class='row'>
	<div class='col-md-4'>
		<div class='row'>
			<div class='page-header'>
				<h1>ZvP HyuN’s Roach/Hydra/Viper Play</h1>
			</div>
			<div class='list-group'>
				<?php
                $this->build->race = 'zerg';
               	echo $this->build->item(9, 'Overlord');
               	echo $this->build->item(15, 'Spawning Pool');
               	echo $this->build->item(15, 'Hatchery');
               	echo $this->build->event('Spawning Pool', 'Queen');
               	echo $this->build->event('Spawning Pool', 'Zerglings x2');
               	echo $this->build->event('Queen', 'Hatchery');
               	echo $this->build->event('Queen', '2nd Queen');
               	echo $this->build->event('1st Creep Tumour', '3rd Queen');
               	echo $this->build->note('When you start your 3rd Queen (@5:15), you should have 2 Queens and around 25 Drones.');
               	echo $this->build->event('3rd Queen', 'Extractor x2');
               	echo $this->build->event('Extractors', 'Roach Warren');
               	echo $this->build->resource('vespene', 100, 'Lair and Evolution Chamber');
               	echo $this->build->resource('vespene', 100, 'Metabolic Boost and Extractor');
               	echo $this->build->resource('vespene', 100, '+1 Missile Attack, Macro Hatchery and Extractor');
               	echo $this->build->event('Lair', 'Roach Speed');
				?>
			</div>
		</div>

	<div class='col-md-9'>
		<div class='row'>
		</div>
	</div>
</div>
