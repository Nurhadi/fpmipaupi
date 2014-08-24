<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Tata_usaha extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('tata_usaha_model');
	}
	
	function index()
	{
		$page = $this->home_model->get_page('0000010');	
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
		
		$data['unit_kerja'] = '';
		$unit_kerja = $this->tata_usaha_model->get_unit_kerja();
		if($unit_kerja->num_rows() > 0)
		{
			$i = 1;
			foreach($unit_kerja->result() as $data_unit_kerja)
			{
				$id_unit_kerja = $data_unit_kerja->id_unit_kerja;
				$nama_unit_kerja = $data_unit_kerja->nama_unit_kerja;
				
				if($i == 1)
				{
					$active = 'class="active"';
				}
				else
				{
					$active = '';
				}
				
				$data['unit_kerja'] .= '<li '.$active.'><a href="#tab'.$i.'" data-toggle="tab">'.$nama_unit_kerja.'</a></li>';
				
				$i = $i + 1;
			}
		}
		
		$data['javascript_data_table'] = '';
		$data['table_tata_usaha'] = '';
		$unit_kerja1 = $this->tata_usaha_model->get_unit_kerja();
		if($unit_kerja1->num_rows() > 0)
		{
			$j = 1;
			foreach($unit_kerja1->result() as $data_unit_kerja1)
			{
				$id_unit_kerja = $data_unit_kerja1->id_unit_kerja;
				
				if($j == 1)
				{
					$active = 'active';
				}
				else
				{
					$active = '';
				}
				
				$data['javascript_data_table'] .= '$("#table_data'.$j.'").dataTable({
														"bAutoWidth": false,
														"bProcessing": true,
														"sPaginationType": "full_numbers",	
														"aaSorting": [[ 0, "asc" ]],
														"fnDrawCallback": function( oSettings ) {
															$(".detail_tata_usaha'.$j.'").click(function(){
																var id_tata_usaha = $(this).attr("id");
																$.ajax({
																	type:"POST",
																	url:base_url+"tata_usaha/get_detail_staff",
																	data:"id_tata_usaha="+id_tata_usaha,
																	success:function(msg){
																		$(".box_detail").empty().html(msg);
																		$(".box_detail").fadeIn();
																		$(".box_data_table").hide();
																		$(".back_to_table").show();
																		$.scrollTo($("#box_main_menu"),1000);
																		//alert("menuju detail staff");
																	}
																});
																return false;
															});
														}	
													});';
				
				$data['table_tata_usaha'] .= '<div class="tab-pane '.$active.'" id="tab'.$j.'">
												<table id="table_data'.$j.'" width="100%" cellpadding="5" class="table-bordered">
													<thead>
														<tr>
															<th>No</th>
															<th>Nama</th>
															<th>Bidang Tugas</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>';
				
				$tata_usaha = $this->tata_usaha_model->get_tata_usaha($id_unit_kerja);
				if($tata_usaha->num_rows() > 0)
				{
					$k = 1;
					foreach($tata_usaha->result() as $data_tata_usaha)
					{
						$id_tata_usaha = $data_tata_usaha->id_tata_usaha;
						$nama = $data_tata_usaha->nama;
						$bidang_tugas = $data_tata_usaha->bidang_tugas;
						
						$data['table_tata_usaha'] .= '			<tr>
																	<td style="text-align:center;">'.$k.'</td>
																	<td>'.$nama.'</td>
																	<td style="text-align:left;">'.$bidang_tugas.'</td>
																	<td style="text-align:center;"><a class="detail_tata_usaha'.$j.'" id="'.$id_tata_usaha.'" href="#">Lihat Detail</a></td>
																</tr>';

						$k = $k + 1;
					}
				}
				
				$data['table_tata_usaha'] .= '		</tbody>
												</table>
											  </div>';
				
				$j = $j + 1;
			}
		}
		
		$this->load->view('tata_usaha_view',$data);
	}
	
	function get_detail_staff()
	{
		$id_tata_usaha = $this->input->post('id_tata_usaha');
		
		$detail_staff = '';
		$staff = $this->tata_usaha_model->get_detail_staff($id_tata_usaha);
		if($staff->num_rows() > 0)
		{
			foreach($staff->result() as $data_staff)
			{
				$nama = $data_staff->nama;
				$alamat = $data_staff->alamat;
				$telepon = $data_staff->telepon;
				$bidang_tugas = $data_staff->bidang_tugas;
				$image_path = $data_staff->image_path;
				if($image_path == '-')
				{
					$image_path1 = '<img src="'.base_url('assets/images/logo_upi_trans.png').'" width="120"/>';
				}
				else
				{
					$image_path1 = '<img src="'.base_url($image_path).'" width="120"/>';
				}
				
				$detail_staff .= '<div class="box_image_staff clearfix">
									'.$image_path1.'
								</div>
								<div class="box_detail_staff">
									<table cellpadding="3" style="margin-left:20px;">
										<tr>
											<td width="20" style="text-align:left; vertical-align:top;">Nama</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$nama.'</td>
										</tr>
										<tr>
											<td width="20" style="text-align:left; vertical-align:top;">Alamat</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$alamat.'</td>
										</tr>
										<tr>
											<td width="20" style="text-align:left; vertical-align:top;">Telepon</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$telepon.'</td>
										</tr>
										<tr>
											<td width="20" style="text-align:left; vertical-align:top;">Jabatan</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$bidang_tugas.'</td>
										</tr>
									</table>
									<!--<a href="#" class="back_to_table">Kembali ke table</a>-->
								</div>';
			}
			echo $detail_staff;
		}
	}
}

/* End of File : tata_usaha.php */
/* Location : ./controllers/tata_usaha.php */