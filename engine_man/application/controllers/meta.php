<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meta extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Meta_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Meta Tag';
			
			$c1=$this->Meta_model->get_meta_item(1);
			if($c1->num_rows()>0){
				$data['content_1']=$c1->row()->content;
			}else{
				$data['content_1']='';
			}
			
			$c2=$this->Meta_model->get_meta_item(2);
			if($c2->num_rows()>0){
				$data['content_2']=$c2->row()->content;
			}else{
				$data['content_2']='';
			}
			
			$this->load->view('meta_view',$data);
		}
	}
	
	function save_gac(){
		$content=$this->input->post('gac',false);
		$res=$this->Meta_model->upd_meta_item(2,$content);
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function save_mc(){
		$content=$this->input->post('mc',false);
		$res=$this->Meta_model->upd_meta_item(1,$content);
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
}

/* End of file meta_tag.php */
/* Location: ./application/controllers/meta_tag.php */