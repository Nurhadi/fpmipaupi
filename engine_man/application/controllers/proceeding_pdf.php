<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proceeding_pdf extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Proceeding_pdf_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Proceeding PDF';
			
			$p=$this->Proceeding_pdf_model->get_page2(19);
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
						
			$this->load->view('proceeding_pdf_view',$data);
		}
	}
}

/* End of file proceeding_pdf.php */
/* Location: ./application/controllers/proceeding_pdf.php */