<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tentang_ikom extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Tentang_ikom_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Tentang Ikom';
			
			$p=$this->Tentang_ikom_model->get_page2(21);
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
						
			$this->load->view('tentang_ikom_view',$data);
		}
	}
}

/* End of file tentang_ikom.php */
/* Location: ./application/controllers/tentang_ikom.php */