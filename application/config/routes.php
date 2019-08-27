<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['mod_products'] = 'AdminCtrl/mod_products';
$route['materials'] = 'AdminCtrl/materials';
$route['product'] = 'AdminCtrl/product';
$route['dashboard'] = 'AdminCtrl/dashboard';
$route['purchase'] = 'AdminCtrl/purchase';



$route['login'] = 'LoginCtrl/login';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
