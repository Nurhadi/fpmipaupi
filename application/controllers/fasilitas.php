<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Fasilitas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('fasilitas_model');
	}
	
	/*
	function index()
	{
		$page = $this->home_model->get_page('0000036');	
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
		
		$data['fasilitas'] = '';	
		$fasilitas = $this->fasilitas_model->get_fasilitas();	
		if($fasilitas->num_rows() > 0)		
		{			
			foreach($fasilitas->result() as $data_fasilitas)	
			{				
				$id_fasilitas = $data_fasilitas->id_fasilitas;			
				$title = $data_fasilitas->title;			
				$content = $data_fasilitas->content;		
				$content_limiter = character_limiter($content, 200);	
				$data['fasilitas'] .= '<div class="box_fasilitas" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.8em;">
											<a href="'.site_url('fasilitas/'.url_title($title).'/'.$id_fasilitas).'"><h5>'.$title.'</h5></a>		
											<p>'.$content_limiter.' <a href="'.site_url('fasilitas/'.url_title($title).'/'.$id_fasilitas).'">(Selengkapnya...)</a></p>
										</div>';
			}		
		}
		else
		{
			$data['fasilitas'] .= '<div class="box_fasilitas" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.8em;">
										<h5 style="color:red;">Empty Page</h5>
									</div>';
		}
		
		$this->load->view('fasilitas_view',$data);
	}
	*/
	
	function detail_fasilitas()
	{
		$id_fasilitas = $this->uri->segment(3);
		$data['id_fasilitas'] = $id_fasilitas;	
		$detail_fasilitas = $this->fasilitas_model->get_detail_fasilitas($id_fasilitas);
		if($detail_fasilitas->num_rows() > 0)		
		{			
			foreach($detail_fasilitas->result() as $data_detail_fasilitas)		
			{				
				$data['title'] = $data_detail_fasilitas->nama;	
				$data['meta_keywords'] = $data_detail_fasilitas->meta_keywords;
				$data['meta_description'] = $data_detail_fasilitas->meta_description;
				$data['content'] = $data_detail_fasilitas->content;		
			}	
		}	
		else
		{		
			$data['title'] = 'Fasilitas tidak ditemukan';
			$data['meta_keywords'] = '';			
			$data['meta_description'] = '';		
			$data['content'] = 'Fasilitas tidak ditemukan';
		}		
	
		$this->load->view('detail_fasilitas_view',$data);
	}
}

/* End of File : fasilitas.php */
/* Location : ./controllers/fasilitas.php */