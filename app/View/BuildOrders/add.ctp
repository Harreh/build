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
		<?php echo $this->Form->create('buildOrder', array('class' => 'form-horizontal')); ?>
			<div class='form-group'>
				<label for='title' class='col-sm-2 control-label'>Title</label>
				<div class='col-sm-10'>
					<input id='title' name='title' type='text'class='form-control'>
				</div>
			</div>
			<div class='form-group'>
				<label for='race' class='col-sm-2 control-label'>Race</label>
				<div class='col-sm-10'>
					<select id='race' name='race' class='form-control' onchange='get_build();'>
						<option value='terran'>Terran</option>
						<option value='protoss'>Protoss</option>
						<option value='zerg'>Zerg</option>
					</select>
				</div>
			</div>
			<div class='form-group'>
				<label for="build" class="col-sm-2 control-label">Build</label>
				<div class="col-sm-10">
					<textarea id='build' name='build' class="form-control build-input" rows='20' oninput='get_build()'></textarea>
				</div>
			</div>
		<?php echo $this->form->end(array('label' => 'Submit', 'div' => 'form-group', 'class' => 'btn btn-primary btn-lg btn-block')); ?>
	</div>

	<div class='col-md-4'>
		<div class='page-header'><h1>Preview</h1></div>
		<div id='build-preview' class='list-group'>
		</div>
	</div>
</div>
