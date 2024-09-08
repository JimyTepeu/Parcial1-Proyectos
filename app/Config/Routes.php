<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Estas son las rutas para ver, crear y guardar cliente.

$routes->get('ver_cliente','ControladorCliente::verCliente');
$routes->get('crear_cliente','ControladorCliente::crearCliente');
$routes->post('guardar_cliente', 'ControladorCliente::guardarCliente');

// Esta es la ruta para editar y actualizar cliente

$routes->get('editar_cliente/(:num)', 'ControladorCliente::editarCliente/$1');
$routes->post('actualizar_cliente/(:num)', 'ControladorCliente::actualizarCliente/$1');

// Esta es la ruta para eliminar
$routes->get('eliminar_cliente/(:num)', 'ControladorCliente::eliminarCliente/$1');

// Esta es la ruta para la pagina en construccion
$routes->get('construccion', 'ControladorDetallefactura::verConstruccion');

