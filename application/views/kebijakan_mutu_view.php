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
											<?php $this->load->view('menu_profil_view');?>
										</div>
									</div>
									<div class="span9">
										<div class="row">
											<div class="span5" id="breadcump">
												Profil >> <a href="<?php echo site_url('kebijakan_mutu');?>" class="breadcump_child">Kebijakan Mutu</a>
												<hr id="breadcump_line">
											</div>
											<div class="span9">
												<div class="text_content">
													<ul>
														<li>Menghasilkan lulusan yang profesional dan berdaya saing global serta berakhlak mulia</li>
														<li>Melakukan perbaikan terus menerus terhadap proses, layanan, dan efektivitas penerapan Sistem Manajemen Mutu</li>
														<li>Menerapkan Sistem Manajemen ISO 9001:2008 Certificate Number : 48265/A/0001/UK/En</li>
													</ul>
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