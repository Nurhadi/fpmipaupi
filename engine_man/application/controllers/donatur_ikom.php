<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donatur_ikom extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Donatur_ikom_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Donatur IKOM';
			
			$p=$this->Donatur_ikom_model->get_page2(25);
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
						
			$this->load->view('donatur_ikom_view',$data);
		}
	}
}

/* End of file donatur_ikom.php */
/* Location: ./application/controllers/donatur_ikom.php */