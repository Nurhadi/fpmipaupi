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
<script type="text/javascript" src="<?php echo base_url('assets/scripts/gallery.js');?>"></script>
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
        	<div class="panel_title">Gallery</div>
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
			
			<!-- fake -->
            <div class="panel_small min" id="for_side_image">
            	<div class="panel_title"></div>
                <div class="panel_content">
                	<div id="simg_container">
                    	<div id="simg_content">
                        	<img src="<?php echo base_url('assets/images/logo.png');?>" />
                        </div>
                    </div>
                </div>
            </div>
			<!-- -->
			
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
            <div class="panel_big" id="for_gallery_item">
            	<div class="panel_title">Gallery Item<a href="#" class="act" id="gallery_item_add">add</a></div>
                <div class="panel_content lef">
                	<div id="gallery_item_container">
                        <div id="gallery_item_container_load">
                            <table id="gallery_table" width="100%" class="display">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th align="center">Date Create</th>
                                        <th align="center">Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
									if($gl->num_rows()>0){
										foreach($gl->result() as $store){
											echo "<tr>";
											echo "<td>".$store->id_gallery."</td>";
											echo "<td>".$store->title."</td>";
											echo "<td align='center'>".date('d-M-Y',strtotime($store->date_create))."</td>";
											echo "<td align='center'>".UCFirst($store->status)."</td>";
											echo "<td><a href='#' class='detail_gallery' ids='".$store->id_gallery."'>detail</a> | <a href='#' class='edit_gallery' ids='".$store->id_gallery."'>edit</a> | <a href='#' class='delete_gallery' ids='".$store->id_gallery."'>delete</a></td>";
											echo "</tr>";
										}
									}
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="gallery_item_detail_container"><div id="left_detail"></div><div id="right_detail"></div></div>
                    <div id="gallery_item_edit_container">
                        <form id="gallery_item_form" autocomplete="off">
                            <table width="100%">
                                <tr><td width="120px"><label>Title</label></td><td><input type="text" class="text" id="pi_title" name="pi_title" /></td></tr>
                                
								<tr><td valign="top"><label>Image 1<br />(800 x 598 pixel)</label></td><td><input type="button" class="button select" id="img_upl1" value="Pilih Gambar"/><input type="hidden" id="pi_path1" name="pi_path" value=""/></td></tr>
								<tr><td colspan="2"><div id="img_prev_container1" style="width:100%;"><div id="img_prev1" style="padding:0px;"></div><a href="#" id="del_img1">delete gambar</a></div></td></tr>

                                <tr><td valign="top"><label>Image 2<br />(800 x 598 pixel)</label></td><td><input type="button" class="button select" id="img_upl2" value="Pilih Gambar"/><input type="hidden" id="pi_path2" name="pi_path" value=""/></td></tr>
								<tr><td colspan="2"><div id="img_prev_container2" style="width:100%;"><div id="img_prev2" style="padding:0px;"></div><a href="#" id="del_img2">delete gambar</a></div></td></tr>
                                
								<tr><td valign="top"><label>Image 3<br />(800 x 598 pixel)</label></td><td><input type="button" class="button select" id="img_upl3" value="Pilih Gambar"/><input type="hidden" id="pi_path3" name="pi_path" value=""/></td></tr>
                                <tr><td colspan="2"><div id="img_prev_container3" style="width:100%;"><div id="img_prev3" style="padding:0px;"></div><a href="#" id="del_img3">delete gambar</a></div></td></tr>
								
								<tr><td valign="top"><label>Image 4<br />(800 x 598 pixel)</label></td><td><input type="button" class="button select" id="img_upl4" value="Pilih Gambar"/><input type="hidden" id="pi_path4" name="pi_path" value=""/></td></tr>
                                <tr><td colspan="2"><div id="img_prev_container4" style="width:100%;"><div id="img_prev4" style="padding:0px;"></div><a href="#" id="del_img4">delete gambar</a></div></td></tr>
								
								<tr><td valign="top"><label>Image 5<br />(800 x 598 pixel)</label></td><td><input type="button" class="button select" id="img_upl5" value="Pilih Gambar"/><input type="hidden" id="pi_path5" name="pi_path" value=""/></td></tr>
								<tr><td colspan="2"><div id="img_prev_container5" style="width:100%;"><div id="img_prev5" style="padding:0px;"></div><a href="#" id="del_img5">delete gambar</a></div></td></tr>
								
                                <tr><td></td><td align="right"><input type="button" value="Cancel" id="pi_cancel" class="button"/>&nbsp;<input type="submit" value="Save" id="pi_submit" class="button"/></td></tr>
                           </table>
                        </form>
                    </div>
                </div>
            </div>
			
            <div id="container_up1" style="display:none;">
                <div id="header_up1" class="panel_title">Document Upload<img src="<?php echo base_url('assets/images/up.png');?>" align="absmiddle"/></div>
                <div id="content_up1">
                    <div id="ket_up1" align="center"></div>
                    <form action="<?php echo site_url('upload_gallery1');?>" method="post" enctype="multipart/form-data" id="upload_gallery1" autocomplete="off">
						<p id="f1_upload_process1">Loading...<br/><img src="<?php echo base_url('assets/images/loader_big.gif');?>" /><br/></p>
						<p id="f1_upload_form1" align="center">
							<label>File :  
								<input name="myfile" id="filedoc1" type="file" size="30" />
								<input type="hidden" value="6" name="id_page"/>
							</label>
							<label>
								<input type="button" id="cancel1" class="sbtn1" value="Cancel" /><input type="submit" name="submitBtn" class="sbtn3" value="Save" />
							</label>
						</p>
						<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
					 </form>
                </div>
                <div id="footer_up"></div>
            </div>
			 
            <div id="container_up2" style="display:none;">
                <div id="header_up2" class="panel_title">Document Upload<img src="<?php echo base_url('assets/images/up.png');?>" align="absmiddle"/></div>
                <div id="content_up2">
                    <div id="ket_up2" align="center"></div>
                    <form action="<?php echo site_url('upload_gallery2');?>" method="post" enctype="multipart/form-data" id="upload_gallery2" autocomplete="off">
						<p id="f1_upload_process2">Loading...<br/><img src="<?php echo base_url('assets/images/loader_big.gif');?>" /><br/></p>
						<p id="f1_upload_form2" align="center">
							<label>File :  
								<input name="myfile" id="filedoc2" type="file" size="30" />
								<input type="hidden" value="6" name="id_page"/>
							</label>
							<label>
								<input type="button" id="cancel2" class="sbtn2" value="Cancel" /><input type="submit" name="submitBtn" class="sbtn3" value="Save" />
							</label>
						</p>
						<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
					 </form>
                </div>
                <div id="footer_up"></div>
            </div>
			
            <div id="container_up3" style="display:none;">
                <div id="header_up3" class="panel_title">Document Upload<img src="<?php echo base_url('assets/images/up.png');?>" align="absmiddle"/></div>
                <div id="content_up3">
                    <div id="ket_up3" align="center"></div>
                    <form action="<?php echo site_url('upload_gallery3');?>" method="post" enctype="multipart/form-data" id="upload_gallery3" autocomplete="off">
						<p id="f1_upload_process3">Loading...<br/><img src="<?php echo base_url('assets/images/loader_big.gif');?>" /><br/></p>
						<p id="f1_upload_form3" align="center">
							<label>File :  
								<input name="myfile" id="filedoc3" type="file" size="30" />
								<input type="hidden" value="6" name="id_page"/>
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
			
            <div id="container_up4" style="display:none;">
                <div id="header_up4" class="panel_title">Document Upload<img src="<?php echo base_url('assets/images/up.png');?>" align="absmiddle"/></div>
                <div id="content_up4">
                    <div id="ket_up4" align="center"></div>
                    <form action="<?php echo site_url('upload_gallery4');?>" method="post" enctype="multipart/form-data" id="upload_gallery4" autocomplete="off">
						<p id="f1_upload_process4">Loading...<br/><img src="<?php echo base_url('assets/images/loader_big.gif');?>" /><br/></p>
						<p id="f1_upload_form4" align="center">
							<label>File :  
								<input name="myfile" id="filedoc4" type="file" size="30" />
								<input type="hidden" value="6" name="id_page"/>
							</label>
							<label>
								<input type="button" id="cancel4" class="sbtn4" value="Cancel" /><input type="submit" name="submitBtn" class="sbtn3" value="Save" />
							</label>
						</p>
						<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
					 </form>
                </div>
                <div id="footer_up"></div>
            </div>
			
            <div id="container_up5" style="display:none;">
                <div id="header_up5" class="panel_title">Document Upload<img src="<?php echo base_url('assets/images/up.png');?>" align="absmiddle"/></div>
                <div id="content_up5">
                    <div id="ket_up5" align="center"></div>
                    <form action="<?php echo site_url('upload_gallery5');?>" method="post" enctype="multipart/form-data" id="upload_gallery5" autocomplete="off">
						<p id="f1_upload_process5">Loading...<br/><img src="<?php echo base_url('assets/images/loader_big.gif');?>" /><br/></p>
						<p id="f1_upload_form5" align="center">
							<label>File :  
								<input name="myfile" id="filedoc5" type="file" size="30" />
								<input type="hidden" value="6" name="id_page"/>
							</label>
							<label>
								<input type="button" id="cancel5" class="sbtn5" value="Cancel" /><input type="submit" name="submitBtn" class="sbtn3" value="Save" />
							</label>
						</p>
						<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
					 </form>
                </div>
                <div id="footer_up"></div>
            </div>
			 
			<div id="delete_container">
				<div class="panel_title" id="title_for_delete">Delete Gallery</div>
				<div id="delete_confirm">
					Are you sure want to delete <span id="del_item">this gallery item</span> <b><span id="del_ket"></span></b>?<br />
					<input type="button" class="button" value="Yes" id="delete_yes"/>&nbsp;<input type="button" class="button" value="No" id="delete_no" />
				</div>
			</div>
        </div>
<?php
	$this->load->view('footer_view');
?>