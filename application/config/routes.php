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

$route['default_controller'] = "home";
$route['home']				 = "home/index";
$route['home_testing'] = "home/home_testing";
$route['visi-misi']			 = "visi_misi/index";
$route['kurikulum-dan-perkuliahan'] = "kurikulum_perkuliahan/index";
$route['tata-usaha']				= "tata_usaha/index";
$route['laboran-teknisi']			= "laboran_teknisi/index";
$route['sarana-dan-prasarana'] 		= "sarana_prasarana/index";
$route['info-beasiswa']				= "info_beasiswa/index";
$route['jenis-beasiswa']			= "jenis_beasiswa/index";
$route['proceeding-pdf']			= "proceeding_pdf/index";
$route['proceeding-detail']			= "proceeding_detail/index";
$route['tentang-ikom']				= "tentang_ikom/index";
$route['visi-misi-ikom']			= "visi_misi_ikom/index";
$route['pengurus-ikom']				= "pengurus_ikom/index";
$route['donatur-ikoma']				= "donatur_ikoma/index";
$route['organizing-committee']		= "organizing_committee/index";
$route['research-project']			= "research_project/index";
$route['report-activity']			= "report_activity/index";
$route['berita/(:any)']				= "berita/detail_berita/$1";
$route['agenda/(:any)']				= "agenda/detail_agenda/$1";
$route['seminar/(:any)']			= "seminar/detail_seminar/$1";
$route['kalender-akademik']			= "kalender_akademik";
$route['layanan_pelatihan/(:any)']	= "layanan_pelatihan/detail_layanan_pelatihan/$1";
$route['fasilitas/(:any)']			= "fasilitas/detail_fasilitas/$1";
$route['lowongan_kerja/(:any)']		= "lowongan_kerja/detail_lowongan_kerja/$1";
$route['tujuan-dan-prinsip-dasar']	= "tujuan_dan_prinsip_dasar/index";
$route['peralatan-laboratorium-dan-workshop'] = "peralatan_laboratorium_workshop";
$route['detail-participant/(:num)']			  = "participant/detail_participant";
$route['download_report_activity/(:any)']	  = "participant/download_report_activity/$1";
$route['download_publication/(:any)']		  = "participant/download_publication/$1";
$route['download_research_project/(:any)']	  = "participant/download_research_project/$1";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */