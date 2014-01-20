<hr>
<li>
	<?php if (AuthComponent::user('id')) {
		echo $this->html->link('Logout', array('controller' => '/', 'action' => 'logout'));
	} else {
		echo $this->html->link('Login', array('controller' => '/', 'action' => 'login'));
	} ?>
</li>
