<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
$route['Affiliate-Signup'] = 'Affiliate_signup';
$route['Signup-Error'] = 'Affiliate_signup';
$route['Dashboard'] = 'Dashboard/page';
$route['dashboard'] = 'Dashboard/page';
$route['Logout'] = 'Wbd_logout';
$route['Admin-Panel'] = 'Cgpanel';
$route['Admin-Login'] = 'Cgpanellg';
$route['Reset-Password'] = 'Reset_pass';
$route['Alloffer'] = 'Alloffer/page';
$route['Contact-Us'] = 'Contact_us';
$route['Logout/change-password'] = 'Wbd_logout/change_password';
$route['change-password'] = 'Change_password';
$route['user-profile'] = 'Profile';
$route['Offer/details/(:num)'] = 'offer/details/$1';
$route['about-us'] = 'Aboutus';









