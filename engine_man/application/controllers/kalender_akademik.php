<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kalender_akademik extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Kalender_akademik_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Kalender Akademik';
			
			$p=$this->Kalender_akademik_model->get_page2(8);
			if($p->num_rows()>0){
				$data['ptitle']=$p->row()->title;
				$data['keyword']=$p->row()->meta_keywords;
				$data['description']=$p->row()->meta_description;
				$data['text']=$p->row()->content;
			}else{
				$data['ptitle']='';
				$data['keyword']='';
				$data['description']='';
				$data['text']='';
			}
						
			$this->load->view('kalender_akademik_view',$data);
		}
	}
}

/* End of file kalender_akademik.php */
/* Location: ./application/controllers/kalender_akademik.php */