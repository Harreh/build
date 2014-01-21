<?php
$controller = $this->params['controller'];
$action = $this->params['action'];
?>

<li<?php echo ($controller == 'buildorders' && $action == 'index') ? " class='active'" : '' ; ?>>
	<?php echo $this->html->link('View Builds', "/"); ?>
</li>
<li<?php echo ($controller == 'buildorders' && $action == 'saved') ? " class='active'" : '' ; ?>>
	<?php echo $this->html->link('Your Builds', '/saved'); ?>
</li>
<li<?php echo ($controller == 'favourites' && $action == 'index') ? " class='active'" : '' ; ?>>
	<?php echo $this->html->link('Your Favourites', '/favourites'); ?>
</li>
<hr>
<li<?php echo ($controller == 'buildorders' && $action == 'add') ? " class='active'" : '' ; ?>>
	<?php echo $this->html->link('Create new Build', '/add'); ?>
</li>
