<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organizing_comittee extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Organizing_comittee_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Organizing Comittee';
			
			$p=$this->Organizing_comittee_model->get_page2(26);
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
						
			$this->load->view('organizing_comittee_view',$data);
		}
	}
}

/* End of file organizing_comittee.php */
/* Location: ./application/controllers/organizing_comittee.php */