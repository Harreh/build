<div class='row'>
	<div class='col-md-3'>
		<div data-spy="affix" data-offset-top="0" class="hidden-print affix-top" role="complementary">
			<ul class="nav">
				<?php echo $this->element('nav/nav'); ?>
				<li class='active'>
					<a href='<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "edit", $buildOrder['BuildOrder']['id']))?>'>Edit Build</a>
				</li>
				<?php echo $this->element('nav/login'); ?>
			</ul>
		</div>
	</div>

	<div class='col-md-5'>
		<div class='page-header'>
			<h1>Edit Build Order</h1>
		</div>
		<div class='col-sm-10'>
			<?php
			echo $this->Form->create('buildOrder',
				array(
					'class' => 'form-horizontal',
					'inputDefaults' => array(
						'div' => 'form-group',
						'class' => 'form-control'
					)
				)
			);
			echo $this->Form->input('title', array('label' => 'Title', 'value' => $buildOrder['BuildOrder']['title']));
			echo $this->Form->input('race',
				array(
					'options' => array('terran' => 'Terran', 'protoss' => 'Protoss', 'zerg' => 'Zerg'),
					'label' => 'Race',
					'value' => $buildOrder['BuildOrder']['race']
				)
			);
			echo $this->Form->input('build',
				array(
					'type' => 'textarea',
					'label' => 'Build',
					'rows' => 20,
					'oninput' => 'get_build()',
					'value' => $buildOrder['BuildOrder']['build'],
					'class' => 'form-control build-input'
				)
			);
			echo $this->form->end();
			?>
		</div>
	</div>

	<div class='col-md-4'>
		<div class='page-header'><h1>Preview</h1></div>
		<div id='build-preview' class='list-group'>
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
