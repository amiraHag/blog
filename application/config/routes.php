<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'pages/view';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';
$route['posts/index'] = 'posts/index';
$route['posts'] = 'posts/index';
$route['posts/(:any)'] = 'posts/view/$1';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;