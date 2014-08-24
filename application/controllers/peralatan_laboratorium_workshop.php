<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Peralatan_laboratorium_workshop extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	
	function index()
	{
		$page = $this->home_model->get_page('0000015');	
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
		
		$this->load->view('peralatan_laboratorium_workshop_view',$data);
	}
}

/* End of File : peralatan_laboratorium_workshop.php */
/* Location : ./controllers/peralatan_laboratorium_workshop.php */