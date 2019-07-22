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
$route['default_controller'] = 'Layout';
$route['dashboard']= 'Pages';
$route['learning-center']= 'Pages/lCenter';
$route['learning-center-viewmore/(:any)']='Pages/lCenterViewmore/$1';
$route['login']='Pages/login';
$route['forgetpass']='Pages/forgetPass';
$route['term']='Pages/term';
$route['process']='Pages/ourProcess';
$route['career']='Pages/career';
$route['supporters']='Pages/supporters';
$route['team']='Pages/team';
$route['admin']='Admin';
$route['A_login']='Admin/Login';
$route['A_logout']='Admin/logout';
$route['home']='Admin/home';
$route['A_forgetpass']='Admin/forgetPass';
$route['A_forpass']='Admin/forpass';
$route['A_changepass']='Admin/cpass';
$route['A_updatepass']='Admin/updatepass';


$route['static-page']='Admin/sPage';
$route['edit/(:any)']='Admin/edit_view/$1';
$route['del/(:any)']='Admin/sDelete';
$route['user_management']='Admin/uManagement';
$route['user_edit/(:any)']='Admin/uEdit/$1';
$route['user_delete/(:any)']='Admin/uDelete/$1';
$route['user_update']='Admin/uUpdate';
$route['user_management']='Admin/uManagement';
$route['catagory'] = 'Admin/cManagement';
$route['catagory_add']='Admin/cAdd_view';
$route['cADD']='Admin/cADD';
$route['catagory_edit/(:any)']='Admin/Cedit_view/$1';
$route['catagory_update']='Admin/cUpdate';
$route['catagory_delete/(:any)']='Admin/cDelete/$1';
$route['active/(:any)']='Admin/active';
$route['inactive/(:any)']='Admin/inactive';
$route['artical']='Admin/aManagement';
$route['artical_add']='Admin/aAdd_view';
$route['aADD']='Admin/aADD';
$route['getCatagoryName']='Admin/getCatagoryName';
$route['artical_edit/(:any)']='Admin/aEdit';
$route['artical_update']='Admin/aUpdate';
$route['artical_delete/(:any)']='Admin/aDelete/$1';
$route['artical_inactive/(:any)']='Admin/artical_inactive/$1';
$route['artical_active/(:any)']='Admin/artical_active/$1';
$route['freshCategory']='Admin/freshCataManagement';
$route['freshCata_add']='Admin/freshCataAdd_view';
$route['freshCataADD']='Admin/freshCataADD';
$route['freshCataEdit/(:any)']='Admin/freshCataedit_view/$1';
$route['freshCata_update']='Admin/freshCataUpdate';
$route['freshCata_Delete/(:any)']='Admin/freshCataDelete/$1';

$route['freshstart']='Admin/freshManagement';
$route['fresh_add']='Admin/freshAdd_view';
$route['freshADD']='Admin/freshADD';
$route['fresh_edit/(:any)']='Admin/freshEdit/$1';
$route['fresh_update']='Admin/freshUpdate';
$route['fresh_delete/(:any)']='Admin/freshDelete/$1';
$route['pressManagement']='Admin/pressManagement';
$route['pressAdd']='Admin/pressAdd_view';
$route['pressInsert']='Admin/pressADD';
$route['press_edit/(:any)']='Admin/pressEdit/$1';
$route['press_update']='Admin/pressUpdate';
$route['press_delete/(:any)']='Admin/pressDelete/$1';


$route['profile_update']='Pages/profileUpdate';
$route['login']='Pages/Login';
$route['log']='Pages/log';
$route['logout']='Pages/logout';
$route['forpass']='Pages/forpass';
$route['changepass']='Pages/cpass';
$route['updatepass']='Pages/updatepass';
$route['fresh']='Pages/fresh';
$route['software']='Pages/software';
$route['freshViewmore/(:any)']='Pages/freshViewmore/$1';
$route['press']='Pages/press';
$route['popup']='Pages/popup';
$route['signup']='Pages/signup_view';
$route['sign']='Pages/save';
$route['search_artical']='Pages/search_artical';
$route['search_fresh_artical']='Pages/getFreshArticle';
$route['pdf']='Pages/pdf';
//$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
