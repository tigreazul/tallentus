<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/

$route['default_controller'] = "inicio/dashboard";

# Registro Usuario
$route['registro'] = "inicio/dashboard/registrar";
$route['entrar'] = "inicio/dashboard/entrar";
$route['salir'] = "inicio/dashboard/logout";
$route['upload'] = "inicio/dashboard/upload_imagen";


$route['registro-paso-2/(:any)'] = "inicio/dashboard/paso2/$1";
$route['registro-paso-3'] = "inicio/dashboard/paso3";
$route['finalizar'] = "inicio/dashboard/paso3";
$route['mi-cuenta'] = "inicio/dashboard/perfil";
$route['editar-perfil'] = "inicio/dashboard/editar_perfil";
$route['editar-areas'] = "inicio/dashboard/editar_areas";
$route['update-areas'] = "inicio/dashboard/update_areas";
$route['distrito/(:any)'] = "inicio/dashboard/listado_distrito/$1";
$route['area/(:any)'] = "inicio/dashboard/listado_area_servicio/$1";




$route['empresa/registro-empresa'] = "inicio/empresa/crear_empresa";
$route['empresa'] = "inicio/empresa";


$route['registrar'] = "inicio/empresa/registrar";
$route['login-empresa'] = "inicio/empresa/registrar";
$route['entrar-empresa'] = "inicio/empresa/entrar";
$route['empresa/mi-empresa'] = "inicio/empresa/perfil";
$route['crear-aviso'] = "inicio/empresa/aviso";
$route['crear-publicacion-aviso'] = "inicio/empresa/crear_aviso";
$route['listado-empresas'] = "inicio/empresa/listado_empresa";
$route['empresas/(:any)'] = "inicio/empresa/empresa_public/$1";




$route['empleo/(:any)'] = "inicio/postulacion/index/$1";
$route['postular/(:any)'] = "inicio/postulacion/postular/$1";








$route['admin'] = "login/inicio";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */