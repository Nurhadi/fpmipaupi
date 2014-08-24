<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Participant extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('participant_model');
	}
	
	function index()
	{
		$page = $this->home_model->get_page('0000027');	
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
	
		$data['participant'] = $this->participant_model->get_participant();
	
		$this->load->view('participant_view',$data);
	}
	
	function detail_participant()
	{
		if($this->uri->segment(2) == '')
		{
			redirect('home');
		}
		else
		{
			$id_participant = $this->uri->segment(2);
			$page = $this->home_model->get_page('0000027');	
			if($page->num_rows() > 0)		
			{			
				foreach($page->result() as $data_page)			
				{				
					$data['title'] = 'Detail Participant';				
					$data['meta_keywords'] = $data_page->meta_keywords;				
					$data['meta_description'] = $data_page->meta_description;				
					$data['content'] = $data_page->content;			
				}		
			}
	
			$participant = $this->participant_model->get_detail_participant($id_participant);
			if($participant->num_rows() > 0)
			{
				foreach($participant->result() as $part)
				{
					$data['nama'] = $part->nama;
					$data['tanggal_lahir'] = $part->tanggal_lahir;
					$data['jenis_kelamin'] = $part->jenis_kelamin;
					$data['kewarganegaraan'] = $part->kewarganegaraan;
					$data['image_thumbnail'] = $part->image_thumbnail;
				}
			}
			
			$data['report_activity'] = $this->participant_model->get_report_activity($id_participant);
			$data['publication'] = $this->participant_model->get_publication($id_participant);
			$data['research_project'] = $this->participant_model->get_research_project($id_participant);
			
			$this->load->view('detail_participant_view',$data);
		}
	}
	
	function download_report_activity()
	{
		$filename = $this->uri->segment(2);
		$data = file_get_contents(base_url("data/report_activity/".$filename));
		force_download($filename,$data);
		echo $data."/".$filename;
	}
	
	function download_publication()
	{
		$filename = $this->uri->segment(2);
		$data = file_get_contents(base_url("data/publication/".$filename));
		force_download($filename,$data);
		echo $data."/".$filename;
	}
	
	function download_research_project()
	{
		$filename = $this->uri->segment(2);
		$data = file_get_contents(base_url("data/research_project/".$filename));
		force_download($filename,$data);
		echo $data."/".$filename;
	}
}

/* End of File : participant.php */
/* Location : ./controllers/participant.php */