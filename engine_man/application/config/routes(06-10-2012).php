<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] 								= 'golog';
$route['login']												= 'golog';
$route['forgot']											= 'golog/forgot';
$route['res_pass']											= 'golog/res_pass';
$route['dashboard']											= 'main';
$route['home']												= 'beranda';
$route['upload_slider']										= 'beranda/upload_slider';
$route['upload_bi']											= 'beranda/upload_bi';
$route['load_image/(:any)/(:any)/(:num)/(:num)/(:num)'] 	= 'beranda/load_image/$1/$2/$3/$4';
$route['detail_slider/(:num)/(:num)']						= 'beranda/detail_slider/$1';
$route['get_data_slider']									= 'beranda/get_data_slider';
$route['del_img']											= 'beranda/del_img';
$route['delete_slider']										= 'beranda/delete_slider';
$route['sharon-store']										= 'about';
$route['upl']												= 'about/upl';
$route['del_img_gal']										= 'about/del_img_gal';
$route['sharon-story']										= 'story';
$route['upl2']												= 'story/upl2';
$route['del_img_sli']										= 'story/del_img_sli';
$route['save_keyword']										= 'lib_func/save_keyword';
$route['save_description']									= 'lib_func/save_description';
$route['save_title']										= 'lib_func/save_title';
$route['save_text']											= 'lib_func/save_text';
$route['contact-us']										= 'contact';
$route['upload_contact']									= 'contact/upload_contact';
$route['save_contact_text']									= 'contact/save_contact_text';
$route['sharon-product']									= 'product';
$route['save_kategori']										= 'product/save_kategori';
$route['delete_on_produk']									= 'product/delete_on_produk';
$route['save_produk']										= 'product/save_produk';
$route['detail_produk/(:num)/(:num)']						= 'product/detail_produk/$1';
$route['get_detail_produk']									= 'product/get_detail_produk';
$route['list_kat/(:num)']									= 'product/list_kat';
$route['upload_produk']										= 'product/upload_produk';
$route['upload_produk2']									= 'product/upload_produk2';
$route['meta-tag']											= 'meta';
$route['save_gac']											= 'meta/save_gac';
$route['save_mc']											= 'meta/save_mc';
$route['delete_inbox']										= 'inbox/delete_inbox';
$route['send_mail']											= 'inbox/send_mail';
$route['detail_inbox/(:num)/(:num)']						= 'inbox/detail_inbox/$1';
$route['delete_comment']									= 'comment/delete_comment';
$route['reply_comment']										= 'comment/reply_comment';
$route['app_comment']										= 'comment/app_comment';
$route['detail_comment/(:num)/(:num)']						= 'comment/detail_comment/$1';
$route['sharon-news']										= 'article';
$route['save_kategori_artikel']								= 'article/save_kategori_artikel';
$route['list_kat_artikel/(:num)']							= 'article/list_kat_artikel';
$route['save_artikel']										= 'article/save_artikel';
$route['detail_artikel/(:num)/(:num)']						= 'article/detail_artikel/$1';
$route['get_detail_artikel']								= 'article/get_detail_artikel';
$route['delete_on_artikel']									= 'article/delete_on_artikel';
$route['upload_artikel']									= 'article/upload_artikel';
$route['our-recipes']										= 'recipes';
$route['delete_on_resep']									= 'recipes/delete_on_resep';
$route['save_resep']										= 'recipes/save_resep';
$route['detail_resep/(:num)/(:num)']						= 'recipes/detail_resep/$1';
$route['get_detail_resep']									= 'recipes/get_detail_resep';
$route['delete_on_history']									= 'history/delete_on_history';
$route['save_history']										= 'history/save_history';
$route['detail_history/(:num)/(:num)']						= 'history/detail_history/$1';
$route['get_detail_history']								= 'history/get_detail_history';
$route['upload_history']									= 'history/upload_history';
$route['bread-types']										= 'bread';
$route['delete_on_bread']									= 'bread/delete_on_bread';
$route['save_bread']										= 'bread/save_bread';
$route['detail_bread/(:num)/(:num)']						= 'bread/detail_bread/$1';
$route['get_detail_bread']									= 'bread/get_detail_bread';
$route['tips-tricks']										= 'tips';
$route['delete_on_tips']									= 'tips/delete_on_tips';
$route['save_tips']											= 'tips/save_tips';
$route['detail_tips/(:num)/(:num)']							= 'tips/detail_tips/$1';
$route['get_detail_tips']									= 'tips/get_detail_tips';
$route['how-it-works']										= 'how';
$route['delete_on_how']										= 'how/delete_on_how';
$route['save_how']											= 'how/save_how';
$route['detail_how/(:num)/(:num)']							= 'how/detail_how/$1';
$route['get_detail_how']									= 'how/get_detail_how';
$route['recipe-of-the-month']								= 'recipes_otm';
$route['delete_on_resep_otm']								= 'recipes_otm/delete_on_resep_otm';
$route['save_resep_otm']									= 'recipes_otm/save_resep_otm';
$route['detail_resep_otm/(:num)/(:num)']					= 'recipes_otm/detail_resep_otm/$1';
$route['get_detail_resep_otm']								= 'recipes_otm/get_detail_resep_otm';
$route['sharon-club']										= 'club';
$route['app_club']											= 'club/app_club';
$route['404_override'] 										= '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */