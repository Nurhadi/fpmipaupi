<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Golog_model');
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache"); 
	}
	
	function index()
	{
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$this->load->view('logout_view');
		}
	}
	
	function process(){
		if(!$this->session->userdata('log_in')){
			echo "not_login";
		}else{
			if($this->input->post('act')=='gologout')
			$this->session->sess_destroy();
			echo "logout";
		}
	}
}

/* End of file logout.php */
/* Location: ./application/controllers/logout.php */