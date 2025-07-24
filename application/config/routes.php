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
$route['default_controller'] = 'Home_public';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/Admincontroller/index';
$route['admin/change-password'] = 'admin/Admincontroller/change_password';
$route['admin/dashboard'] = 'dashboard/Dashboardcontroller/index';
$route['admin/service-category'] = 'service-category/Servicecategory/index';

$route['admin/cars'] = 'cars/Carcontroller/index';
$route['admin/cars/edit/(:num)'] = 'cars/Carcontroller/editCar/$1';
$route['admin/cars/update/(:num)'] = 'cars/Carcontroller/update/$1';

$route['admin/orders'] = 'orders/Ordercontroller/index';
$route['admin/order-details/view/(:num)'] = 'orders/Ordercontroller/getOrderDetails/$1';


$route['admin/service'] = 'service/Servicecontroller/index';

$route['admin/contact'] = 'contact/Contactcontroller/index';

$route['services'] = 'Home_public/services';
$route['services/(:any)'] = 'Home_public/services_detail/$1';

$route['faq'] = 'Home_public/faq';
$route['aboutus'] = 'Home_public/aboutus';
// Faq..

$route['admin/faq'] = 'faq/Faqcontroller/index';
$route['admin/faq/add'] = 'faq/Faqcontroller/create';
$route['admin/faq/edit/(:num)'] = 'faq/Faqcontroller/edit/$1';
$route['admin/faq-user-question'] = 'faq/Faqcontroller/faqUser';
// photos..

$route['admin/photos'] = 'gallery/GalleryController/index';
$route['admin/photos/list'] = 'gallery/GalleryController/galleryList';
$route['admin/photos/create'] = 'gallery/GalleryController/createGallery';
$route['admin/photos/edit'] = 'gallery/GalleryController/editGallery';   
$route['admin/photos/remove'] = 'gallery/GalleryController/deleteGallery';   
// videos..
$route['admin/videos'] = 'videos/VideoController/index';
$route['admin/videos/list'] = 'videos/VideoController/videoList';
$route['admin/videos/create'] = 'videos/VideoController/createVideo';
$route['admin/videos/edit'] = 'videos/VideoController/editVideo';    
$route['admin/videos/remove'] = 'videos/VideoController/deleteVideo';   

// Tag Management Admin
$route['admin/tags'] = 'tags/Tagcontroller/index';
$route['admin/tags/create'] = 'tags/Tagcontroller/create';
$route['admin/tags/saveTag'] = 'tags/Tagcontroller/saveTag';
$route['admin/tags/edit/(:num)'] = 'tags/Tagcontroller/edit/$1';
$route['admin/tags/updateTag/(:num)'] = 'tags/Tagcontroller/updateTag/$1';
$route['admin/tags/tagDelete'] = 'tags/Tagcontroller/tagDelete';
$route['admin/tags/getAllTags'] = 'tags/Tagcontroller/getAllTags';

/**
 *  New 
 */
$route['thankyou'] = 'Home_public/thankyou';
$route['testimonials'] = 'Home_public/testimonilas';
$route['gallery'] = 'Home_public/gallery';
$route['gallery/(:any)'] = 'Home_public/gallery/$1';
$route['video'] = 'Home_public/video';
$route['video/(:any)'] = 'Home_public/video/$1';
$route['centers'] = 'Home_public/centers';
$route['centers/search'] = 'Home_public/search_centers';


$route['insurance'] = 'Home_public/insurance';
