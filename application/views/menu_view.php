		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/superfish.css');?>"/>
		<script type="text/javascript" src="<?php echo base_url('assets/scripts/superfish.js');?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('ul.sf-menu').superfish();
			});
		</script>
		<div id="container-menu">
			<div id="top_line_menu"></div>
			<div id="box_main_menu">
				<div class="container">
					<div class="row">
						<div id="main-menu" class="span12">
							<ul class="sf-menu">
								<li><a href="<?php echo site_url();?>">Home</a>
									<!--
									<ul>
										<li><a href="<?php echo site_url('home2');?>">Home 2</a></li>
										<li><a href="<?php echo site_url('home3');?>">Home 3</a></li>
										<li><a href="<?php echo site_url('home4');?>">Home 4</a></li>
										<li><a href="<?php echo site_url('home5');?>">Home 5</a></li>
										<li><a href="<?php echo site_url('home6');?>">Home 6</a></li>
										<li><a href="<?php echo site_url('home7');?>">Home 7</a></li>
									</ul>
									-->
								</li>
								<li><a href="#">Profil</a>
									<ul>
										<li><a href="<?php echo site_url('sejarah');?>">Sejarah</a></li>
										<li><a href="<?php echo site_url('visi-misi');?>">Visi dan Misi</a></li>
										<li><a href="<?php echo site_url('kebijakan_mutu');?>">Kebijakan Mutu</a></li>
										<li><a href="<?php echo site_url('pimpinan');?>">Pimpinan</a></li>
										<li><a href="<?php echo site_url('struktur');?>">Struktur</a></li>
										<li><a href="<?php echo site_url('prestasi');?>">Prestasi</a></li>
									</ul>
								</li>
								<li><a href="#">Akademik</a>
									<ul>
										<li><a href="<?php echo site_url('kalender-akademik');?>">Kalender Akademik</a></li>
										<li><a href="<?php echo site_url('kurikulum-dan-perkuliahan');?>">Kurikulum</a></li>
										<li><a href="<?php echo site_url('jadwal');?>">Jadwal</a></li>
										<li><a href="http://siak.upi.edu/nilai/" target="_blank">Nilai</a></li>
									</ul>
								</li>
								<li><a href="#">SDM</a>
									<ul>
										<li><a href="#">Dosen >></a>
											<ul>
												<li><a href="<?php echo site_url('dosen');?>">Rekap Dosen</a></li>
											</ul>
										</li>
										<li><a href="<?php echo site_url('tata-usaha');?>">Tenaga Administrasi</a></li>
										
										<li><a href="<?php echo site_url('laboran-teknisi');?>">Laboran / Teknisi</a></li>
									</ul>
								</li>
								<li><a href="<?php echo site_url('mahasiswa');?>">Mahasiswa</a>
								</li>
								<li><a href="#">Fasilitas</a>
									<ul>
										<li><a href="<?php echo site_url('laboratorium');?>">Laboratorium</a></li>
										<li><a href="<?php echo site_url('peralatan-laboratorium-dan-workshop');?>">Peralatan Laboratorium dan Workshop</a></li>
										<li><a href="<?php echo site_url('sarana-dan-prasarana');?>">Sarana dan Prasarana</a></li>
									</ul>
								</li>
								<li><a href="#">Publikasi Ilmiah</a>
									<ul>
										<li><a href="#">Proceeding >></a>
											<ul>
												<li><a href="<?php echo site_url('proceeding-pdf');?>">Proceeding PDF</a></li>
												<li><a href="<?php echo site_url('proceeding-detail');?>">Proceeding Detail</a></li>
											</ul>
										</li>
										<li><a href="http://jpmipa.fpmipa.upi.edu/" target="_blank">Jurnal Pengajaran MIPA</a></li>
										<li><a href="http://kimia.upi.edu/jstk/" target="_blank">Jurnal Sains dan Teknologi Kimia</a></li>
										<li><a href="http://jurnal.upi.edu/ptik-ilkom" target="_blank">Jurnal PTIK-ILKOM</a></li>
									</ul>
								</li>
								<li><a href="#">IKOM</a>
									<ul>
										<li><a href="<?php echo site_url('tentang-ikom');?>">Tentang IKOM</a></li>
										<li><a href="<?php echo site_url('visi-misi-ikom');?>">Visi dan Misi</a></li>
										<li><a href="<?php echo site_url('tujuan-dan-prinsip-dasar');?>">Tujuan dan Prinsip Dasar</a></li>
										<li><a href="<?php echo site_url('pengurus-ikom');?>">Pengurus</a></li>
										<li><a href="<?php echo site_url('donatur-ikoma');?>">Donatur IKOMA</a></li>
									</ul>
								</li>
								<li><a href="#">Alumni</a></li>
								<li><a href="#">TCTP Program</a>
									<ul>
										<li><a href="<?php echo site_url('organizing-committee');?>">Organizing Committee</a></li>
										<li><a href="<?php echo site_url('participant');?>">Participant</a></li>
										<!--
										<li><a href="<?php echo site_url('report_activity');?>">Report Activity</a></li>
										<li><a href="<?php echo site_url('publication');?>">Publication</a></li>
										<li><a href="<?php echo site_url('research_project');?>">Research Project</a></li>
										-->
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="bottom_line_menu"></div>
		</div>