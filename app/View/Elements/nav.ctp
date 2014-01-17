<?php
$controller = $this->params['controller'];
$action = $this->params['action'];
?>
<div class='col-md-3'>
	<div data-spy="affix" data-offset-top="0" class="hidden-print affix-top" role="complementary">
		<ul class="nav">
			<li<?php echo ($controller == 'buildorders' && $action == 'index') ? " class='active'" : '' ; ?>>
				<a href="<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "index"));?>">View Builds</a>
			</li>
			<li<?php echo ($controller == 'buildorders' && $action == 'saved') ? " class='active'" : '' ; ?>>
				<a href="<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "saved"));?>">Your Builds</a>
			</li>
			<li<?php echo ($controller == 'favourites' && $action == 'index') ? " class='active'" : '' ; ?>>
				<a href="<?php echo $this->Html->url(array("controller" => "favourites", "action" => "index"));?>">Your Favourites</a>
			</li>
			<li<?php echo ($controller == 'buildorders' && $action == 'add') ? " class='active'" : '' ; ?>>
				<a href="<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "add"));?>">Create new build</a>
			</li>
			<?php
			if (isset($navs)) :
				foreach ($navs as $nav) : ?>
					<li<?php echo ($nav['active']) ? " class='active'" : '' ; ?>>
						<a href="<?php echo $this->Html->url($nav['link']); ?>"><?php echo htmlspecialchars($nav['title']) ?></a>
					</li>
				<?php endforeach;
			endif; ?>
		</ul>
	</div>
</div>
