<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Home6 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	
	function index()
	{
		$this->load->view('home6_view');
	}
}

/* End of File : home6.php */
/* Location : ./controllers/home6.php */