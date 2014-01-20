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
			<h1>You haven't created any builds yet!</h1>
		</div>
		Why don't you start by <a href='<?php $this->Html->url(array('controller' => 'buildorders', 'action' => 'add')); ?>'>creating</a> one now?
	</div>
</div>
