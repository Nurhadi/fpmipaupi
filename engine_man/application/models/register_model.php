<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Register_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('page_id'=>$page_id);

		$this->db->select('title,description,keyword,text');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_register()
	{
		$this->db->select('register.id_register,register.no_kartu_garansi,register.tanggal_pembelian,register.nama_toko,register.nama_lengkap,register.email,register.telepon,register.alamat,register.propinsi,register.jenis_kelamin,register.umur,register.date_add,tipe_produk.nama_produk');		
		$this->db->join('kartu_garansi','kartu_garansi.no = register.no_kartu_garansi');
		$this->db->join('tipe_produk','tipe_produk.id_tipe_produk = kartu_garansi.id_tipe_produk');
		$this->db->order_by('id_register','desc');
		$result = $this->db->get('register');
		return $result; 
		
		/*
		$this->db->select('register.id_register,register.no_kartu_garansi,register.tanggal_pembelian,register.nama_toko,register.nama_lengkap,register.email,register.telepon,register.alamat,register.propinsi,register.jenis_kelamin,register.umur,register.date_add,tipe_produk.nama_produk');
		$this->db->where('no_kartu_garansi',$text_search);
		$this->db->join('kartu_garansi','kartu_garansi.no = register.no_kartu_garansi');
		$this->db->join('tipe_produk','tipe_produk.id_tipe_produk = kartu_garansi.id_tipe_produk');
		$result = $this->db->get('register');
		return $result;
		*/
	}

	function delete_register($id_register)
	{
	
		$this->db->where('id_register',$id_register);
		
		$result = $this->db->delete('register');
		
		return $result;
	
	}
	
	function ins_register($no_kartu_garansi,$tipe_produk,$tanggal_pembelian,$nama_toko,$nama_lengkap,$email,$telepon,$alamat,$propinsi,$jenis_kelamin,$umur,$date_add)
	{
		$data = array('no_kartu_garansi'=>$no_kartu_garansi,'id_produk'=>$tipe_produk,'tanggal_pembelian'=>$tanggal_pembelian,'nama_toko'=>$nama_toko,'nama_lengkap'=>$nama_lengkap,'email'=>$email,'telepon'=>$telepon,'alamat'=>$alamat,'propinsi'=>$propinsi,'jenis_kelamin'=>$jenis_kelamin,'umur'=>$umur,'date_add'=>$date_add);
		
		$result = $this->db->insert('register',$data);
		
		return $result;
	}	

	function upd_register($id_register,$no_kartu_garansi,$tipe_produk,$tanggal_pembelian,$nama_toko,$nama_lengkap,$email,$telepon,$alamat,$propinsi,$jenis_kelamin,$umur)
	{
	
		$data = array('no_kartu_garansi'=>$no_kartu_garansi,'id_produk'=>$tipe_produk,'tanggal_pembelian'=>$tanggal_pembelian,'nama_toko'=>$nama_toko,'nama_lengkap'=>$nama_lengkap,'email'=>$email,'telepon'=>$telepon,'alamat'=>$alamat,'propinsi'=>$propinsi,'jenis_kelamin'=>$jenis_kelamin,'umur'=>$umur);
		
		$this->db->where('id_register',$id_register);
		
		$result = $this->db->update('register',$data);
		
		return $result;
	
	}

	function get_detail_register($id_register)
	{
	
		$this->db->select('register.no_kartu_garansi,register.tanggal_pembelian,register.nama_toko,register.nama_lengkap,register.email,register.telepon,register.alamat,register.propinsi,register.jenis_kelamin,register.umur,register.date_add,tipe_produk.nama_produk');
		$this->db->where('id_register',$id_register);
		$this->db->join('kartu_garansi','kartu_garansi.no = register.no_kartu_garansi');
		$this->db->join('tipe_produk','tipe_produk.id_tipe_produk = kartu_garansi.id_tipe_produk');
		$result = $this->db->get('register');
		return $result;
	
	}
	
	function search($text_search)
	{
		$this->db->select('register.id_register,register.id_produk,register.no_kartu_garansi,register.tanggal_pembelian,register.nama_toko,register.nama_lengkap,register.email,register.telepon,register.alamat,register.propinsi,register.jenis_kelamin,register.umur,register.date_add,tipe_produk.nama_produk');
		$this->db->where('no_kartu_garansi',$text_search);
		$this->db->join('kartu_garansi','kartu_garansi.no = register.no_kartu_garansi');
		$this->db->join('tipe_produk','tipe_produk.id_tipe_produk = kartu_garansi.id_tipe_produk');
		$result = $this->db->get('register');
		return $result;
	}
	
	/*
	function search_tipe_produk($id_tipe_produk)
	{
		$this->db->select('kartu_garansi.no,register.id_register,register.id_produk,register.tanggal_pembelian,register.nama_toko,register.nama_lengkap,register.email,register.telepon,register.alamat,register.propinsi,register.jenis_kelamin,register.umur,register.date_add');
		$this->db->where('kartu_garansi.id_tipe_produk',$id_tipe_produk);
		$this->db->join('register','register.no_kartu_garansi = kartu_garansi.no');
		$result = $this->db->get('kartu_garansi');
		return $result;
	
	}
	*/
	
	function search_kartu_garansi($id_tipe_produk)
	{
		$this->db->select('no');
		$this->db->where('id_tipe_produk',$id_tipe_produk);
		$this->db->order_by('id','asc');
		$result = $this->db->get('kartu_garansi');
		return $result;
	}
	
	function search_kartu_garansi_null($id_tipe_produk)
	{
		$this->db->select('no');
		$this->db->like('id_tipe_produk',$id_tipe_produk);
		$this->db->order_by('id','asc');
		$result = $this->db->get('kartu_garansi');
		return $result;
	}
	
	function check_no_exist($no=''){
		$where=array('no'=>$no);
		$this->db->select('no');
		$result=$this->db->get_where('kartu_garansi',$where);
		return $result;		
	}
	
	function get_data_propinsi()
	{
		$this->db->select('id_propinsi,nama_propinsi');
		$result = $this->db->get('propinsi');
		return $result;
	}
	
	function update_kartu_garansi($no_kartu_garansi)
	{
		$data = array('status'=>'1');
		$this->db->where('no',$no_kartu_garansi);
		$result = $this->db->update('kartu_garansi',$data);
		return $result;
	}
	
	function get_count_service($no_kartu_garansi)
	{
	
		$this->db->select('id_service');
		
		$this->db->where('no_kartu_garansi',$no_kartu_garansi);
		
		$result = $this->db->get('service');
		
		return $result->num_rows();
	
	}
	
	function check_service_status($text_search)
	{
		$this->db->select('id_service');
		
		$this->db->where('no_kartu_garansi',$text_search);
		
		$this->db->where('status','Proses');
		
		$result = $this->db->get('service');
		
		return $result->num_rows();
	}
	
	function get_tipe_produk()
	{
		$this->db->select('id_tipe_produk,nama_produk');
		$this->db->order_by('id_tipe_produk','asc');
		$result = $this->db->get('tipe_produk');
		return $result;
	}
	
	function get_contact_item()
	{
		$this->db->select('yahoo_1,yahoo_2,gmail,facebook,twitter,blackberry,handphone,whatsapp,address,teks_berjalan');
		$result = $this->db->get('contact_item');
		return $result;
	}
	
	function delete_slider($slider_id)
	{
		$this->db->where('slider_id',$slider_id);
		$result = $this->db->delete('slider_item');
		return $result;
	}
}



/* End of file register_model.php */

/* Location: ./application/controllers/register_model.php */