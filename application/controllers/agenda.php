<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Agenda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('agenda_model');
	}
	
	function index()
	{
		$page = $this->home_model->get_page('0000032');	
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
		
		$data['agenda'] = '';	
		$agenda = $this->agenda_model->get_agenda();	
		if($agenda->num_rows() > 0)		
		{			
			foreach($agenda->result() as $data_agenda)	
			{				
				$id_agenda = $data_agenda->id_agenda;			
				$title = $data_agenda->title;			
				$content = $data_agenda->content;		
				$content_limiter = character_limiter($content, 200);	
				$data['agenda'] .= '<div class="box_agenda" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.8em;">
										<a href="'.site_url('agenda/'.url_title($title).'/'.$id_agenda).'"><h5>'.$title.'</h5></a>		
										<p>'.$content_limiter.' <a href="'.site_url('agenda/'.url_title($title).'/'.$id_agenda).'">(Selengkapnya...)</a></p>
									</div>';
			}		
		}
		else
		{
			$data['agenda'] .= '<div class="box_agenda" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.8em;">
									<h5 style="color:red;">Empty Page</h5>
								</div>';
		}
		
		$this->load->view('agenda_view',$data);
	}
	
	function detail_agenda()
	{
		$id_agenda = $this->uri->segment(3);
		$data['id_agenda'] = $id_agenda;	
		$detail_agenda = $this->agenda_model->get_detail_agenda($id_agenda);
		if($detail_agenda->num_rows() > 0)		
		{			
			foreach($detail_agenda->result() as $data_detail_agenda)		
			{				
				$data['title'] = $data_detail_agenda->title;	
				$data['meta_keywords'] = $data_detail_agenda->meta_keywords;
				$data['meta_description'] = $data_detail_agenda->meta_description;
				$data['content'] = $data_detail_agenda->content;		
			}	
		}	
		else
		{		
			$data['title'] = 'Seminar tidak ditemukan';
			$data['meta_keywords'] = '';			
			$data['meta_description'] = '';		
			$data['content'] = 'Seminar tidak ditemukan';
		}		
	
		$this->load->view('detail_agenda_view',$data);
	}
}

/* End of File : agenda.php */
/* Location : ./controllers/agenda.php */