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
<script type="text/javascript" src="<?php echo base_url('assets/scripts/bulan.js');?>"></script>
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
        	<div class="panel_title">Bulan</div>
            <div class="panel_small min" id="for_title">
                <div class="panel_title">Title<a href="#" class="act" id="title_edit"><!-- edit --></a></div>
            	<div class="panel_content">
                    <div id="title_container">
                    	<div id="title_container_load">
                    		<h1><?php echo $title;?></h1>
                        </div>
                    </div>
                    <div id="title_edit_container">
                        <form id="title_form" autocomplete="off">
                            <input type="text" name="title" id="title" class="text" value="<?php echo $title;?>"/>
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
			
            <div class="clear"></div>
            <div class="panel_big" id="for_bulan_item">
            	<div class="panel_title">Bulan Item<a href="#" class="act" id="bulan_item_add">add</a></div>
                <div class="panel_content lef">
                	<div id="bulan_item_container">
                        <div id="bulan_item_container_load">
                            <table id="bulan_table" width="100%" class="display">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
									if($bl->num_rows()>0){
										foreach($bl->result() as $bulan){
											echo "<tr>";
											echo "<td>".$bulan->id_bulan."</td>";
											echo "<td>".$bulan->bulan."</td>";
											echo "<td>".$bulan->tahun."</td>";
											echo "<td><a href='#' class='edit_bulan' ids='".$bulan->id_bulan."'>edit</a> | <a href='#' class='delete_bulan' ids='".$bulan->id_bulan."'>delete</a></td>";
											echo "</tr>";
										}
									}
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="bulan_item_detail_container"><div id="left_detail"></div><div id="right_detail"></div></div>
                    <div id="bulan_item_edit_container">
                        <form id="bulan_item_form" autocomplete="off">
                            <table width="100%">
                                <tr><td width="120px"><label>Nama bulan</label></td><td>
									<select name="pi_nama_bulan" id="pi_nama_bulan">
										<option value="Januari">Januari</option>
										<option value="Februari">Februari</option>
										<option value="Maret">Maret</option>
										<option value="April">April</option>
										<option value="Mei">Mei</option>
										<option value="Juni">Juni</option>
										<option value="Juli">Juli</option>
										<option value="Agustus">Agustus</option>
										<option value="September">September</option>
										<option value="Oktober">Oktober</option>
										<option value="November">November</option>
										<option value="Desember">Desember</option>
									</select>
									<!--<input type="text" class="text" id="pi_nama_bulan" name="pi_nama_bulan" />-->
								</td></tr>
                                <tr><td width="120px"><label>Tahun</label></td><td><input type="text" class="text" id="pi_tahun" name="pi_tahun" /></td></tr>
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
				<div class="panel_title" id="title_for_delete">Delete Bulan</div>
				<div id="delete_confirm">
					Are you sure want to delete <span id="del_item">this data bulan</span> <b><span id="del_ket"></span></b>?<br />
					<input type="button" class="button" value="Yes" id="delete_yes"/>&nbsp;<input type="button" class="button" value="No" id="delete_no" />
				</div>
			</div>
        </div>
<?php
	$this->load->view('footer_view');
?>