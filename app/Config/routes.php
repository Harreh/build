<?php
Router::connect('/', array('controller' => 'buildorders', 'action' => 'index'));
Router::connect('/view/*', array('controller' => 'buildorders', 'action' => 'view'));
Router::connect('/saved', array('controller' => 'buildorders', 'action' => 'saved'));
Router::connect('/add', array('controller' => 'buildorders', 'action' => 'add'));
Router::connect('/edit/*', array('controller' => 'buildorders', 'action' => 'edit'));
Router::connect('/favourites', array('controller' => 'favourites', 'action' => 'index'));
Router::connect('/login', array('plugin' => 'users', 'controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('plugin' => 'users', 'controller' => 'users', 'action' => 'logout'));

CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';
