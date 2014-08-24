<?php
	$this->load->view('header_view');
?>
<link rel="stylesheet" href="<?php echo base_url('assets/styles/dataTable.css');?>" type="text/css" media="screen" /><script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script><script type="text/javascript" src="<?php echo base_url('assets/ckeditor/adapters/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.blockUI.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.form.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/beranda.js');?>"></script>
</head>
<body>
<div id="container">
    <div id="content-big">
        <?php
			$this->load->view('menu_view');
		?>
        <div class="clear"></div>
        <div style="display:none;" id="loader"><img src="<?php echo base_url('assets/images/loader.gif');?>" id="imgket"/><span id="ket"><b>Saved</b>&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/check.png');?>" style="vertical-align:bottom;"/></span></div>
        <div style="display:none;" id="loader_delete"><img src="<?php echo base_url('assets/images/loader.gif');?>" id="imgket_delete"/><span id="ket_delete"><b>Deleted</b>&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/check.png');?>" style="vertical-align:bottom;"/></span></div>
        <div id="main-content">
        	<div id="container_up" style="display:none;background:#fff;height:100%">
				<div id="header_up" class="panel_title">Document Upload<img src="<?php echo base_url('assets/images/up.png');?>" align="absmiddle"/></div>
				<div id="content_up" style="text-align:left">
					<div id="ket_up" align="center" style="color:#000"></div>
					<form action="upload_bi" method="post" enctype="multipart/form-data" autocomplete="off" id="upload_bi">
						 <div id="f1_upload_form">
							 <div><label>Title </label>
								 <input type="text" name="title" id="title" style="width:260px;"/><div class="err err_title"></div>
							 </div>
							 <div><label>Desc </label>
								 <textarea name="description" id="description" style="width:260px" class="text area3"></textarea><div class="err err_desc" style="vertical-align:top;margin-top:10px;"></div><br/>
								 <div><label>&nbsp;</label>Karakter tersisa : <span id="c1">160</span></div>
							 </div>
							 <div id="ff"><label>File </label>  
								  <input name="myfile" id="filedoc" type="file" size="30" /><div class="err err_file"></div>
							 </div>
							 <input type="hidden" id="beranda_id" name="beranda_id" value="" />
							 <div style="padding-left:194px">
								 <input type="button" id="cancel" class="button" value="Cancel" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submitBtn" class="button" value="Save" />
							 </div>
						 </div>
						 <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
					 </form>
				 </div>
				 <div id="footer_up"></div>
			 </div>
			<div class="panel_title">Home</div>
            <div class="panel_small min2" id="for_simg_fake">            	<div class="panel_title"></div>                <div class="panel_content">                	<div id="simg_fake_container">                    	<div id="simg_fake_content">                        	<img src="<?php echo base_url('assets/images/logo.png');?>" />                        </div>                    </div>                </div>            </div>
            <div class="panel_small min2" id="for_simg">
                <div class="panel_title">Welcome Text<a href="#" class="act" id="simg_edit">edit</a></div>
            	<div class="panel_content">
                    <div id="simg_container">
                    	<div id="simg_content">
                        	<div id="simg_content_load">
								<div class="t1"><?php echo '<h2>'.$title1.'</h2>';?></div>
								<div class="d1"><?php echo $desc1;?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>						<div class="clear"></div>						<div class="panel_big" id="for_image">				<div class="panel_title">Top Image (940 x 540 pixel)<a href="#" class="act" id="image_edit">edit</a></div>            	<div class="panel_content lef">                    <div id="image_container">                    	<div id="image_container_load" style="text-align:center;">							<img src="<?php echo base_url().'addscripts/ubah_ukuran_gambar.php?image=http://www.newkube.co.id/'.$image_filename.'&lebar=620&tinggi=620'?>"/>                    	</div>                    </div>                </div>	            </div>			            <div class="clear"></div>			            <div class="panel_big" id="for_text" style="text-align:left;">            	<div class="panel_title">Text Content (Top Left)<a href="#" class="act" id="text_edit">edit</a></div>                <div class="panel_content" style="text-align:left">                	<div id="text_container">                    	<div id="text_content">                        	<div id="text_content_load">								<?php echo $text_content; ?>                            </div>                        </div>                        <div style="display:none;" id="text_editor">                        	Gunakan shift+enter untuk pindah baris pada paragraf yang sama.                        	<textarea class="editor">								<?php echo $text_content; ?>							</textarea>                            <div style="text-align:right;"><input type="button" value="Cancel" id="text_cancel" class="button"/>&nbsp;<input type="button" value="Save" id="subt" class="button"/></div>                        </div>                    </div>                </div>            </div>			
            <div class="clear"></div>						<div class="panel_big" id="for_text2" style="text-align:left;">            	<div class="panel_title">Text Content (Bottom Right)<a href="#" class="act" id="text2_edit">edit</a></div>                <div class="panel_content" style="text-align:left">                	<div id="text2_container">                    	<div id="text2_content">                        	<div id="text2_content_load">								<?php echo $text_content2; ?>                            </div>                        </div>                        <div style="display:none;" id="text2_editor">                        	Gunakan shift+enter untuk pindah baris pada paragraf yang sama.                        	<textarea class="editor2">								<?php echo $text_content2; ?>							</textarea>                            <div style="text-align:right;"><input type="button" value="Cancel" id="text2_cancel" class="button"/>&nbsp;<input type="button" value="Save" id="subt2" class="button"/></div>                        </div>                    </div>                </div>							</div>		            <div class="clear"></div>
            <div class="panel_big" id="for_slider_item">
            	<div class="panel_title">Slider Item<a href="#" class="act" id="slider_item_add">add</a></div>
                <div class="panel_content lef">
                	<div id="slider_item_container">
                        <div id="slider_item_container_load">
                            <table id="slider_table" width="100%" class="display">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
									if($si->num_rows()>0){
										foreach($si->result() as $slider){
											echo "<tr>";
											echo "<td>".$slider->slider_id."</td>";
											echo "<td>".strip_tags($slider->mytitle)."</td>";
											echo "<td><a href='#' class='detail_slider' ids='".$slider->slider_id."'>detail</a> | <a href='#' class='edit_slider' ids='".$slider->slider_id."'>edit</a> | <a href='#' class='delete_slider' ids='".$slider->slider_id."'>delete</a></td>";
											echo "</tr>";
										}
									}
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="slider_item_detail_container"><div id="left_detail"></div><div id="right_detail"></div></div>
                    <div id="slider_item_edit_container">
                        <form id="slider_item_form" autocomplete="off">
                            <table width="100%">
                                <tr><td width="120px"><label>Nama slider</label></td><td><input type="text" class="text" id="pi_title" name="pi_title" /></td></tr>
                                <tr><td><label>Link To</label></td>
                                <td>
                                <select name="pi_link" id="pi_link" class="select">
                                <?php
									echo '<option value="about-us.html">About us</option>';
									echo '<option value="download.html">Download</option>';
									echo '<option value="gallery.html">Gallery</option>';
									echo '<option value="my-skin.html">My Skin</option>';	
									echo '<option value="register.html">Register Produk</option>';	
								echo '<option value="where-to-buy.html">Where to Buy</option>';									
								?>
                                </select>
                                </td>
                                </tr>
                                <tr><td valign="top"><label>Keyword slider</label></td><td><textarea class="text area3" id="pi_keyword" name="pi_keyword"></textarea></td></tr>
                                <tr><td valign="top"><label>Description slider</label></td><td><textarea class="text area3" id="pi_description" name="pi_description"></textarea><br />karakter tersisa : <span id="c">160</span></td></tr>
                               	<tr><td valign="top"><label>Gambar slider<br />(940 x 360 pixel)</label></td><td><input type="button" class="button select" id="img_upl" value="Pilih Gambar"/><input type="hidden" id="pi_path" name="pi_path" value=""/></td></tr>
                                <tr><td colspan="2"><div id="img_prev_container" style="width:100%;"><div id="img_prev" style="padding:0px;"></div><a href="#" id="del_img">delete gambar slider</a></div></td></tr>
                                <tr><td></td><td align="right"><input type="button" value="Cancel" id="pi_cancel" class="button"/>&nbsp;<input type="submit" value="Save" id="pi_submit" class="button"/></td></tr>
                           </table>
                        </form>
                    </div>
                </div>
            </div>
            <div id="delete_container">
                <div class="panel_title" id="title_for_delete">Delete slider Item</div>
                <div id="delete_confirm">
                    Are you sure want to delete this slider item <b><span id="del_ket"></span></b>?<br />
                    <input type="button" class="button" value="Yes" id="delete_yes"/>&nbsp;<input type="button" class="button" value="No" id="delete_no" />
                </div>
            </div>
            <div id="container_up3" style="display:none;">
                <div id="header_up3" class="panel_title">Document Upload<img src="<?php echo base_url('assets/images/up.png');?>" align="absmiddle"/></div>
                <div id="content_up3">
                    <div id="ket_up3" align="center"></div>
                    <form action="<?php echo site_url('upload_big_image');?>" method="post" enctype="multipart/form-data" id="upload_big_image" autocomplete="off">
						<p id="f1_upload_process3">Loading...<br/><img src="<?php echo base_url('assets/images/loader_big.gif');?>" /><br/></p>
						<p id="f1_upload_form3" align="center">
							<label>File :  
								<input name="myfile" id="filedoc3" type="file" size="30" />								<input type="hidden" value="9" name="id_page"/>
							</label>
							<label>
								<input type="button" id="cancel3" class="sbtn3" value="Cancel" /><input type="submit" name="submitBtn" class="sbtn3" value="Save" />
							</label>
						</p>
						<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
					 </form>
                 </div>
                 <div id="footer_up"></div>
            </div>
        </div>
<?php
	$this->load->view('footer_view');
?>