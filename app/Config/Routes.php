<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('menu', 'Home::index');
$routes->get('planes','PlanesController::index');
$routes->get('nuevo_plan','PlanesController::nuevoPlan');
$routes->post('agregar_plan','PlanesController::agregarPlan');





$routes->get('lineas_telefonicas','LineasTelefonicasController::LineasTelefonicas');
$routes->post('agregar_linea','LineasTelefonicasController::agregarLinea');
$routes->get('nuevo_linea','LineasTelefonicasController::LineasTelefonicasNuevas');


$routes->get('/clientes', 'ClientesController::index');
$routes->get('/nuevo_cliente', 'ClientesController::nuevoCliente');
$routes->post('/agregar_cliente', 'ClientesController::agregarCliente');
$routes->get('/editar_cliente/(:num)', 'ClientesController::editarCliente/$1');
$routes->post('/actualizar_cliente', 'ClientesController::actualizarCliente');
$routes->get('/eliminar_cliente/(:num)', 'ClientesController::eliminarCliente/$1');


$routes->get('/editar_linea/(:num)', 'LineasTelefonicasController::editarLinea/$1');
$routes->post('/actualizar_linea', 'LineasTelefonicasController::actualizarLinea');
$routes->get('/eliminar_linea/(:num)', 'LineasTelefonicasController::eliminarLinea/$1');

$routes->get('/editar_plan/(:num)', 'PlanesController::editarPlan/$1');
$routes->post('/actualizar_plan', 'PlanesController::actualizarPlan');
$routes->get('/eliminar_plan/(:num)', 'PlanesController::eliminarPlan/$1');