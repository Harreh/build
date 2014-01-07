<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/ui-lightness/jquery-ui.css" type="text/css" media="all" />
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('main');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class='container'>
		<header class='navbar navbar-inverse navbar-fixed-top' role='banner'>
			<div class="container">
				<div class='navbar-header'>
					<button class='navbar-toggle collapsed' type='button' data-toggle='collapse' data-target='.bs-navbar-collapse'>
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?php echo $this->Html->url(array("controller" => "buildorders", "action" => "index"));?>" class="navbar-brand">SCII Build Order project</a>
				</div>
				<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
				    <ul class="nav navbar-nav navbar-right">
				      <li>
				        <a href="about">About</a>
				      </li>
				    </ul>
			    </nav>
			</div>
		</header>
		<div class='container'>
			<?php
			echo $this->Session->flash();
			echo $this->fetch('content');
			?>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
	<?php echo $this->Html->script('main'); ?>
</body>
</html>
