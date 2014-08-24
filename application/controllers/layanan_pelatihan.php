<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Layanan_pelatihan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('layanan_pelatihan_model');
	}
	
	function index()
	{
		$page = $this->home_model->get_page('0000035');	
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
		
		$data['layanan_pelatihan'] = '';	
		$layanan_pelatihan = $this->layanan_pelatihan_model->get_layanan_pelatihan();	
		if($layanan_pelatihan->num_rows() > 0)		
		{			
			foreach($layanan_pelatihan->result() as $data_layanan_pelatihan)	
			{				
				$id_layanan_pelatihan= $data_layanan_pelatihan->id_layanan_pelatihan;			
				$title = $data_layanan_pelatihan->title;			
				$content = $data_layanan_pelatihan->content;		
				$content_limiter = character_limiter($content, 200);	
				$data['layanan_pelatihan'] .= '<div class="box_layanan_pelatihan" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.8em;">
													<a href="'.site_url('layanan_pelatihan/'.url_title($title).'/'.$id_layanan_pelatihan).'"><h5>'.$title.'</h5></a>		
													<p>'.$content_limiter.' <a href="'.site_url('layanan_pelatihan/'.url_title($title).'/'.$id_layanan_pelatihan).'">(Selengkapnya...)</a></p>
											   </div>';
			}		
		}
		else
		{
			$data['layanan_pelatihan'] .= '<div class="box_layanan_pelatihan" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.8em;">
												<h5 style="color:red;">Empty Page</h5>
										   </div>';
		}
		
		$this->load->view('layanan_pelatihan_view',$data);
	}
	
	function detail_layanan_pelatihan()
	{
		$id_layanan_pelatihan = $this->uri->segment(3);
		$data['id_layanan_pelatihan'] = $id_layanan_pelatihan;	
		$detail_layanan_pelatihan = $this->layanan_pelatihan_model->get_detail_layanan_pelatihan($id_layanan_pelatihan);
		if($detail_layanan_pelatihan->num_rows() > 0)		
		{			
			foreach($detail_layanan_pelatihan->result() as $data_detail_layanan_pelatihan)		
			{				
				$data['title'] = $data_detail_layanan_pelatihan->title;	
				$data['meta_keywords'] = $data_detail_layanan_pelatihan->meta_keywords;
				$data['meta_description'] = $data_detail_layanan_pelatihan->meta_description;
				$data['content'] = $data_detail_layanan_pelatihan->content;		
			}	
		}	
		else
		{		
			$data['title'] = 'Layanan Pelatihan tidak ditemukan';
			$data['meta_keywords'] = '';			
			$data['meta_description'] = '';		
			$data['content'] = 'Layanan Pelatihan tidak ditemukan';
		}		
	
		$this->load->view('detail_layanan_pelatihan_view',$data);
	}
}

/* End of File : layanan_pelatihan.php */
/* Location : ./controllers/layanan_pelatihan.php */