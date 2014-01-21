<hr>
<li>
	<?php if (AuthComponent::user('id')) {
		echo $this->html->link('Logout', '/logout');
	} else {
		echo $this->html->link('Login', '/');
	} ?>
</li>
