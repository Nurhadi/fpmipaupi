<?php

	$this->load->view('header_view');
	
?>

<link rel="stylesheet" href="<?php echo base_url('assets/styles/dataTable.css');?>" type="text/css" media="screen" />

<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/adapters/jquery.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.blockUI.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.form.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.scrollTo-min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.dataTables.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/scripts/visi_misi.js');?>"></script>

</head>

<body>

<div id="container">

    <div id="content-big">

		<?php

		$this->load->view('menu_view');

		?>

		<div class="clear"></div>

		<div style="display:none;" id="loader"><img src="<?php echo base_url('assets/images/loader.gif');?>" id="imgket"/><span id="ket"><b>Saved</b>&nbsp;&nbsp;<img src="<?php echo  base_url('assets/images/check.png');?>" style="vertical-align:bottom;"/></span></div>

		<div style="display:none;" id="loader_delete"><img src="<?php echo base_url('assets/images/loader.gif');?>" id="imgket_delete"/><span id="ket_delete"><b>Deleted</b>&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/check.png');?>" style="vertical-align:bottom;"/></span></div>

		<div id="main-content">

			<div class="panel_title">Visi misi</div>

			<div class="panel_small min" id="for_title">

			<div class="panel_title">Title<a href="#" class="act" id="title_edit">edit</a></div>

			<div class="panel_content">

				<div id="title_container">

					<div id="title_container_load">

						<h1><?php echo $ptitle;?></h1>

					</div>

				</div>

				<div id="title_edit_container">

					<form id="title_form" autocomplete="off">

						<input type="text" name="title" id="title" class="text" value="<?php echo $ptitle;?>"/>

						<input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="title_cancel" />

					</form>

				</div>

			</div>

		</div>

		<div class="panel_small min" id="for_side_image">

			<div class="panel_title"></div>

			<div class="panel_content">

				<div id="simg_container">

					<div id="simg_content">

						<img src="<?php echo base_url('assets/images/logo.png');?>" />

					</div>

				</div>

				<div id="container_up" style="display:none;">

					<div id="header_up" class="panel_title">Document Upload<img src="<?php echo base_url('assets/images/up.png');?>" align="absmiddle"/></div>

					<div id="content_up">

						<div id="ket_up" align="center"></div>

							<form action="<?php echo base_url('upload_visi_misi');?>" method="post" enctype="multipart/form-data" id="upload_visi_misi" autocomplete="off">

								<p id="f1_upload_process">Loading...<br/><img src="<?php echo  base_url('assets/images/loader_big.gif');?>" /><br/></p>

								<p id="f1_upload_form" align="center">

									<label>File :  

										<input name="myfile" id="filedoc" type="file" size="30" />

									</label>

									<input type="hidden" value="" id="profil_id" name="profil_id"/>

									<label>

										<input type="button" id="cancel" class="sbtn" value="Cancel" /><input type="submit" name="submitBtn" class="sbtn" value="Save" />

									</label>

								</p>

								<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>

							</form>

					</div>

					<div id="footer_up"></div>

				</div>

			</div>

		</div>

		<div class="panel_small min" id="for_keyword">

			<div class="panel_title">Keyword (Max 2 Keyword)<a href="#" class="act" id="keyword_edit">edit</a></div>

			<div class="panel_content lef">

				<div id="keyword_container">

					<div id="keyword_container_load">

						<?php $r=explode(',',$keyword);$t=count($r);echo $keyword."<br/><br/>Total :".$t." keyword (pisahkan dengan koma).";?>

					</div>

				</div>

				<div id="keyword_edit_container">

					<form id="keyword_form" autocomplete="off">

						<textarea name="keyword" id="keyword" class="text area"><?php echo $keyword;?></textarea>

						<input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="keyword_cancel" />

					</form>

				</div>

			</div>

		</div>

		<div class="panel_small min" id="for_description">

			<div class="panel_title">Description (Max 160 Karakter)<a href="#" class="act" id="description_edit">edit</a></div>

				<div class="panel_content lef">

					<div id="description_container">

						<div id="description_container_load">

							<?php $s=strlen($description);echo $description."<br/><br/>Total : ".$s." karakter.";?>

						</div>

					</div>

					<div id="description_edit_container">

						<form id="description_form" autocomplete="off">

							<textarea name="description" id="description" class="text area4"/><?php echo $description;?></textarea>

							<input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="description_cancel" /><br />karakter tersisa : <span id="c">160</span>

						</form>

					</div>

				</div>

		</div>
		
		<div class="clear"></div>
		
		<div class="panel_big" id="for_teks">

			<div class="panel_title">Text Content<a href="#" class="act" id="teks_edit">edit</a></div>

				<div class="panel_content lef">

					<div id="teks_container">

						<div id="teks_container_load">

							<?php $s=strlen($text);echo $text."<br/><br/>Total : ".$s." karakter.";?>

						</div>

					</div>

					<div id="teks_edit_container">

						<form id="teks_form" autocomplete="off">

							<textarea name="text" id="text" class="text area4 editor"/><?php echo $text;?></textarea>

							<input type="submit" value="Save" class="button" style="float:right;"/>&nbsp;<input type="button" value="Cancel" class="button" id="teks_cancel" style="float:right;"/><br />

						</form>

					</div>

				</div>

			</div>

		</div>

	<?php
	
	$this->load->view('footer_view');
	
?>