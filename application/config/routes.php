<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'intro';
$route['404_override'] = '';
$route['booking'] = 'BookingRoom';
$route["booking/(:any)"] = "BookingRoom/fill_book/$1";
// $route["location/(:any)/(:num)"] = "location/index/$1/($2)";
$route['translate_uri_dashes'] = TRUE;
