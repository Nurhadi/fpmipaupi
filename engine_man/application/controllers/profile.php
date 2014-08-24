<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Profile_model');
	}
	
	function index()
	{
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Profile Admin';
			
			$user_id=$this->session->userdata('user_id');
			$e=$this->Profile_model->get_email($user_id);
			if($e->num_rows()>0){
				$data['email']=$e->row()->email;
			}
			
			$this->load->view('profile_view',$data);
		}
	}
	
	function change(){
		$old_password=$this->input->post('old_password');
		$new_password=$this->input->post('new_password');
		$confirm_new_password=$this->input->post('confirm_new_password');
		$email=$this->input->post('email');
		$action=$this->input->post('action');
		if($action=="goubah"){
			$user_id=$this->session->userdata('user_id');
			$error=0;
			$err_email=0;
			$err_pass=0;
			$err_conf_pass=0;
			$upd_pass=0;
			
			if(empty($email)){
				$error=1;
				$err_email=1;
			}else{
				$email_check="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-.]+\.[a-zA-Z]{2,3}$/";
				if(! preg_match($email_check,$email)){
					$error=1;
					$err_email=2;
				}
			}
			
			if(! empty($old_password)){
				$u=$this->Profile_model->get_user($user_id,$old_password);
				if($u->num_rows()==1){
					if(! empty($new_password) && ! empty($confirm_new_password)){
						if(strcmp($new_password,$confirm_new_password)!=0){
							$error=1;
							$err_conf_pass=2;
						}else{
							$upd_pass=1;
						}
					}else{
						$error=1;
						$err_conf_pass=1;
					}
				}else{
					$error=1;
					$err_pass=1;
				}
			}
			
			if($error){
				echo "err|".$err_email."|".$err_pass."|".$err_conf_pass;
			}else{
				if($upd_pass){
					$res2=$this->Profile_model->update_wp($new_password,$email,$user_id);
				}else{
					$res2=$this->Profile_model->update_wop($email,$user_id);
				}
				if($res2){
					echo "ok|ok";
				}else{
					echo "err2|err2";
				}
			}
		}else{
			echo "err2|err2";
		}
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */