<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\FincasController;
use Controllers\PaginasController;
use Controllers\DashboardController;
use Controllers\EmpleadosController;

$router = new Router();

$router->get('/', [PaginasController::class, 'index']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->get('/planes', [PaginasController::class, 'planes']);
$router->post('/planes', [PaginasController::class, 'planes']);
$router->get('/terminos', [PaginasController::class, 'terminos']);
$router->get('/tratamiento', [PaginasController::class, 'tratamiento']);


//TODO LO RELACIONADO CON EL LOGIN, LOGOUT, CREAR, RECUPERAR Y CONFIRMAR CUENTA

$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);
$router->get('/crear', [AuthController::class, 'crear']);
$router->post('/crear', [AuthController::class, 'crear']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

//TODO LO DE LA SECCION DEL DASHBOARD
$router->get('/dashboard/index', [DashboardController::class, 'index']);

//TODO lo de fincas
$router->get('/dashboard/fincas/index', [FincasController::class, 'index']);
$router->get('/dashboard/fincas/crear', [FincasController::class, 'crear']);
$router->post('/dashboard/fincas/crear', [FincasController::class, 'crear']);
$router->get('/dashboard/fincas/editar', [FincasController::class, 'editar']);
$router->post('/dashboard/fincas/editar', [FincasController::class, 'editar']);
$router->post('/dashboard/fincas/eliminar', [FincasController::class, 'eliminar']);
$router->get('/dashboard/fincas/perfil', [FincasController::class, 'perfil']);

$router->get('/dashboard/empleados/index', [EmpleadosController::class, 'index']);
$router->get('/dashboard/empleados/crear', [EmpleadosController::class, 'crear']);
$router->post('/dashboard/empleados/crear', [EmpleadosController::class, 'crear']);
$router->get('/dashboard/empleados/editar', [EmpleadosController::class, 'editar']);
$router->post('/dashboard/empleados/editar', [EmpleadosController::class, 'editar']);
$router->post('/dashboard/empleados/eliminar', [EmpleadosController::class, 'eliminar']);
$router->get('/dashboard/empleados/perfil', [EmpleadosController::class, 'perfil']);


$router->get('/dashboard/cuenta/index', [DashboardController::class, 'cuenta']);

$router->comprobarRutas();