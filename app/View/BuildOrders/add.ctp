<div class='row'>
	<div class='col-md-3'>
		<div data-spy="affix" data-offset-top="0" class="hidden-print affix-top" role="complementary">
			<ul class="nav">
				<?php
				echo $this->element('nav/nav');
				echo $this->element('nav/login');
				?>
			</ul>
		</div>
	</div>

	<div class='col-md-5'>
		<div class='page-header'>
			<h1>Create New Build Order</h1>
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
			echo $this->Form->input('title', array('label' => 'Title'));
			echo $this->Form->input('race',
				array(
					'options' => array('terran' => 'Terran', 'protoss' => 'Protoss', 'zerg' => 'Zerg'),
					'label' => 'Race'
				)
			);
			echo $this->Form->input('build',
				array(
					'type' => 'textarea',
					'label' => 'Build',
					'rows' => 20,
					'oninput' => 'get_build()'
				)
			);
			echo $this->Form->end(array('label' => 'Submit', 'div' => 'form-group', 'class' => 'btn btn-primary btn-lg btn-block'));
			?>
		</div>
	</div>

	<div class='col-md-4'>
		<div class='page-header'><h1>Preview</h1></div>
		<div id='build-preview' class='list-group'>
		</div>
	</div>
</div>

