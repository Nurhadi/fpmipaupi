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
												Profil >> <a href="<?php echo site_url('visi_misi');?>" class="breadcump_child">Visi dan Misi</a>
												<hr id="breadcump_line">
											</div>
											<div class="span9">
												<div class="text_content">
													<p>
														<b>Visi :</b> 
													</p>
													<p>
														Pelopor dan unggul dalam Pendidikan MIPA dan dan Pengembangan Ilmu MIPA
													</p>
													<p>
														<b>Misi :</b> 
													</p>
													<ul>
														<li>Menyelenggarakan pendidikan untuk  menyiapakan tenaga pendidik MIPA dan ilmuan MIPA profesional yang berdaya saing global;</li>
														<li>Mengembangkan penelitian dibidang Pendidikan MIPA dan ilmu MIPA untuk menjadi landasan dalam proses  pendidikan dan pengabdian kepada masyarakat;</li>
														<li>Menyelenggarakan layanan pengabdian kepada masyarakat berbasis penelitian pendidikan MIPA dan ilmu MIPA;</li>
														<li>Menyelenggarakan internasionalisasi pendidikan melalui pengembangan dan pengokohan jejaring dan kemitraan pada tingkat nasional,regional, dan internasional.</li>
														<li>Melaksanakan Good Governance sebagai dasar menuju kelas berstandar internasional
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