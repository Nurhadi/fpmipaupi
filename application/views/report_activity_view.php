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
											<div class="span5" id="breadcump">
												TCTP Program >> <a href="<?php echo site_url('report-activity');?>" class="breadcump_child">Report Activity</a>
												<hr id="breadcump_line">
											</div>
											<div class="span9">
												<div class="box_report clearfix">
													<div class="report">
														<img class="img_report" src="<?php echo base_url('assets/images/participant1.jpg');?>"/>
														<a href="#">Alemneh Assefa Ayicheh</a>
													</div>
													<div class="report">
														<img class="img_report" src="<?php echo base_url('assets/images/participant2.jpg');?>"/>
														<a href="#">Boki Tola Feyisa</a>
													</div>
													<div class="report">
														<img class="img_report" src="<?php echo base_url('assets/images/participant3.jpg');?>"/>
														<a href="#">Fayo Wado Dado</a>
													</div>
													<div class="report">
														<img class="img_report" src="<?php echo base_url('assets/images/participant4.jpg');?>"/>
														<a href="#">Kebede Alemu Abdi</a>
													</div>
													<div class="report">
														<img class="img_report" src="<?php echo base_url('assets/images/participant5.jpg');?>"/>
														<a href="#">Shimelis Teshome Bizuye</a>
													</div>
													<div class="report">
														<img class="img_report" src="<?php echo base_url('assets/images/participant6.jpg');?>"/>
														<a href="#">Sisay Hailu Gebretsadik</a>
													</div>
													<div class="report">
														<img class="img_report" src="<?php echo base_url('assets/images/participant7.jpg');?>"/>
														<a href="#">Nigussie Lemma Bedada</a>
													</div>
													<div class="report">
														<img class="img_report" src="<?php echo base_url('assets/images/participant8.jpg');?>"/>
														<a href="#">Wossen Ayalew Asfaw</a>
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