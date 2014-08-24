<?php $this->load->view('header_view'); ?>	

		<div id="container-content">
			<div class="container">
				<div class="row">
					<div class="span12" id="container-content-a">
						<div class="row">
							<div class="span12" id="content-profil">
								<div class="row">
									<div class="span3">
										<div class="box_menu_left">
											<?php $this->load->view('menu_tctp_view');?>
										</div>
									</div>
									<div class="span9">
										<div class="row">
											<div class="span9">
												<div class="box_table">
													<div class="box_data_table">
														<div class="text_content">
															<div class="title_data">
																DETAIL PARTICIPANT<br>
																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>
																UNIVERSITAS PENDIDIKAN INDONESIA
															</div>
														</div>
														<hr>
														
														<div class="box_image_dosen clearfix" style="text-align:center;">
															<img src="<?php echo base_url($image_thumbnail);?>"/>
														</div>
														<div class="box_detail_dosen" style="padding-bottom:25px; margin-bottom:25px;">
															<table cellpadding="3">
																<tr>
																	<td width="120" style="text-align:right; vertical-align:top;">Name</td>
																	<td style="vertical-align:top;">:</td>
																	<td width="150" style="text-align:left; vertical-align:top;"><?php echo $nama;?></td>
																</tr>
																<tr>
																	<td width="70" style="text-align:right; vertical-align:top;">Birth Date</td>
																	<td style="vertical-align:top;">:</td>
																	<td width="150" style="text-align:left; vertical-align:top;"><?php echo date('d-M-Y',strtotime($tanggal_lahir));?></td>
																</tr>
																<tr>
																	<td width="70" style="text-align:right; vertical-align:top;">Gender</td>
																	<td style="vertical-align:top;">:</td>
																	<td width="150" style="text-align:left; vertical-align:top;"><?php echo $jenis_kelamin;?></td>
																</tr>
																<tr>
																	<td width="70" style="text-align:right; vertical-align:top;">Nationality</td>
																	<td style="vertical-align:top;">:</td>
																	<td width="150" style="text-align:left; vertical-align:top;"><?php echo $kewarganegaraan;?></td>
																</tr>
															</table>
														</div>
														
														<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/dataTable.css');?>"/>
														<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.scrollTo-min.js');?>"></script>
														<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.dataTables.min.js');?>"></script>
														<script type="text/javascript">
															$(document).ready(function(){
																$("#table_data1").dataTable({
																	"bAutoWidth": false,
																	"bProcessing": true,
																	"sPaginationType": "full_numbers",	
																	"aaSorting": [[ 0, "asc" ]],
																	"fnDrawCallback": function( oSettings ) {}
																});
																
																$("#table_data2").dataTable({
																	"bAutoWidth": false,
																	"bProcessing": true,
																	"sPaginationType": "full_numbers",	
																	"aaSorting": [[ 0, "asc" ]],
																	"fnDrawCallback": function( oSettings ) {}
																});
																
																$("#table_data3").dataTable({
																	"bAutoWidth": false,
																	"bProcessing": true,
																	"sPaginationType": "full_numbers",	
																	"aaSorting": [[ 0, "asc" ]],
																	"fnDrawCallback": function( oSettings ) {}
																});
															});
														</script>
														<div style="clear:both; padding:15px; border:1px solid #ccc; border-radius:10px;">
															<div class="tabbable"> <!-- Only required for left/right tabs -->
																<ul class="nav nav-tabs">
																	<li class="active"><a href="#tab1" data-toggle="tab">Report Activity</a></li>
																	<li><a href="#tab2" data-toggle="tab">Publication</a></li>
																	<li><a href="#tab3" data-toggle="tab">Research Project</a></li>
																</ul>
																<div class="tab-content">
																	<div class="tab-pane active" id="tab1">
																		<table id="table_data1" width="100%" cellpadding="5" class="table-bordered">
																			<thead>
																				<tr>
																					<th>No</th>
																					<th>Title</th>
																					<th>Action</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php 
																					if($report_activity->num_rows() > 0)
																					{
																						$i = 1; 
																						foreach($report_activity->result() as $ra)
																						{
																							echo '<tr>
																									<td style="text-align:center;">'.$i.'</td>
																									<td>'.$ra->title.'</td>
																									<td style="text-align:center;"><a target="_blank" href="'.base_url('data/report_activity/'.$ra->path).'" id="'.$ra->report_id.'" href="#">Download</a></td>
																								  </tr>';
																								  
																							$i = $i + 1;
																						}
																					}
																					//<td style="text-align:center;"><a target="_blank" href="'.base_url('download_report_activity/'.$ra->path).'" id="'.$ra->report_id.'" href="#">Download</a></td>
																				?>
																			</tbody>
																		</table>
																	</div>
																	<div class="tab-pane" id="tab2">
																		<table id="table_data2" width="100%" cellpadding="5" class="table-bordered">
																			<thead>
																				<tr>
																					<th>No</th>
																					<th>Title</th>
																					<th>Action</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php 
																					if($publication->num_rows() > 0)
																					{
																						$j = 1; 
																						foreach($publication->result() as $pb)
																						{
																							echo '<tr>
																									<td style="text-align:center;">'.$j.'</td>
																									<td>'.$pb->title.'</td>
																									<td style="text-align:center;"><a target="_blank" href="'.base_url('data/publication/'.$pb->path).'" id="'.$pb->publication_id.'" href="#">Download</a></td>
																								  </tr>';
																								  
																							$j = $j + 1;
																						}
																					}
																					//<td style="text-align:center;"><a target="_blank" href="'.base_url('download_publication/'.$pb->path).'" id="'.$pb->publication_id.'" href="#">Download</a></td>
																				?>
																			</tbody>
																		</table>
																	</div>
																	<div class="tab-pane" id="tab3">
																		<table id="table_data3" width="100%" cellpadding="5" class="table-bordered">
																			<thead>
																				<tr>
																					<th>No</th>
																					<th>Title</th>
																					<th>Action</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php 
																					if($research_project->num_rows() > 0)
																					{
																						$k = 1; 
																						foreach($research_project->result() as $rp)
																						{
																							echo '<tr>
																									<td style="text-align:center;">'.$k.'</td>
																									<td>'.$rp->title.'</td>
																									<td style="text-align:center;"><a target="_blank" href="'.base_url('data/research_project/'.$rp->path).'" id="'.$rp->research_id.'" href="#">Download</a></td>
																								  </tr>';
																								  
																							$k = $k + 1;
																						}
																					}
																					//<td style="text-align:center;"><a target="_blank" href="'.base_url('download_research_project/'.$rp->path).'" id="'.$rp->research_id.'" href="#">Download</a></td>
																				?>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<?php $this->load->view('footer_view'); ?>