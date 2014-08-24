<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengurus_ikom extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Pengurus_ikom_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Pengurus IKOM';
			
			$p=$this->Pengurus_ikom_model->get_page2(24);
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
						
			$this->load->view('pengurus_ikom_view',$data);
		}
	}
}

/* End of file pengurus_ikom.php */
/* Location: ./application/controllers/pengurus_ikom.php */