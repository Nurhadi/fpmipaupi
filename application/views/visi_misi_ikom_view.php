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
											<?php $this->load->view('menu_ikom_view');?>
										</div>
									</div>
									<div class="span9">
										<div class="row">
											<div class="span5" id="breadcump">
												IKOM >> <a href="<?php echo site_url('visi-misi-ikom');?>" class="breadcump_child">Visi dan Misi</a>
												<hr id="breadcump_line">
											</div>
											<div class="span9">
												<div class="text_content">
													<p>
														<b>Visi :</b> 
													</p>
													<p>
														Peduli dan berkiprah bagi kelancaran studi mahasiswa.
													</p>
													<p>
														<b>Misi :</b> 
													</p>
													<ul>
														<li>Menumbuhkan dan menggerak kepedulian orang tua mahasiswa.</li>
														<li>Mendayagunakan dana sumbangan yang berbasis kekuatan sendiri.</li>
														<li>Membantu proses pendidikan melalui bantuan finansial kepada mahasiswa.</li>
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