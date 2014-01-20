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
	<div class='col-md-9'>
		<div class='page-header'>
			<h1>You don't have any favourites!</h1>
		</div>
		Why don't you <a href='<?php echo $this->Html->url(array('controller' => 'buildorders', 'action' => 'index'))?>'>view</a> the builds and pick some favourites?
	</div>
</div>