<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Sejarah_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Sejarah';
			
			$p=$this->Sejarah_model->get_page2(2);
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
						
			$this->load->view('sejarah_view',$data);
		}
	}
}

/* End of file sejarah.php */
/* Location: ./application/controllers/sejarah.php */