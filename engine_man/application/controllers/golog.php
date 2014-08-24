<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Golog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Golog_model');
	}
	
	function index(){
		if($this->session->userdata('log_in')){
			redirect('main');
		}else{
			$this->load->view('golog_view');
		}
	}
	
	function process(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$action=$this->input->post('action');
		if($action=="gologin"){
			$l=$this->Golog_model->log_pro($username,$password);
			if($l->num_rows()==1){
				$userdata=array('log_in'=>1,'user_id'=>$l->row()->user_id,'username'=>$l->row()->username);
				$this->session->set_userdata($userdata);
				echo "1";
			}else{
				echo "0";	
			}
		}else{
			echo "0";
		}
	}
	
	function forgot(){
		if($this->session->userdata('log_in')){
			redirect('main');
		}else{
			$this->load->view('forgot_view');
		}
	}
	
	function res_pass(){
		$email=$this->input->post('email');
		$action=$this->input->post('action');
		if($action=="goforgot"){
			$num=$this->Golog_model->check_em($email);
			if($num->num_rows()==1){
				$password=$this->generatePassword();
				$res2=$this->Golog_model->upd_pass($email,$password);
				if($res2){
					$this->load->library('email');
					$username=$num->row()->username;
					$pesan="Anda telah menggunakan fitur forgot password.<br/>Berikut adalah username dan password baru Anda.<br/><br/><label style='display:inline-block;width:70px'>Username</label>: $username<br/><label style='display:inline-block;width:70px'>Password</label>: $password<br/><br/>Anda dapat menggunakan username dan password tersebut untuk <a href='".site_url('login')."' target='_blank'>login</a>.<br/>Setelah login, kami sarankan Anda segera mengubah password Anda di <b>Profile Admin</b>.";
					$option['mailtype']='html';
					$this->email->initialize($option);
					$this->email->from('webmaster@sharonbakery.com', 'Sharon Bakery');
					$this->email->to($email);
					$this->email->subject('Reset Password, Sharon Bakery Administrator');
					$this->email->message($pesan);
					if ( ! $this->email->send()){
						echo "0";
					}else{
						echo "1";
					}
				}else{
					echo "0";
				}
			}else{
				echo "0";	
			}
		}else{
			echo "0";
		}
	}
	
	function generatePassword ($length = 8){
		$password = "";
		$possible = "123467890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+=-";
		$maxlength = strlen($possible);
		if ($length > $maxlength) {
		  $length = $maxlength;
		}
		$i = 0; 
		while ($i < $length) { 
		  $char = substr($possible, mt_rand(0, $maxlength-1), 1);
		  if (!strstr($password, $char)) { 
			$password .= $char;
			$i++;
		  }

		}
		return $password;
	}
}

/* End of file golog.php */
/* Location: ./application/controllers/golog.php */