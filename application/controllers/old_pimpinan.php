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
			
			$data['table_pimpinan_fakultas'] .= '<div class="tab-pane active" id="tab1">
													<table id="table_data1" width="100%" cellpadding="5" class="table-bordered">
														<thead>
															<tr>
																<th>No</th>
																<th>Foto</th>
																<th>Data Pimpinan</th>
															</tr>
														</thead>
														<tbody>';
												
			foreach($pimpinan_fakultas->result() as $data_pimpinan_fakultas)
			{
				$id_pimpinan = $data_pimpinan_fakultas->id_pimpinan;
				$nama = $data_pimpinan_fakultas->nama;
				$jabatan = $data_pimpinan_fakultas->jabatan;
				$image_path = $data_pimpinan_fakultas->image_path;
				
				$data['table_pimpinan_fakultas'] .= '	<tr>
															<td style="text-align:center; vertical-align:top; width:30px;">'.$h.'</td>
															<td style="text-align:center; vertical-align:top; width:170px;"><img src="'.base_url($image_path).'" width="170"/></td>
															<td style="vertical-align:top;">
																<table border="0" style="margin-left:10px; margin-top:10px;">
																	<tr>
																		<td style="width:90px;">Nama</td>
																		<td style="width:10px; text-align:center;">:</td>
																		<td>'.$nama.'</td>
																	</tr>
																	<tr>
																		<td style="width:90px;">Jabatan</td>
																		<td style="width:10px; text-align:center;">:</td>
																		<td>'.$jabatan.'</td>
																	</tr>
																</table>
															</td>
														</tr>';
												
				$h = $h + 1;
			}

			$data['table_pimpinan_fakultas']	 .= '	</tbody>
													  </table>
													</div>';
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
				
				$data['table_pimpinan'] .= '<div class="tab-pane" id="tab'.$j.'">
												<table id="table_data'.$j.'" width="100%" cellpadding="5" class="table-bordered">
													<thead>
														<tr>
															<th>No</th>
															<th>Foto</th>
															<th>Data Pimpinan</th>
														</tr>
													</thead>
													<tbody>';
				
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
						
						$data['table_pimpinan'] .= '	<tr>
															<td style="text-align:center; vertical-align:top; width:30px;">'.$k.'</td>
															<td style="text-align:center; vertical-align:top; width:170px;"><img src="'.base_url($image_path).'" width="170"/></td>
															<td style="vertical-align:top;">
																<table border="0" style="margin-left:10px; margin-top:10px;">
																	<tr>
																		<td style="width:90px;">Nama</td>
																		<td style="width:10px; text-align:center;">:</td>
																		<td>'.$nama.'</td>
																	</tr>
																	<tr>
																		<td style="width:90px;">Jabatan</td>
																		<td style="width:10px; text-align:center;">:</td>
																		<td>'.$jabatan.'</td>
																	</tr>
																</table>
															</td>
														</tr>';
						$k = $k + 1;
					}
				}
				
				$data['table_pimpinan']	 .= '		</tbody>
												</table>
											  </div>';
				
				$j = $j + 1;
			}
		}
		
		$this->load->view('pimpinan_view',$data);
	}
}

/* End of File : pimpinan.php */
/* Location : ./controllers/pimpinan.php */