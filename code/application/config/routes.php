<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "c_login";
$route['404_override'] = '';

$route['kolektif/(:any)/filter/(:any)'] = 'kolektif/filter_menu/$2';
$route['pelanggan_TM/(:any)/filter/(:any)'] = 'pelanggan_TM/filter_menu/$2';
$route['pelanggan_TR/(:any)/filter/(:any)'] = 'pelanggan_TR/filter_menu/$2';

$route['HPL/TR/(:any)'] = 'pelanggan_TR/HPL/$1';
$route['HPL/TM/(:any)'] = 'pelanggan_TM/HPL/$1';
$route['HPL/KOL/(:any)'] = 'kolektif/HPL/$1';
