<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Pimpinan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('pimpinan_model');
	}
	
	function index()
	{
		$page = $this->home_model->get_page('0000005');	
		if($page->num_rows() > 0)		
		{			
			foreach($page->result() as $data_page)			
			{				
				$data['title'] = $data_page->title;				
				$data['meta_keywords'] = $data_page->meta_keywords;				
				$data['meta_description'] = $data_page->meta_description;				
				$data['content'] = $data_page->content;			
			}		
		}
		
		$data['jurusan'] = '<li class="active"><a href="#tab1" data-toggle="tab">Fakultas</a></li>';
		$jurusan = $this->pimpinan_model->get_jurusan();
		if($jurusan->num_rows() > 0)
		{
			$i = 2;
			foreach($jurusan->result() as $data_jurusan)
			{
				$id_jurusan = $data_jurusan->id_jurusan;
				$nama_jurusan = $data_jurusan->nama_jurusan;
				
				$data['jurusan'] .= '<li><a href="#tab'.$i.'" data-toggle="tab">'.$nama_jurusan.'</a></li>';
				
				$i = $i + 1;
			}
		}
		
		$data['table_pimpinan_fakultas'] = '';
		$pimpinan_fakultas = $this->pimpinan_model->get_pimpinan_fakultas();
		if($pimpinan_fakultas->num_rows() > 0)
		{
			$h = 1;
			
			$data['table_pimpinan_fakultas'] .= '<div class="tab-pane active" id="tab1">';
												
			foreach($pimpinan_fakultas->result() as $data_pimpinan_fakultas)
			{
				$id_pimpinan = $data_pimpinan_fakultas->id_pimpinan;
				$nama = $data_pimpinan_fakultas->nama;
				$jabatan = $data_pimpinan_fakultas->jabatan;
				$image_path = $data_pimpinan_fakultas->image_path;
				
				$data['table_pimpinan_fakultas'] .= '<div style="border:1px solid #ccc; padding:10px; margin-bottom:10px; border-radius:8px; -moz-border-radius:8px; -webkit-border-radius:8px; -o-border-radius:8px;" class="clearfix">
														<div class="box_image_pimpinan clearfix">
															<img src="'.$image_path.'" alt="'.$nama.'" title="'.$nama.'" width="120"/>
														</div>
														<div class="box_detail_pimpinan">
															<table cellpadding="3" style="margin-left:20px;">
																<tr>
																	<td width="20" style="text-align:left; vertical-align:top;">Nama</td>
																	<td style="vertical-align:top;">:</td>
																	<td width="245" style="text-align:left; vertical-align:top;">'.$nama.'</td>
																</tr>
																<tr>
																	<td width="20" style="text-align:left; vertical-align:top;">Jabatan</td>
																	<td style="vertical-align:top;">:</td>
																	<td width="245" style="text-align:left; vertical-align:top;">'.$jabatan.'</td>
																</tr>
															</table>
															<!--<a href="#" class="back_to_table">Kembali ke table</a>-->
														</div>
													</div>';
												
				$h = $h + 1;
			}

			$data['table_pimpinan_fakultas']	 .= '</div>';
		}
		
		$data['javascript_data_table'] = '';
		$data['table_pimpinan'] = '';
		$jurusan1 = $this->pimpinan_model->get_jurusan();
		if($jurusan1->num_rows() > 0)
		{
			$j = 2;
			foreach($jurusan1->result() as $data_jurusan1)
			{
				$id_jurusan = $data_jurusan1->id_jurusan;
				
				$data['javascript_data_table'] .= '$("#table_data'.$j.'").dataTable({
														"bAutoWidth": false,
														"bProcessing": true,
														"sPaginationType": "full_numbers",	
														"aaSorting": [[ 0, "asc" ]],
														"fnDrawCallback": function( oSettings ) {}	
													});';
				
				$data['table_pimpinan'] .= '<div class="tab-pane" id="tab'.$j.'">';
				
				$pimpinan = $this->pimpinan_model->get_pimpinan($id_jurusan);
				if($pimpinan->num_rows() > 0)
				{
					$k = 1;
					foreach($pimpinan->result() as $data_pimpinan)
					{
						$id_pimpinan = $data_pimpinan->id_pimpinan;
						$nama = $data_pimpinan->nama;
						$jabatan = $data_pimpinan->jabatan;
						$image_path = $data_pimpinan->image_path;
						
						$data['table_pimpinan'] .= '<div style="border:1px solid #ccc; padding:10px; margin-bottom:10px; border-radius:8px; -moz-border-radius:8px; -webkit-border-radius:8px; -o-border-radius:8px;" class="clearfix">
														<div class="box_image_pimpinan clearfix">
															<img src="'.$image_path.'" alt="'.$nama.'" title="'.$nama.'" width="120"/>
														</div>
														<div class="box_detail_pimpinan">
															<table cellpadding="3" style="margin-left:20px;">
																<tr>
																	<td width="20" style="text-align:left; vertical-align:top;">Nama</td>
																	<td style="vertical-align:top;">:</td>
																	<td width="245" style="text-align:left; vertical-align:top;">'.$nama.'</td>
																</tr>
																<tr>
																	<td width="20" style="text-align:left; vertical-align:top;">Jabatan</td>
																	<td style="vertical-align:top;">:</td>
																	<td width="245" style="text-align:left; vertical-align:top;">'.$jabatan.'</td>
																</tr>
															</table>
															<!--<a href="#" class="back_to_table">Kembali ke table</a>-->
														</div>
													</div>';
						$k = $k + 1;
					}
				}
				
				$data['table_pimpinan']	 .= '</div>';
				
				$j = $j + 1;
			}
		}
		
		$this->load->view('pimpinan_view',$data);
	}
}

/* End of File : pimpinan.php */
/* Location : ./controllers/pimpinan.php */