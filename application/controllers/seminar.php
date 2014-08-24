<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Seminar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('seminar_model');
	}
	
	function index()
	{
		$page = $this->home_model->get_page('0000033');	
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
		
		$data['seminar'] = '';	
		$seminar = $this->seminar_model->get_seminar();	
		if($seminar->num_rows() > 0)		
		{			
			foreach($seminar->result() as $data_seminar)	
			{				
				$id_seminar = $data_seminar->id_seminar;			
				$title = $data_seminar->title;			
				$content = $data_seminar->content;		
				$content_limiter = character_limiter($content, 200);	
				$data['seminar'] .= '<div class="box_seminar" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.8em;">
										<a href="'.site_url('seminar/'.url_title($title).'/'.$id_seminar).'"><h5>'.$title.'</h5></a>		
										<p>'.$content_limiter.' <a href="'.site_url('seminar/'.url_title($title).'/'.$id_seminar).'">(Selengkapnya...)</a></p>
									</div>';
			}		
		}
		else
		{
			$data['seminar'] .= '<div class="box_seminar" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.8em;">
									<h5 style="color:red;">Empty Page</h5>
								</div>';
		}
		
		$this->load->view('seminar_view',$data);
	}
	
	function detail_seminar()
	{
		$id_seminar = $this->uri->segment(3);
		$data['id_seminar'] = $id_seminar;	
		$detail_seminar = $this->seminar_model->get_detail_seminar($id_seminar);
		if($detail_seminar->num_rows() > 0)		
		{			
			foreach($detail_seminar->result() as $data_detail_seminar)		
			{				
				$data['title'] = $data_detail_seminar->title;	
				$data['meta_keywords'] = $data_detail_seminar->meta_keywords;
				$data['meta_description'] = $data_detail_seminar->meta_description;
				$data['content'] = $data_detail_seminar->content;		
			}	
		}	
		else
		{		
			$data['title'] = 'Seminar tidak ditemukan';
			$data['meta_keywords'] = '';			
			$data['meta_description'] = '';		
			$data['content'] = 'Seminar tidak ditemukan';
		}		
	
		$this->load->view('detail_seminar_view',$data);
	}
}

/* End of File : seminar.php */
/* Location : ./controllers/seminar.php */