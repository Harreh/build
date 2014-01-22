<div>
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
					<option value='any'>Any</option>
					<option value='terran'>Terran</option>
					<option value='protoss'>Protoss</option>
					<option value='zerg'>Zerg</option>
				</select>
			</div>
		</div>
	<?php echo $this->form->end(array('label' => 'Submit', 'div' => 'form-group', 'class' => 'btn btn-primary btn-lg btn-block')); ?>
</div>
