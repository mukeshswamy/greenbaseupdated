<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['home'] = 'welcome';
$route['our-legacy'] = 'welcome/ourlegacy';
$route['value-proposition'] = 'welcome/valueproposition';
$route['clients'] = 'welcome/clients';
$route['gallery'] = 'welcome/gallery';
$route['contact'] = 'welcome/contact';
$route['news'] = 'welcome/news';
$route['blogs'] = 'welcome/blogs';
$route['blogpost/(:any)'] = 'welcome/blogpost/$1';
$route['newspost'] = 'welcome/newspost';
$route['newspost/(:any)'] = 'welcome/newspost/$1';
$route['location'] = 'welcome/location';
$route['viewplan/(:any)'] = 'welcome/viewplan/$1';
// BACKEND ROUTEING
$route['mail_send'] = 'welcome/send_mail';
$route['admin-gb'] = 'auth';
$route['dashboard'] = 'auth/dashboard';
$route['logout'] = 'auth/logout';
$route['home-dashboard'] = 'auth/home_dashboard';
$route['about-dashboard'] = 'auth/about_dashboard';
$route['whyus-dashboard'] = 'auth/whyus_dashboard';
$route['clients-dashboard'] = 'auth/client_dashboard';
$route['newspages'] = 'auth/newspage';
$route['blogspage'] = 'auth/blogspage';
$route['gallerypage'] = 'auth/gallerypage';
$route['newscreate'] = 'auth/newsaddpage';
$route['newsedit/(:any)'] = 'auth/newseditpage/$1';
$route['blogsadd'] = 'auth/blogsadd';
$route['resetpassword'] = 'auth/resetpassword';
$route['blogsedit/(:any)'] = 'auth/blogsedit/$1';
$route['galleryadd'] = 'auth/addNewGallery';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
