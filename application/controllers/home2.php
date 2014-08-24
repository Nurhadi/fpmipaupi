<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Home2 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	
	function index()
	{
		$this->load->view('home2_view');
	}
}

/* End of File : home2.php */
/* Location : ./controllers/home2.php */