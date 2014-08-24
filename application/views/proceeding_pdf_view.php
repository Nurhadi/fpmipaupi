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
											<?php $this->load->view('menu_publikasi_ilmiah_view');?>
										</div>
									</div>
									<div class="span9">
										<div class="row">
											<div class="span5" id="breadcump">
												Publikasi Ilmiah >> <a href="<?php echo site_url('proceeding-pdf');?>" class="breadcump_child">Proceeding PDF</a>
												<hr id="breadcump_line">
											</div>
											<div class="span9">
												<div class="text_content">
													<iframe src="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.fpmipa.upi.edu%2Fuploads%2F2012%2FICLS%2Fkeynotespeaker%2FMaitree.pdf&#038;hl=&#038;embedded=true" class="gde-frame" style="width:100%; height:500px; border: none;" scrolling="no"></iframe>
													<div style="margin-top:15px;">
														<a target="_blank" href="http://www.fpmipa.upi.edu/uploads/2012/ICLS/keynotespeaker/Maitree.pdf" class="gde-link" onClick="_gaq.push(['_trackEvent', 'Google Doc Embedder', 'Download', this.href]);">Download (PDF, 222KB)</a>
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