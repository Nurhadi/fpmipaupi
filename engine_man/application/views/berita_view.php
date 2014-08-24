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
<script type="text/javascript" src="<?php echo base_url('assets/scripts/berita.js');?>"></script>
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
			<div class="panel_title">Berita</div>
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
							<form action="<?php echo base_url('upload_berita');?>" method="post" enctype="multipart/form-data" id="upload_berita" autocomplete="off">
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
			<div class="panel_big" id="for_berita_item">
				<div class="panel_title">Berita Item<a href="#" class="act" id="berita_item_add">add</a></div>
				<div class="panel_content lef">
					<div id="berita_item_container">
						<div id="berita_item_container_load">
							<table id="berita_table" width="100%" class="display">
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Date Create</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if($d->num_rows()>0){
										foreach($d->result() as $berita){
											echo "<tr>";
											$title=str_replace(' ','_',$berita->title);
											echo "<td>".$berita->id_berita."</td><td>".$berita->title."</td><td>".date('d-M-Y',strtotime($berita->date_create))."</td>";
											echo "<td><a href='#' class='detail_berita' idd='".$berita->id_berita."'>detail</a> | <a href='#' class='edit_berita' idd='".$berita->id_berita."'>edit</a> | <a href='#' class='delete_berita' idd='".$berita->id_berita.",".$berita->title."'>delete</a></td>";
											echo "</tr>";
										}
										}else{
										echo "tidak ada data berita item";
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<div id="berita_item_detail_container"></div>
					<div id="berita_item_edit_container">
						<form id="berita_item_form" autocomplete="off">
							<table>
								<tr><td width="100px"><label>Title</label></td><td><input type="text" id="di_title" name="di_title" class="text"/></td></tr>
								<tr><td width="100px"><label>Meta Keywords</label></td><td><textarea name="di_keywords" id="di_keywords" class="text area"></textarea></td></tr>
								<tr><td width="100px"><label>Meta Description</label></td><td><textarea name="di_description" id="di_description" class="text area"></textarea></td></tr>
								<tr><td valign="top"><label>Thumbnail<br />(188 x 100 pixel)</label></td><td><input type="button" class="button select" id="img_upl" value="Pilih Gambar"/><input type="hidden" id="pi_path" name="pi_path" value=""/></td></tr>
								<tr><td colspan="2"><div id="img_prev_container" style="width:100%;"><div id="img_prev" style="padding:0px;"></div><a href="#" id="del_img">delete thumbnail</a></div></td></tr>
								<tr><td valign="top"><label>Description</label></td><td>Gunakan shift+enter untuk pindah baris pada paragraf yang sama.<textarea class="editor2"></textarea></td></tr>
								<tr><td></td><td align="right"><input type="button" class="button" value="Cancel" id="di_cancel" />&nbsp;<input type="submit" value="Save" class="button"/></td></tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<div id="delete_container">
				<div class="panel_title" id="title_for_delete">Delete Berita Item</div>
				<div id="delete_confirm">
					Are you sure want to delete berita item <b><span id="del_ket"></span></b>?<br />
					<input type="button" class="button" value="Yes" id="delete_yes"/>&nbsp;<input type="button" class="button" value="No" id="delete_no" />
				</div>
			</div>
		</div>
	<?php
	$this->load->view('footer_view');
?>