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
$route['upload_jadwal']										= 'jadwal/upload_jadwal';
$route['upload_destinasi']									= 'destinasi/upload_destinasi';
$route['upload_transport']									= 'transport/upload_transport';
$route['upload_store']										= 'store/upload_store';
$route['upload_news']										= 'news/upload_news';
$route['upload_promo']										= 'promo/upload_promo';
$route['upload_gallery1']									= 'gallery/upload_gallery1';
$route['upload_gallery2']									= 'gallery/upload_gallery2';
$route['upload_gallery3']									= 'gallery/upload_gallery3';
$route['upload_gallery4']									= 'gallery/upload_gallery4';
$route['upload_gallery5']									= 'gallery/upload_gallery5';
$route['upload_slider_home']								= 'slider/upload_slider_home';
$route['upload_bi']											= 'beranda/upload_bi';
$route['load_image/(:any)/(:any)/(:any)/(:num)/(:num)/(:num)'] 	= 'beranda/load_image/$1/$2/$3/$4/$5';
$route['detail_slider/(:num)/(:num)']						= 'beranda/detail_slider/$1';
$route['detail_jadwal/(:num)/(:num)']						= 'jadwal/detail_jadwal/$1';
$route['detail_destinasi/(:num)/(:num)']					= 'destinasi/detail_destinasi/$1';
$route['detail_transport/(:num)/(:num)']					= 'transport/detail_transport/$1';
$route['detail_store/(:num)/(:num)']						= 'store/detail_store/$1';
$route['detail_news/(:num)/(:num)']							= 'news/detail_news/$1';
$route['detail_promo/(:num)/(:num)']						= 'promo/detail_promo/$1';
$route['detail_gallery/(:num)/(:num)']						= 'gallery/detail_gallery/$1';
$route['detail_slider_home/(:num)/(:num)']					= 'slider/detail_slider_home/$1';
$route['get_data_slider']									= 'beranda/get_data_slider';
$route['del_img']											= 'beranda/del_img';
$route['del_img_um']										= 'beranda/del_img_um';
$route['del_img_um_ins']									= 'beranda/del_img_um_ins';
$route['delete_slider']										= 'beranda/delete_slider';
$route['save_beranda_text']									= 'beranda/save_beranda_text';
$route['sharon-gallery']									= 'about';
$route['upl']												= 'about/upl';
$route['del_img_gal']										= 'about/del_img_gal';
$route['sharon-story']										= 'story';
$route['upl2']												= 'story/upl2';
$route['del_img_sli']										= 'story/del_img_sli';
$route['save_keyword']										= 'lib_func/save_keyword';
$route['save_description']									= 'lib_func/save_description';
$route['save_title']										= 'lib_func/save_title';
$route['save_text']											= 'lib_func/save_text';
$route['save_address']										= 'lib_func/save_address';
$route['contact-us']										= 'contact';
$route['upload_contact']									= 'contact/upload_contact';
$route['save_contact_text']									= 'contact/save_contact_text';
$route['sharon-product']									= 'product';
$route['save_kategori']										= 'product/save_kategori';
$route['delete_on_produk']									= 'product/delete_on_produk';
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


$route['my-skin']											= 'skin/index';
$route['delete_on_skin']									= 'skin/delete_on_skin';
$route['save_skin']											= 'skin/save_skin';
$route['detail_skin/(:num)/(:num)']							= 'skin/detail_skin/$1';
$route['get_detail_skin']									= 'skin/get_detail_skin';
$route['upload_skin']										= 'skin/upload_skin';
$route['gallery']											= 'gallery/index';
$route['delete_on_image']									= 'gallery/delete_on_image';
$route['save_image']										= 'gallery/save_image';
$route['detail_image/(:num)/(:num)']						= 'gallery/detail_image/$1';
$route['get_detail_image']									= 'gallery/get_detail_image';
//$route['upload_image']										= 'gallery/upload_image';
$route['upload_image']										= 'contact/upload_image';
/*
$route['save_download']										= 'download/save_download';
$route['del_fl']											= 'download/del_fl';
$route['delete_download']									= 'download/delete_download';
$route['detail_download/(:num)/(:num)']						= 'download/detail_download/$1';
$route['get_detail_download']								= 'download/get_detail_download';
$route['get_file/(:any)']									= 'download/get_file/$1';
$route['upload_download']									= 'download/upload_download';
*/
$route['register']											= 'register/index';
$route['delete_on_register']								= 'register/delete_on_register';
$route['save_register']										= 'register/save_register';
$route['detail_register/(:num)/(:num)']						= 'register/detail_register/$1';
$route['detail_registered/(:num)/(:num)']					= 'registered/detail_registered/$1';
$route['get_detail_register']								= 'register/get_detail_register';
$route['upload_register']									= 'register/upload_register';
$route['produk_um']											= 'produk_um/index';
$route['delete_on_produk_um']								= 'produk_um/delete_on_produk_um';
$route['save_produk_um']									= 'produk_um/save_produk_um';
$route['detail_produk_um/(:num)/(:num)']					= 'produk_um/detail_produk/$1';
$route['get_list_produk_um']								= 'produk_um/get_list_produk_um';
$route['get_detail_produk_um']								= 'produk_um/get_detail_produk_um';
$route['upload_produk_um']									= 'produk_um/upload_produk_um';
$route['save_user_manual_um']								= 'produk_um/save_user_manual_um';
$route['delete_on_user_manual_um']							= 'produk_um/delete_on_user_manual_um';
$route['get_detail_user_manual_um']							= 'produk_um/get_detail_user_manual_um';
$route['where-to-buy']										= 'where';
$route['get_data_image']									= 'contact/get_data_image';
$route['detail_image/(:num)/(:num)']						= 'contact/detail_image/$1';
$route['delete_image_about']								= 'contact/delete_image_about';

$route['user_cs']											= 'user_cs/index';
$route['delete_user']										= 'user_cs/delete_user';
$route['detail_user/(:num)/(:num)']							= 'user_cs/detail_user/$1';
$route['detail_admin/(:num)/(:num)']						= 'user_admin/detail_admin/$1';
$route['get_data_user']										= 'user_cs/get_data_user';

$route['service']											= 'service/index';
$route['save_service']										= 'service/save_service';
$route['delete_service']									= 'service/delete_service';
$route['detail_service/(:num)/(:num)']						= 'service/detail_service/$1';
$route['get_detail_service']								= 'service/get_detail_service';
$route['print_service/(:any)']								= 'service/print_service/$1';
$route['print_service_cs/(:any)']							= 'service/print_service_cs/$1';

$route['import-no-kartu-garansi']							= 'imgar';
$route['upload_big_image']									= 'beranda/upload_big_image';
$route['upload_big_image_skin']								= 'skin/upload_big_image_skin';
$route['upload_big_image_produk']							= 'produk_um/upload_big_image_produk';

$route['detail_where_item/(:num)/(:num)']					= 'where/detail_where_item/$1';

$route['404_override'] 										= '';

//fpmipa2_server
$route['participant']										= 'participant/index';
$route['detail_participant/(:num)/(:num)']					= 'participant/detail_participant/$1';
$route['upload_participant']								= 'participant/upload_participant';
$route['get_data_participant']								= 'participant/get_data_participant';

$route['report_activity'] 									= 'report/index';
$route['save_report']										= 'report/save_report';
$route['del_fl']											= 'report/del_fl';
$route['delete_report']										= 'report/delete_report';
$route['detail_report/(:num)/(:num)']						= 'report/detail_report/$1';
$route['get_detail_report']									= 'report/get_detail_report';
$route['get_file/(:any)']									= 'report/get_file/$1';
$route['upload_report']										= 'report/upload_report';

$route['save_publication']									= 'publication/save_publication';
$route['del_fl_pb']											= 'publication/del_fl_pb';
$route['delete_publication']								= 'publication/delete_publication';
$route['detail_publication/(:num)/(:num)']					= 'publication/detail_publication/$1';
$route['get_detail_publication']							= 'publication/get_detail_publication';
$route['get_file_pb/(:any)']								= 'publication/get_file_pb/$1';
$route['upload_publication']								= 'publication/upload_publication';

$route['save_proceeding_detail']							= 'proceeding_detail/save_proceeding_detail';
$route['del_fl_pb']											= 'proceeding_detail/del_fl_pb';
$route['delete_proceeding_detail']							= 'proceeding_detail/delete_proceeding_detail';
$route['detail_proceeding_detail/(:num)/(:num)']			= 'proceeding_detail/detail_proceeding_detail/$1';
$route['get_detail_proceeding_detail']						= 'proceeding_detail/get_detail_proceeding_detail';
$route['get_file_pb/(:any)']								= 'proceeding_detail/get_file_pb/$1';
$route['upload_proceeding_detail']							= 'proceeding_detail/upload_proceeding_detail';

$route['research_project']									= 'research/index';
$route['save_research']										= 'research/save_research';
$route['del_fl_rp']											= 'research/del_fl_rp';
$route['delete_research']									= 'research/delete_research';
$route['detail_research/(:num)/(:num)']						= 'research/detail_research/$1';
$route['get_detail_research']								= 'research/get_detail_research';
$route['get_file_pb/(:any)']								= 'research/get_file_pb/$1';
$route['upload_research']									= 'research/upload_research';

$route['berita']                      = 'berita/index';
$route['save_berita']                   = 'berita/save_berita';
$route['delete_berita']                   = 'berita/delete_berita';
$route['detail_berita/(:num)/(:num)']           = 'berita/detail_berita/$1';
$route['get_detail_berita']                 = 'berita/get_detail_berita';
$route['upload_berita']                   = 'berita/upload_berita';

$route['seminar']                     = 'seminar/index';
$route['save_seminar']                    = 'seminar/save_seminar';
$route['delete_seminar']                    = 'seminar/delete_seminar';
$route['detail_seminar/(:num)/(:num)']            = 'seminar/detail_seminar/$1';
$route['get_detail_seminar']                  = 'seminar/get_detail_seminar';
$route['upload_seminar']                    = 'seminar/upload_seminar';

$route['lowongan_kerja']											= 'lowongan_kerja/index';
$route['save_lowongan_kerja']										= 'lowongan_kerja/save_lowongan_kerja';
$route['delete_lowongan_kerja']										= 'lowongan_kerja/delete_lowongan_kerja';
$route['detail_lowongan_kerja/(:num)/(:num)']						= 'lowongan_kerja/detail_lowongan_kerja/$1';
$route['get_detail_lowongan_kerja']									= 'lowongan_kerja/get_detail_lowongan_kerja';
$route['upload_lowongan_kerja']										= 'lowongan_kerja/upload_lowongan_kerja';

$route['pimpinan']											= 'pimpinan/index';
$route['detail_pimpinan/(:num)/(:num)']						= 'pimpinan/detail_pimpinan/$1';
$route['upload_pimpinan']									= 'pimpinan/upload_pimpinan';
$route['get_data_pimpinan']									= 'pimpinan/get_data_pimpinan';

$route['prestasi']											= 'prestasi/index';
$route['detail_prestasi/(:num)/(:num)']						= 'prestasi/detail_prestasi/$1';
$route['upload_prestasi']									= 'prestasi/upload_prestasi';
$route['get_data_prestasi']									= 'prestasi/get_data_prestasi';

$route['dosen']												= 'dosen/index';
$route['detail_dosen/(:num)/(:num)']						= 'dosen/detail_dosen/$1';
$route['upload_dosen']										= 'dosen/upload_dosen';
$route['get_data_dosen']									= 'dosen/get_data_dosen';

$route['tata_usaha']										= 'tata_usaha/index';
$route['detail_tata_usaha/(:num)/(:num)']					= 'tata_usaha/detail_tata_usaha/$1';
$route['upload_tata_usaha']									= 'tata_usaha/upload_tata_usaha';
$route['get_data_tata_usaha']								= 'tata_usaha/get_data_tata_usaha';

$route['laboran_teknisi']									= 'laboran_teknisi/index';
$route['detail_laboran_teknisi/(:num)/(:num)']				= 'laboran_teknisi/detail_laboran_teknisi/$1';
$route['upload_laboran_teknisi']							= 'laboran_teknisi/upload_laboran_teknisi';
$route['get_data_laboran_teknisi']							= 'laboran_teknisi/get_data_laboran_teknisi';

$route['peralatan']											= 'peralatan/index';
$route['detail_peralatan/(:num)/(:num)']					= 'peralatan/detail_peralatan/$1';
$route['upload_peralatan']									= 'peralatan/upload_peralatan';
$route['get_data_peralatan']								= 'peralatan/get_data_peralatan';

$route['laboratorium']										= 'laboratorium/index';
$route['detail_laboratorium/(:num)/(:num)']					= 'laboratorium/detail_laboratorium/$1';
$route['upload_laboratorium']								= 'laboratorium/upload_laboratorium';
$route['get_data_laboratorium']								= 'laboratorium/get_data_laboratorium';

$route['sarana_prasarana']									= 'sarana_prasarana/index';
$route['detail_sarana_prasarana/(:num)/(:num)']				= 'sarana_prasarana/detail_sarana_prasarana/$1';
$route['upload_sarana_prasarana']							= 'sarana_prasarana/upload_sarana_prasarana';
$route['get_data_sarana_prasarana']							= 'sarana_prasarana/get_data_sarana_prasarana';

/* End of file routes.php */
/* Location: ./application/config/routes.php */