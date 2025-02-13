<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Module A: Login and Register
$route['login']['GET'] = 'Auth/RegisterController/index';
$route['login']['POST'] = 'Auth/RegisterController/login';
// Dashboard
$route['home']['GET'] = 'Home/HomeController/index';
$route['apply_io_application']['GET'] = 'Home/HomeController/apply_io_application';
$route['applied_io_application']['GET'] = 'Auth/ApplyIoApplication/show_applied_io_applications';
$route['hod']['GET'] = 'Hod/HodController/index';
$route['principle']['GET'] = 'Principle/PrincipleController/index';
$route['registrar']['GET'] = 'Registrar/RegistrarController/index';


$route['apply_leave']['GET'] = 'Leave/LeaveController/index';

//leave
$route['apply_leave']['POST'] = 'Leave/LeaveController/apply_leave';
$route['leave_history']['GET'] = 'Leave/LeaveController/leave_history';
$route['leave_types']['GET'] = 'Leave/LeaveController/leave_types';