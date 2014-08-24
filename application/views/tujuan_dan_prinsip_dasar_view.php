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
												IKOM >> <a href="<?php echo site_url('tujuan-dan-prinsip-dasar');?>" class="breadcump_child">Tujuan dan Prinsip Dasar</a>
												<hr id="breadcump_line">
											</div>
											<div class="span9">
												<div class="text_content">
													<h4>Tujuan</h4>
													<ul>
														<li>Membantu penyelesaian studi mahasiswa yang kesulitan dalam membayar SPP.</li>
														<li>Menumbuhkan solidaritas sosial antarorang tua di FPMIPA UPI.</li>
														<li>Menjalin komunikasi antara orang tua mahasiswa dengan FPMIPA UPI dalam kegiatan pendidikan.</li>
													</ul>
													<h4>Prinsip Dasar</h4>
													<table border="1" bordercolor="#ccc" style="border-collapse:collapse; border-color:#ccc;" cellspacing="0" cellpadding="10">
														<tbody>
															<tr>
																<td valign="top" width="131">
																	<p align="left"><strong>Prinsip moral</strong></p>
																</td>
																<td valign="top">
																	<p align="left">:</p>
																</td>
																<td valign="top" width="477">
																	<p align="left">Jujur, amanah, ihsan</p>
																</td>
															</tr>
															<tr>
																<td valign="top" width="131">
																	<p align="left"><strong>Prinsip kedudukan organisasi</strong></p>
																</td>
																<td valign="top">
																	<p align="left">:</p>
																</td>
																<td valign="top" width="477">
																	<p align="left">Transparan, akuntabel, bertanggung jawab, profesional, berdayaguna dan berhasil guna, berorientasi pada perbaikan terus menerus</p>
																</td>
															</tr>
															<tr>
																<td valign="top" width="131">
																	<p align="left"><strong>Prinsip pengembangan</strong></p>
																</td>
																<td valign="top">
																	<p align="left">:</p>
																</td>
																<td valign="top" width="477">
																	<p align="left">Inovatif, dan kreatif</p>
																</td>
															</tr>
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
		
<?php $this->load->view('footer_view'); ?>