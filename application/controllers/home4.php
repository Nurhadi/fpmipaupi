<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Home4 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	
	function index()
	{
		$this->load->view('home4_view');
	}
}

/* End of File : home4.php */
/* Location : ./controllers/home4.php */