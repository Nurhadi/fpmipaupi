<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Home7 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	
	function index()
	{
		$this->load->view('home7_view');
	}
}

/* End of File : home7.php */
/* Location : ./controllers/home7.php */