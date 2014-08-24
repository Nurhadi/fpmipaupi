<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Dosen_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('id_page'=>$page_id);

		$this->db->select('title,meta_description,meta_keywords,content');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_dosen()
	{
		$this->db->select('id_dosen,nip,nidn,kode_dosen,nama,alamat,telepon,golongan,id_jurusan,riwayat_pendidikan,kompetensi_mata_kuliah,image_path,status,date_create');
		$this->db->order_by('id_dosen','desc');
		$result = $this->db->get('dosen');
		return $result;
	}
	
	function get_dosen1($id_dosen)
	{
		$this->db->select('id_dosen,nip,nidn,kode_dosen,nama,alamat,telepon,golongan,id_jurusan,riwayat_pendidikan,kompetensi_mata_kuliah,image_path,status,date_create');
		$this->db->where('id_dosen',$id_dosen);
		$result = $this->db->get('dosen');
		return $result;
	}
	
	function get_mypath($id_dosen=0){
		$where=array('id_dosen'=>$id_dosen);
		$this->db->select('image_path');
		$result=$this->db->get_where('dosen',$where);
		return $result;
	}
	
	function delete_dosen($id_dosen=0){
		$where=array('id_dosen'=>$id_dosen);
		$result=$this->db->delete('dosen',$where);
		return $result;
	}
	
	function ins_dosen($nip,$nidn,$kode_dosen,$nama,$alamat,$telepon,$golongan,$id_jurusan,$riwayat_pendidikan,$kompetensi,$image_path,$date_create,$user_id)
	{
		$data = array(
			'nip'=>$nip,
			'nidn'=>$nidn,
			'kode_dosen'=>$kode_dosen,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'telepon'=>$telepon,
			'golongan'=>$golongan,
			'id_jurusan'=>$id_jurusan,
			'riwayat_pendidikan'=>$riwayat_pendidikan,
			'kompetensi_mata_kuliah'=>$kompetensi,
			'image_path'=>$image_path,
			'date_create'=>$date_create
		);
		
		$result = $this->db->insert('dosen',$data);
		return $result;
	}
	
	function upd_dosen($id_dosen,$nip,$nidn,$kode_dosen,$nama,$alamat,$telepon,$golongan,$id_jurusan,$riwayat_pendidikan,$kompetensi,$image_path,$date_create,$user_id)
	{
		$data = array(
			'nip'=>$nip,
			'nidn'=>$nidn,
			'kode_dosen'=>$kode_dosen,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'telepon'=>$telepon,
			'golongan'=>$golongan,
			'id_jurusan'=>$id_jurusan,
			'riwayat_pendidikan'=>$riwayat_pendidikan,
			'kompetensi_mata_kuliah'=>$kompetensi,
			'image_path'=>$image_path,
			'date_create'=>$date_create
		);
		$this->db->where('id_dosen',$id_dosen);
		$result = $this->db->update('dosen',$data);
		return $result;
	}
	
	function upd_dosen1($id_dosen=0,$image_path=''){
		$data=array('image_path'=>$image_path);
		$where=array('id_dosen'=>$id_dosen);
		$result=$this->db->update('dosen',$data,$where);
		return $result;
	}
	
	function get_nama_jurusan($id_jurusan)
	{
		$this->db->select('nama_jurusan');
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->limit('1');
		$result = $this->db->get('jurusan');
		$row = $result->row();
		return $row->nama_jurusan;
	}
	
	function get_jurusan()
	{
		$this->db->select('id_jurusan,nama_jurusan');
		$this->db->where('status','active');
		$this->db->order_by('id_jurusan','asc');
		$result = $this->db->get('jurusan');
		return $result;
	}
}



/* End of file dosen_model.php */

/* Location: ./application/models/dosen_model.php */