<?php
Router::connect('/', array('controller' => 'buildorders', 'action' => 'index'));
Router::connect('/view/*', array('controller' => 'buildorders', 'action' => 'view'));
Router::connect('/saved', array('controller' => 'buildorders', 'action' => 'saved'));
Router::connect('/add', array('controller' => 'buildorders', 'action' => 'add'));
Router::connect('/edit/*', array('controller' => 'buildorders', 'action' => 'edit'));
Router::connect('/favourites', array('controller' => 'favourites', 'action' => 'index'));

CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';
