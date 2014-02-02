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
					'oninput' => 'construct_previews();',
					'value' => $buildOrder['BuildOrder']['build'],
					'class' => 'form-control build-input'
				)
			);
			echo $this->Form->end(array('label' => 'Submit', 'div' => 'form-group', 'class' => 'btn btn-primary btn-lg btn-block'));
			?>
		</div>
	</div>

	<div class='col-md-4'>
		<div class='page-header'><h1>Preview</h1></div>
			<div class='collapse-group'>
				<div id='build-preview' class='list-group in collapse collapseable'>
					<?php echo $this->build->generate_build($buildOrder['BuildOrder']['race'], $buildOrder['BuildOrder']['build']); ?>
				</div>
				<div id='build-preview-text' class='collapse collapseable'>
					<?php echo $this->build->generate_build_text($buildOrder['BuildOrder']['race'], $buildOrder['BuildOrder']['build']); ?>
				</div>
				<button class='btn btn-default' data-toggle="collapse" data-target=".collapseable">Toggle View</button>
			</div>
	</div>
</div>
