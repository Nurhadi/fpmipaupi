<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Visi_misi_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Visi dan misi';
			
			$p=$this->Visi_misi_model->get_page2(3);
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
						
			$this->load->view('visi_misi_view',$data);
		}
	}
}

/* End of file visi_misi.php */
/* Location: ./application/controllers/visi_misi.php */