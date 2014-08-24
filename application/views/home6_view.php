<!DOCTYPE html>
<html lang="en">
<head>
	<title>FPMIPA | Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam</title>
	<link rel="shortcut icon" href="http://fpok.upi.edu/wp-content/themes/twentyeleven/favicon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap.css');?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/style.css');?>"/>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/bootstrap.js');?>"></script>
</head>
<body>
	<div id="container">
		<div id="container-header" style="background:#0066FF;">
			<div class="container">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span6" id="box_logo">
								<img id="logo_fpmipa" src="<?php echo base_url('assets/images/logo_fpmipa_upi_1.png');?>"/>
							</div>
							<div class="span4 offset2" id="box_kerja_sama">
								<span style="color:#fff; display:block; margin-top:28px; text-align:center;">
									<img src="<?php echo base_url('assets/images/sponsor1.png');?>" style="width:105px; margin-top:-10px;"/>
									<img src="<?php echo base_url('assets/images/iso2.png');?>" style="width:185px;"/>
									<span style="color:#DA251C; font-weight:bold; font-size:0.8em;">Research Based Teaching University</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/superfish.css');?>"/>
		<script type="text/javascript" src="<?php echo base_url('assets/scripts/superfish.js');?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('ul.sf-menu').superfish();
			});
		</script>
		<div id="container-menu">
			<div id="top_line_menu"></div>
			<div id="box_main_menu" style="background:#00FFFF;">
				<div class="container">
					<div class="row">
						<div id="main-menu" class="span12">
							<ul class="sf-menu">
								<li><a href="<?php echo site_url();?>">Home</a>
									<ul>
										<li><a href="<?php echo site_url('home2');?>">Home 2</a></li>
										<li><a href="<?php echo site_url('home3');?>">Home 3</a></li>
										<li><a href="<?php echo site_url('home4');?>">Home 4</a></li>
										<li><a href="<?php echo site_url('home5');?>">Home 5</a></li>
										<li><a href="<?php echo site_url('home6');?>">Home 6</a></li>
										<li><a href="<?php echo site_url('home7');?>">Home 7</a></li>
									</ul>
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
										<li><a href="<?php echo site_url('kurikulum-dan-perkuliahan');?>">Kurikulum & Perkuliahan</a></li>
										<li><a href="<?php echo site_url('jadwal');?>">Jadwal</a></li>
										<li><a href="http://siak.upi.edu/nilai/" target="_blank">Nilai</a></li>
									</ul>
								</li>
								<li><a href="#">Civitas Akademika</a>
									<ul>
										<li><a href="<?php echo site_url('tata-usaha');?>">Tata Usaha</a></li>
										<li><a href="<?php echo site_url('mahasiswa');?>">Mahasiswa</a></li>
										<li><a href="#">Dosen >></a>
											<ul>
												<li><a href="<?php echo site_url('dosen');?>">Rekap Dosen</a></li>
											</ul>
										</li>
										<li><a href="<?php echo site_url('laboran-teknisi');?>">Laboran / Teknisi</a></li>
									</ul>
								</li>
								<li><a href="#">Fasilitas</a>
									<ul>
										<li><a href="<?php echo site_url('laboratorium');?>">Laboratorium</a></li>
										<li><a href="<?php echo site_url('peralatan-laboratorium-dan-workshop');?>">Peralatan Laboratorium dan Workshop</a></li>
										<li><a href="<?php echo site_url('sarana-dan-prasarana');?>">Sarana dan Prasarana</a></li>
									</ul>
								</li>
								<li><a href="#">Beasiswa</a>
									<ul>
										<li><a href="<?php echo site_url('info_beasiswa');?>">Info Beasiswa</a></li>
										<li><a href="<?php echo site_url('jenis_beasiswa');?>">Jenis Beasiswa</a></li>
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
										<li><a href="http://jurnal.upi.edu/jpmipa" target="_blank">Jumlah Pengajar MIPA</a></li>
										<li><a href="http://jstk.myprofil.info/" target="_blank">Jurnal Sains dan Teknologi Kimia</a></li>
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
								<li><a href="#">TCTP Program</a>
									<ul>
										<li><a href="<?php echo site_url('organizing-committee');?>">Organizing Committee</a></li>
										<li><a href="<?php echo site_url('participant');?>">Participant</a></li>
										<li><a href="<?php echo site_url('report_activity');?>">Report Activity</a></li>
										<li><a href="<?php echo site_url('publication');?>">Publication</a></li>
										<li><a href="<?php echo site_url('research_project');?>">Research Project</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="bottom_line_menu"></div>
		</div>
		
	<!-- 3d -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/ccslider.css');?>"/>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.easing.1.3.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.ccslider-3.0.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/ccslider.js');?>"></script>
	<script type="text/javascript">
		$(window).load(function(){
			$('#slider').ccslider({
				effectType : '3d',
				effect : 'cubeUp',
				slices : 4
			});
		});
	</script>

	<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.cycle.all.js');?>"></script>	
	<script type="text/javascript">
		$(document).ready(function(){
			
			$('#slider').cycle({
				fx:     'fade',
				speed:  'fast',
				timeout: 5000,
				next:   '#next',
				prev:   '#prev'
			});
			
		});
	</script>
	<!-- -->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#box_main_menu2').mouseover(function(){
				$('#box_main_menu2_child').slideDown();
				return false;
			});
			$('#content').mouseover(function(){
				$('#box_main_menu2_child').slideUp();
				return false;
			});
			$('#box_slider').mouseover(function(){
				$('#box_main_menu2_child').slideUp();
				return false;
			});
		});
	</script>

	<!--
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.cycle.all.js');?>"></script>	
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.easing.1.3.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.ccslider-3.0.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/ccslider.js');?>"></script>
	<script type="text/javascript">
		$(window).load(function(){
			$('#slider').ccslider({
				effectType: '2d',
				effect: 'random'
			});
		});
	</script>
	-->

		<div id="container-content">
			<div class="container">
				<div class="row">
					<div class="span12" id="container-content-a">
						<div class="row">
							<div class="span12" id="box_slider" style="position:relative;">
								<div style="background:rgba(0,0,0,0.4); height:235px; width:170px; position:absolute; float:left;"></div>
								<div id="slider" class="slider3d" style="float:left;">
									<img src="<?php echo base_url('assets/images/slider_1.jpg');?>"/>
									<img src="<?php echo base_url('assets/images/slider_2.jpg');?>"/>
									<!--
									<img src="<?php echo base_url('assets/images/slider3.jpg');?>"/>
									<img src="<?php echo base_url('assets/images/slider4.jpg');?>"/>
									-->
								</div>
								<div style="background:rgba(0,0,0,0.4); height:235px; width:170px; position:absolute; right:0px; float:right;"></div>
								<a class="slider-nav next"><img src="<?php echo base_url('assets/images/arrow_next1.png');?>" id="next"/></a>
								<a class="slider-nav prev"><img src="<?php echo base_url('assets/images/arrow_prev1.png');?>" id="prev"/></a>
							</div>
							<div id="bottom_line_slider" class="span12"></div>

							<div class="span12" id="box_main_menu2" style="background:#FF9900;">
								<div class="main_menu2"><span class="label_main_menu2">Jurusan / Prodi</span></div>
								<div class="main_menu2"><span class="label_main_menu2">E-Learning</span></div>
								<div class="main_menu2"><span class="label_main_menu2">Fasilitas</span></div>
								<div class="main_menu2"><span class="label_main_menu2">Layanan Pelatihan</span></div>
							</div>
							<div class="span12" id="box_main_menu2_child">
								<div class="child_main_menu2">
									<div class="child_mainmenu2"><a href="#">Jurusan Pendidikan Biologi</a></div>
									<div class="child_mainmenu2"><a href="#">Jurusan Pendidikan Fisika</a></div>
									<div class="child_mainmenu2"><a href="#">Jurusan Pendidikan Kimia</a></div>
									<div class="child_mainmenu2"><a href="#">Jurusan Pendidikan Matematika</a></div>
									<div class="child_mainmenu2"><a href="#">Program Studi Ilmu Komputer</a></div>
									<div class="child_mainmenu2"><a href="#">Program Studi IPSE</a></div>
									<div class="child_mainmenu2"><a href="#">Program Studi Pendidikan Ilmu Komputer</a></div>
								</div>
								<div class="child_main_menu2">
									<div class="child_mainmenu2"><a href="#">E-Learning Fisika</a></div>
									<div class="child_mainmenu2"><a href="#">E-Learning FPMIPA</a></div>
								</div>
								<div class="child_main_menu2">
									<div class="child_mainmenu2"><a href="#">Laboratorium Biologi</a></div>
									<div class="child_mainmenu2"><a href="#">Laboratorium Kimia</a></div>
									<div class="child_mainmenu2"><a href="#">Laboratorium Fisika</a></div>
									<div class="child_mainmenu2"><a href="#">Laboratorium Komputer</a></div>
								</div>
								<div class="child_main_menu2">
									<!--
									<div class="child_mainmenu2"><a href="#">Apple</a></div>
									<div class="child_mainmenu2"><a href="#">Microsoft</a></div>
									<div class="child_mainmenu2"><a href="#">Android</a></div>
									<div class="child_mainmenu2"><a href="#">Samsung</a></div>
									<div class="child_mainmenu2"><a href="#">Nokia</a></div>
									<div class="child_mainmenu2"><a href="#">Sony</a></div>
									<div class="child_mainmenu2"><a href="#">Acer</a></div>
									-->
								</div>
							</div>
							
							<div class="span12" id="content" style="background:#fff; margin-top:15px; border-radius:10px;">
								<div class="row" id="box-content-bottom-home" style="">
									<div class="span12" id="bottom-home">
										<div class="box_home_info">
											<div class="box_home">
												<div class="box_title"><a href="<?php echo site_url('berita');?>" style="color:#fff !important;">Berita</a></div>
												<div class="box_content_home">
													<img src="<?php echo base_url('assets/images/box_image.png');?>" class="img_box_home"/>
													<p class="text_box_home">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
													<div class="box_read_more"><a href="#">Read more >></a></div>
												</div>
											</div>
											<div class="box_home">
												<div class="box_title"><a href="<?php echo site_url('agenda');?>" style="color:#fff !important;">Agenda</a></div>
												<div class="box_content_home">
													<img src="<?php echo base_url('assets/images/box_image.png');?>" class="img_box_home"/>
													<p class="text_box_home">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
													<div class="box_read_more"><a href="#">Read more >></a></div>
												</div>
											</div>
											<div class="box_home">
												<div class="box_title"><a href="<?php echo site_url('seminar');?>" style="color:#fff !important;">Seminar</a></div>
												<div class="box_content_home">
													<img src="<?php echo base_url('assets/images/box_image.png');?>" class="img_box_home"/>
													<p class="text_box_home">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
													<div class="box_read_more"><a href="#">Read more >></a></div>
												</div>
											</div>
											<div class="box_home">
												<div class="box_title"><a href="<?php echo site_url('lowongan_kerja');?>" style="color:#fff !important;">Lowongan Kerja</a></div>
												<div class="box_content_home">
													<img src="<?php echo base_url('assets/images/box_image.png');?>" class="img_box_home"/>
													<p class="text_box_home">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
													<div class="box_read_more"><a href="#">Read more >></a></div>
												</div>
											</div>
										</div>
									</div>
									<div class="span12">
										<div id="box_bottom_img_home">
											<div id="box_bottom1"><img src="<?php echo base_url('assets/images/210x130.jpg');?>"/></div>
											<div id="box_bottom2"><img src="<?php echo base_url('assets/images/210x130.jpg');?>"/></div>
											<div id="box_bottom3"><img src="<?php echo base_url('assets/images/210x130.jpg');?>"/></div>
											<div id="box_bottom4"><img src="<?php echo base_url('assets/images/210x130.jpg');?>"/></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="container-footer">
			<div class="container">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span12" id="box_information">
								<div id="box_fb_tw">
									<span id="fpmipa_on">FPMIPA on</span>
									<a href="https://twitter.com/fpmipa_upi" target="_blank"><img src="<?php echo base_url('assets/images/icon_twitter.png');?>" id="icon_twitter"/></a>
									<a href="https://www.facebook.com/fpmipa.upi.1" target="_blank"><img src="<?php echo base_url('assets/images/icon_facebook.png');?>" id="icon_facebook"/></a>
								</div>
								<p id="information">
									&copy; 2013 Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam - UPI<br>
									Jl. Dr. Setiabudhi No. 229 Bandung 40154 Jawa Barat - Indonesia<br>
									Telp/Fax: +62-22-2001108<br>
									Developed by Invinity Technologies
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>