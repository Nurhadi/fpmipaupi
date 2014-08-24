<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Main_model');
	}
	
	function index()
	{
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$this->Main_model->ins_ol_count();
			$this->Main_model->del_ol_vis();
			
			$data['title']='Dashboard';
			
			$gov=$this->Main_model->get_ol_vis();
			$data['gov']=$gov;
			$limit=10-$gov->num_rows();
			$goc=$this->Main_model->get_ol_count($limit);
			$data['goc']=$goc;
			$goc2=$this->Main_model->get_ol_count2();
			$data['jum_all']=$goc2->num_rows()+$gov->num_rows();
			$data['gu']=$this->Main_model->get_unread();
			
			$this->load->view('main_view',$data);
		}
	}
	
	function set_inbox_id(){
		$inbox_id=$this->input->post('inbox_id');
		$this->session->set_userdata('inbox_id',$inbox_id);
		if($this->session->userdata('inbox_id')!==FALSE){
			echo "1";
		}
	}
	
	function set_comment_id(){
		$comment_id=$this->input->post('comment_id');
		$this->session->set_userdata('comment_id',$comment_id);
		if($this->session->userdata('comment_id')!==FALSE){
			echo "1";
		}
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */