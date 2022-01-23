<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['about'] = 'home/about';
$route['contact'] = 'home/contact';
$route['innovative'] = 'home/innovative';
$route['travels'] = 'home/travels';

$route['admin/signin'] = 'auth/adminlogin';
$route['admin/signout'] = 'auth/adminsignout';

$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['translate_uri_dashes'] = FALSE;
