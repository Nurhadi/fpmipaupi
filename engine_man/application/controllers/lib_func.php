<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lib_func extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Lib_func_model');
	}
	
	function save_keyword(){
		$user_id=$this->session->userdata('user_id');
		$page_id=$this->input->post('page_id');
		$keyword=$this->input->post('keyword');
		$res=$this->Lib_func_model->save_keyword($keyword,$user_id,$page_id);
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function save_description(){
		$user_id=$this->session->userdata('user_id');
		$page_id=$this->input->post('page_id');
		$description=$this->input->post('description');
		$res=$this->Lib_func_model->save_description($description,$user_id,$page_id);
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function save_title(){
		$user_id=$this->session->userdata('user_id');
		$page_id=$this->input->post('page_id');
		$title=$this->input->post('title');
		$res=$this->Lib_func_model->save_title($title,$user_id,$page_id);
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function save_text(){
		$user_id=$this->session->userdata('user_id');
		$page_id=$this->input->post('page_id');
		$text=$this->input->post('text');
		$res=$this->Lib_func_model->save_text($text,$user_id,$page_id);
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}		function save_address(){		$address=$this->input->post('address');		$res=$this->Lib_func_model->save_address($address);		if($res){			echo "1";		}else{			echo "0";			}	}		function save_yahoo1(){		$yahoo_1=$this->input->post('yahoo1');		$res=$this->Lib_func_model->save_yahoo1($yahoo_1);		if($res){			echo "1";		}else{			echo "0";			}	}		function save_yahoo2(){		$yahoo_2=$this->input->post('yahoo2');		$res=$this->Lib_func_model->save_yahoo2($yahoo_2);		if($res){			echo "1";		}else{			echo "0";			}	}		function save_facebook(){		$facebook=$this->input->post('facebook');		$res=$this->Lib_func_model->save_facebook($facebook);		if($res){			echo "1";		}else{			echo "0";			}	}		function save_twitter(){		$twitter=$this->input->post('twitter');		$res=$this->Lib_func_model->save_twitter($twitter);		if($res){			echo "1";		}else{			echo "0";			}	}		function save_blackberry(){		$blackberry=$this->input->post('blackberry');		$res=$this->Lib_func_model->save_blackberry($blackberry);		if($res){			echo "1";		}else{			echo "0";			}	}		function save_gmail(){		$gmail=$this->input->post('gmail');		$res=$this->Lib_func_model->save_gmail($gmail);		if($res){			echo "1";		}else{			echo "0";			}	}		function save_whatsapp(){		$whatsapp=$this->input->post('whatsapp');		$res=$this->Lib_func_model->save_whatsapp($whatsapp);		if($res){			echo "1";		}else{			echo "0";			}	}		function save_handphone(){		$handphone=$this->input->post('handphone');		$res=$this->Lib_func_model->save_handphone($handphone);		if($res){			echo "1";		}else{			echo "0";			}	}		function save_teks(){		$teks=$this->input->post('teks');		$res=$this->Lib_func_model->save_teks($teks);		if($res){			echo "1";		}else{			echo "0";			}	}
}

/* End of file lib_func.php */
/* Location: ./application/controllers/lib_func.php */