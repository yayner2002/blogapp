<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['users/login'] = 'users/login';
$route['post/index'] = 'post/index';
$route['posts/latest'] = 'post/index';
$route['categories/create'] = 'categories/create';
$route['post/edit'] = 'post/edit';
$route['post/update'] ='post/update';
$route['post/create'] = 'post/create';



$route['categories'] = 'categories/index';
$route['categories/posts/(:any)'] = 'categories/posts/$1';

$route['post/(:any)'] = 'post/view/$1';
$route['default_controller'] = 'pages/index';
$route['pages/dashboard'] = 'pages/index';
$route['(:any)'] = 'pages/view/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
 // echo base_url();
