<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Register_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}
	
	function index()
	{
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Register Product';
			
			$p=$this->Register_model->get_page2(6);
			if($p->num_rows()>0){
				$data['ptitle']=$p->row()->title;
				$data['keyword']=$p->row()->keyword;
				$data['description']=$p->row()->description;
				$data['text']=$p->row()->text;
			}else{
				$data['ptitle']='';
				$data['keyword']='';
				$data['description']='';
				$data['text']='';
			}
			
			$contact_item = $this->Register_model->get_contact_item();
			if($contact_item->num_rows() > 0)
			{
				foreach($contact_item->result() as $data_ci)
				{
					$data['yahoo1'] = $data_ci->yahoo_1;
					$data['yahoo2'] = $data_ci->yahoo_2;
					$data['gmail'] = $data_ci->gmail;
					$data['facebook'] = $data_ci->facebook;
					$data['twitter'] = $data_ci->twitter;
					$data['blackberry'] = $data_ci->blackberry;
					$data['handphone'] = $data_ci->handphone;
					$data['whatsapp'] = $data_ci->whatsapp;
					$data['address'] = $data_ci->address;
					$data['teks'] = $data_ci->teks_berjalan;
				}
			}
		
			$si=$this->Beranda_model->get_slider();
			$data['si']=$si;
			
			$this->load->helper('string');
			$this->load->view('register_view',$data);
		}
	}

}



/* End of file register.php */

/* Location: ./application/controllers/register.php */