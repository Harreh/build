<hr>
<li>
	<?php if (AuthComponent::user('id')) {
		echo $this->html->link('Logout', '/logout');
		echo $this->html->link('My Account', '/users/edit');
	} else {
		echo $this->html->link('Login', '/');
	} ?>
</li>
