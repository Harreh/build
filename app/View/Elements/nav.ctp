<?php
$controller = $this->params['controller'];
$action = $this->params['action'];
?>

<li<?php echo ($controller == 'buildorders' && $action == 'index') ? " class='active'" : '' ; ?>>
	<a href="<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "index"));?>">View Builds</a>
</li>
<li<?php echo ($controller == 'buildorders' && $action == 'saved') ? " class='active'" : '' ; ?>>
	<a href="<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "saved"));?>">Your Builds</a>
</li>
<li<?php echo ($controller == 'favourites' && $action == 'index') ? " class='active'" : '' ; ?>>
	<a href="<?php echo $this->Html->url(array("controller" => "favourites", "action" => "index"));?>">Your Favourites</a>
</li>
<hr>
<li<?php echo ($controller == 'buildorders' && $action == 'add') ? " class='active'" : '' ; ?>>
	<a href="<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "add"));?>">Create new build</a>
</li>

