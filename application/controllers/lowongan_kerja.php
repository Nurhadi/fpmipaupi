<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Lowongan_kerja extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('lowongan_kerja_model');
	}
	
	function index()
	{
		$page = $this->home_model->get_page('0000034');	
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
		
		$data['lowongan_kerja'] = '';	
		$lowongan_kerja = $this->lowongan_kerja_model->get_lowongan_kerja();	
		if($lowongan_kerja->num_rows() > 0)		
		{			
			foreach($lowongan_kerja->result() as $data_lowongan_kerja)	
			{				
				$id_lowongan_kerja = $data_lowongan_kerja->id_lowongan_kerja;			
				$title = $data_lowongan_kerja->title;			
				$content = $data_lowongan_kerja->content;		
				$content_limiter = character_limiter($content, 200);	
				$data['lowongan_kerja'] .= '<div class="box_lowongan_kerja" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.8em;">
												<a href="'.site_url('lowongan_kerja/'.url_title($title).'/'.$id_lowongan_kerja).'"><h5>'.$title.'</h5></a>		
												<p>'.$content_limiter.' <a href="'.site_url('lowongan_kerja/'.url_title($title).'/'.$id_lowongan_kerja).'">(Selengkapnya...)</a></p>
											</div>';
			}		
		}
		else
		{
			$data['lowongan_kerja'] .= '<div class="box_lowongan_kerja" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.8em;">
											<h5 style="color:red;">Empty Page</h5>
										</div>';
		}
		
		$this->load->view('lowongan_kerja_view',$data);
	}
	
	function detail_lowongan_kerja()
	{
		$id_lowongan_kerja = $this->uri->segment(3);
		$data['id_lowongan_kerja'] = $id_lowongan_kerja;	
		$detail_lowongan_kerja = $this->lowongan_kerja_model->get_detail_lowongan_kerja($id_lowongan_kerja);
		if($detail_lowongan_kerja->num_rows() > 0)		
		{			
			foreach($detail_lowongan_kerja->result() as $data_detail_lowongan_kerja)		
			{				
				$data['title'] = $data_detail_lowongan_kerja->title;	
				$data['meta_keywords'] = $data_detail_lowongan_kerja->meta_keywords;
				$data['meta_description'] = $data_detail_lowongan_kerja->meta_description;
				$data['content'] = $data_detail_lowongan_kerja->content;		
			}	
		}	
		else
		{		
			$data['title'] = 'Lowongan Kerja tidak ditemukan';
			$data['meta_keywords'] = '';			
			$data['meta_description'] = '';		
			$data['content'] = 'Lowongan Kerja tidak ditemukan';
		}		
	
		$this->load->view('detail_lowongan_kerja_view',$data);
	}
}

/* End of File : lowongan_kerja.php */
/* Location : ./controllers/lowongan_kerja.php */