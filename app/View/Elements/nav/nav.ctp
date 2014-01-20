<?php
$controller = $this->params['controller'];
$action = $this->params['action'];
?>

<li<?php echo ($controller == 'buildorders' && $action == 'index') ? " class='active'" : '' ; ?>>
	<?php echo $this->html->link('View Builds', array("controller" => "buildorders", "action" => "index")); ?>
</li>
<li<?php echo ($controller == 'buildorders' && $action == 'saved') ? " class='active'" : '' ; ?>>
	<?php echo $this->html->link('Your Builds', array("controller" => "buildorders", "action" => "saved")); ?>
</li>
<li<?php echo ($controller == 'favourites' && $action == 'index') ? " class='active'" : '' ; ?>>
	<?php echo $this->html->link('Your Favourites', array("controller" => "favourites", "action" => "index")); ?>
</li>
<hr>
<li<?php echo ($controller == 'buildorders' && $action == 'add') ? " class='active'" : '' ; ?>>
	<?php echo $this->html->link('Create new Build', array("controller" => "buildorders", "action" => "add")); ?>
</li>
