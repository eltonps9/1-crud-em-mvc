<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index'); 
$router->get('/new', 'UsuariosController@new');
$router->post('/add_action', 'UsuariosController@add_action');
$router->get('/editar/{id}', 'UsuariosController@editar');
$router->post('/editar_action/{id}', 'UsuariosController@editar_action');
$router->get('/excluir/{id}', 'UsuariosController@excluir');

