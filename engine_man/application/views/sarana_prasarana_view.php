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
<script type="text/javascript" src="<?php echo base_url('assets/scripts/sarana_prasarana.js');?>"></script>
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
        	<div class="panel_title">Sarana Prasarana</div>
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
            <div class="panel_big" id="for_sarana_prasarana_item">
            	<div class="panel_title">Sarana Prasarana<a href="#" class="act" id="sarana_prasarana_item_add">add</a></div>
                <div class="panel_content lef">
                	<div id="sarana_prasarana_item_container">
                        <div id="sarana_prasarana_item_container_load">
                            <table id="sarana_prasarana_table" width="100%" class="display">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th align="center">Jurusan</th>
                                        <th align="center">Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
									if($jt->num_rows()>0){
										foreach($jt->result() as $sarana_prasarana){
											echo "<tr>";
											echo "<td>".$sarana_prasarana->id_sarana_prasarana."</td>";
											echo "<td>".$sarana_prasarana->nama."</td>";
											echo "<td>".$sarana_prasarana->nama_jurusan."</td>";
											echo "<td align='center'>".$sarana_prasarana->jumlah."</td>";
											echo "<td><a href='#' class='detail_sarana_prasarana' ids='".$sarana_prasarana->id_sarana_prasarana."'>detail</a> | <a href='#' class='edit_sarana_prasarana' ids='".$sarana_prasarana->id_sarana_prasarana."'>edit</a> | <a href='#' class='delete_sarana_prasarana' ids='".$sarana_prasarana->id_sarana_prasarana."'>delete</a></td>";
											echo "</tr>";
										}
									}
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="sarana_prasarana_item_detail_container"><div id="left_detail"></div><div id="right_detail"></div></div>
                    <div id="sarana_prasarana_item_edit_container">
                        <form id="sarana_prasarana_item_form" autocomplete="off">
                            <table width="100%">
                                <tr><td width="120px"><label>Nama</label></td><td><input type="text" class="text" id="pi_name" name="pi_name" /></td></tr>
								<tr><td><label>Deskripsi</label></td><td><textarea class="text area" id="pi_desc" name="pi_desc"></textarea></td></tr>
								<tr><td><label>Jurusan</label></td><td><select name="pi_jurusan" id="pi_jurusan"><?php if($jr->num_rows() > 0){foreach($jr->result() as $data){echo '<option value="'.$data->id_jurusan.'">'.$data->nama_jurusan.'</option>';}}else{echo '<option value="-">Empty</option>';}?><option value="0">Tanpa Jurusan</option></select></td></tr>
								<tr><td><label>Jumlah</label></td><td><input maxlength="4" type="text" class="text" id="pi_jumlah" name="pi_jumlah" /></td></tr>
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
                    <form action="<?php echo site_url('upload_sarana_prasarana');?>" method="post" enctype="multipart/form-data" id="upload_sarana_prasarana" autocomplete="off">
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
				<div class="panel_title" id="title_for_delete">Delete Sarana Prasarana</div>
				<div id="delete_confirm">
					Are you sure want to delete <span id="del_item">this sarana prasarana </span> <b><span id="del_ket"></span></b>?<br />
					<input type="button" class="button" value="Yes" id="delete_yes"/>&nbsp;<input type="button" class="button" value="No" id="delete_no" />
				</div>
			</div>
        </div>
<?php
	$this->load->view('footer_view');
?>