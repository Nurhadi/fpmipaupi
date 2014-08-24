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
											<?php $this->load->view('menu_civitas_view');?>
										</div>
									</div>
									<div class="span9">
										<div class="row">
											<div class="span9">
												<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/dataTable.css');?>"/>
												<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.scrollTo-min.js');?>"></script>
												<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.dataTables.min.js');?>"></script>
												<script type="text/javascript">
													$(document).ready(function(){
														<?php echo $javascript_data_table;?>
														
														$('.back_to_table').click(function(){
															$('.box_data_table').fadeIn();
															$('.box_detail').hide();
															$('.back_to_table').hide();
															$.scrollTo($('#content-profil'),1000);
															return false;
														});
													});
												</script>
												<div class="box_table">
													<div class="box_data_table">
														<div class="text_content">
															<div class="title_data">
																DATA KARYAWAN<br>
																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>
																UNIVERSITAS PENDIDIKAN INDONESIA
															</div>
														</div>
														<hr>
														<div class="tabbable"> <!-- Only required for left/right tabs -->
															<ul class="nav nav-tabs">
																<?php echo $unit_kerja;?>
															</ul>
															<div class="tab-content">
																<?php echo $table_tata_usaha;?>
															</div>
														</div>
													</div>
													<div class="box_detail clearfix" style="height:auto;"><!-- content of detail staff tata usaha --></div>
													<div class="back" style="text-align:center; margin-top:30px;">
														<a href="#" class="back_to_table">Kembali ke tabel data</a>
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