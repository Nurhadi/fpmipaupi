<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tujuan_dan_prinsip_dasar_ikom extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Tujuan_dan_prinsip_dasar_ikom_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Tujuan dan Prinsip Dasar IKOM';
			
			$p=$this->Tujuan_dan_prinsip_dasar_ikom_model->get_page2(23);
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
						
			$this->load->view('tujuan_dan_prinsip_dasar_ikom_view',$data);
		}
	}
}

/* End of file tujuan_dan_prinsip_dasar_ikom.php */
/* Location: ./application/controllers/tujuan_dan_prinsip_dasar_ikom.php */