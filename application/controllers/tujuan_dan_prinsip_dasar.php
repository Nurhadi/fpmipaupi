<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Tujuan_dan_prinsip_dasar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	
	function index()
	{
		$page = $this->home_model->get_page('0000023');	
		if($page->num_rows() > 0)		
		{			
			foreach($page->result() as $data_page)			
			{				
				$data['title'] = $data_page->title;				
				$data['meta_keywords'] = $data_page->meta_keywords;				
				$data['meta_description'] = $data_page->meta_description;				
				$data['content'] = $data_page->content;			
			}		
		}
		
		$this->load->view('tujuan_dan_prinsip_dasar_view',$data);
	}
}

/* End of File : tujuan_dan_prinsip_dasar.php */
/* Location : ./controllers/tujuan_dan_prinsip_dasar.php */