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
        	<div class="panel_title">Home</div>
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

            <div class="panel_small min" id="for_address">
                <div class="panel_title">Address<a href="#" class="act" id="address_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="address_container">
                    	<div id="address_container_load">
                    		<?php echo $address;?>
                   		</div>
                    </div>
                    <div id="address_edit_container">
                        <form id="address_form" autocomplete="off">
                            <textarea name="address" id="address" class="text area"><?php echo $address;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="address_cancel" />
                        </form>
                    </div>
                </div>
            </div>
			
			<!-- fake
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
			-->

            <div class="panel_small min" id="for_yahoo1">
                <div class="panel_title">Yahoo Messenger 1<a href="#" class="act" id="yahoo1_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="yahoo1_container">
                    	<div id="yahoo1_container_load">
                    		<?php echo $yahoo1;?>
                   		</div>
                    </div>
                    <div id="yahoo1_edit_container">
                        <form id="yahoo1_form" autocomplete="off">
                            <textarea name="yahoo1" id="yahoo1" class="text area"><?php echo $yahoo1;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="yahoo1_cancel" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel_small min" id="for_yahoo2">
                <div class="panel_title">Yahoo Messenger 2<a href="#" class="act" id="yahoo2_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="yahoo2_container">
                    	<div id="yahoo2_container_load">
                    		<?php echo $yahoo2;?>
                   		</div>
                    </div>
                    <div id="yahoo2_edit_container">
                        <form id="yahoo2_form" autocomplete="off">
                            <textarea name="yahoo2" id="yahoo2" class="text area"><?php echo $yahoo2;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="yahoo2_cancel" />
                        </form>
                    </div>
                </div>
            </div>
			
            <div class="panel_small min" id="for_facebook">
                <div class="panel_title">Facebook<a href="#" class="act" id="facebook_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="facebook_container">
                    	<div id="facebook_container_load">
                    		<?php echo $facebook;?>
                   		</div>
                    </div>
                    <div id="facebook_edit_container">
                        <form id="facebook_form" autocomplete="off">
                            <textarea name="facebook" id="facebook" class="text area"><?php echo $facebook;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="facebook_cancel" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel_small min" id="for_twitter">
                <div class="panel_title">Twitter<a href="#" class="act" id="twitter_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="twitter_container">
                    	<div id="twitter_container_load">
                    		<?php echo $twitter;?>
                   		</div>
                    </div>
                    <div id="twitter_edit_container">
                        <form id="twitter_form" autocomplete="off">
                            <textarea name="twitter" id="twitter" class="text area"><?php echo $twitter;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="twitter_cancel" />
                        </form>
                    </div>
                </div>
            </div>
			
            <div class="panel_small min" id="for_blackberry">
                <div class="panel_title">PIN BlackBerry<a href="#" class="act" id="blackberry_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="blackberry_container">
                    	<div id="blackberry_container_load">
                    		<?php echo $blackberry;?>
                   		</div>
                    </div>
                    <div id="blackberry_edit_container">
                        <form id="blackberry_form" autocomplete="off">
                            <textarea name="blackberry" id="blackberry" class="text area"><?php echo $blackberry;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="blackberry_cancel" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel_small min" id="for_gmail">
                <div class="panel_title">Gmail<a href="#" class="act" id="gmail_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="gmail_container">
                    	<div id="gmail_container_load">
                    		<?php echo $gmail;?>
                   		</div>
                    </div>
                    <div id="gmail_edit_container">
                        <form id="gmail_form" autocomplete="off">
                            <textarea name="gmail" id="gmail" class="text area"><?php echo $gmail;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="gmail_cancel" />
                        </form>
                    </div>
                </div>
            </div>
			
            <div class="panel_small min" id="for_whatsapp">
                <div class="panel_title">Whatsapp<a href="#" class="act" id="whatsapp_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="whatsapp_container">
                    	<div id="whatsapp_container_load">
                    		<?php echo $whatsapp;?>
                   		</div>
                    </div>
                    <div id="whatsapp_edit_container">
                        <form id="whatsapp_form" autocomplete="off">
                            <textarea name="whatsapp" id="whatsapp" class="text area"><?php echo $whatsapp;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="whatsapp_cancel" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel_small min" id="for_handphone">
                <div class="panel_title">No Handphone<a href="#" class="act" id="handphone_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="handphone_container">
                    	<div id="handphone_container_load">
                    		<?php echo $handphone;?>
                   		</div>
                    </div>
                    <div id="handphone_edit_container">
                        <form id="handphone_form" autocomplete="off">
                            <textarea name="handphone" id="handphone" class="text area"><?php echo $handphone;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="handphone_cancel" />
                        </form>
                    </div>
                </div>
            </div>
			
            <div class="clear"></div>
            <div class="panel_big min" id="for_teks">
                <div class="panel_title">Teks Berjalan<a href="#" class="act" id="teks_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="teks_container">
                    	<div id="teks_container_load">
                    		<?php echo $teks;?>
                   		</div>
                    </div>
                    <div id="teks_edit_container">
                        <form id="teks_form" autocomplete="off">
                            <textarea name="teks" id="teks" class="text area" style="width:740px;"><?php echo $teks;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="handphone_cancel" />
                        </form>
                    </div>
                </div>
            </div>
			
            <div class="clear"></div>
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
			
            <div id="container_up3" style="display:none;">
                <div id="header_up3" class="panel_title">Document Upload<img src="<?php echo base_url('assets/images/up.png');?>" align="absmiddle"/></div>
                <div id="content_up3">
                    <div id="ket_up3" align="center"></div>
                    <form action="<?php echo site_url('upload_slider');?>" method="post" enctype="multipart/form-data" id="upload_slider" autocomplete="off">
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
			 
			<div id="delete_container">
				<div class="panel_title" id="title_for_delete">Delete Slider</div>
				<div id="delete_confirm">
					Are you sure want to delete <span id="del_item">this slider</span> <b><span id="del_ket"></span></b>?<br />
					<input type="button" class="button" value="Yes" id="delete_yes"/>&nbsp;<input type="button" class="button" value="No" id="delete_no" />
				</div>
			</div>
        </div>
<?php
	$this->load->view('footer_view');
?>