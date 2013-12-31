<div class='row'>
	<div class='col-md-6'>
		<div class='row'>
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
						<select id='race' name='race' class='form-control'>
							<option value='terran'>Terran</option>
							<option value='protoss'>Protoss</option>
							<option value='zerg'>Zerg</option>
						</select>
					</div>
				</div>
				<div class='form-group'>
					<label for="build" class="col-sm-2 control-label">Build</label>
					<div class="col-sm-10">
						<textarea id='build' name='build' class="form-control" rows='20'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<button class="btn btn-primary btn-lg btn-block"  type='submit'>Submit</button>
				</div>
			<?php echo $this->form->end(); ?>
		</div>

	<div class='col-md-9'>
		<div class='row'>
		</div>
	</div>
</div>