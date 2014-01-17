<div class='row'>

	<?php
	$navs = array(
				array(
	 				'link' => array("controller" => "buildorders", "action" => "edit", $buildOrder['BuildOrder']['id']),
	 				'title' => 'Edit Build',
	 				'active' => true
 				)
		 	);
	echo $this->element('nav', array('navs' => $navs));
	?>

	<div class='col-md-5'>
		<div class='page-header'>
			<h1>Edit Build Order</h1>
		</div>
		<?php echo $this->Form->create('buildOrder', array('class' => 'form-horizontal')); ?>
			<div class='form-group'>
				<label for='title' class='col-sm-2 control-label'>Title</label>
				<div class='col-sm-10'>
					<input id='title' name='title' type='text'class='form-control' value='<?php echo htmlspecialchars($buildOrder['BuildOrder']['title'], ENT_QUOTES, 'UTF-8'); ?>'>
				</div>
			</div>
			<div class='form-group'>
				<label for='race' class='col-sm-2 control-label'>Race</label>
				<div class='col-sm-10'>
					<select id='race' name='race' class='form-control' onchange='get_build();'>
						<option value='terran' <?php echo $buildOrder['BuildOrder']['race'] == 'terran' ? 'selected' : ''; ?>>Terran</option>
						<option value='protoss' <?php echo $buildOrder['BuildOrder']['race'] == 'protoss' ? 'selected' : ''; ?>>Protoss</option>
						<option value='zerg' <?php echo $buildOrder['BuildOrder']['race'] == 'zerg' ? 'selected' : ''; ?>>Zerg</option>
					</select>
				</div>
			</div>
			<div class='form-group'>
				<label for="build" class="col-sm-2 control-label">Build</label>
				<div class="col-sm-10">
					<textarea id='build' name='build' class="form-control" rows='20' oninput='get_build()'><?php echo htmlspecialchars($buildOrder['BuildOrder']['build']) ?></textarea>
				</div>
			</div>
			<div class='form-group'>
				<button class="btn btn-primary btn-lg btn-block"  type='submit'>Save</button>
			</div>
		<?php echo $this->form->end(); ?>
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
