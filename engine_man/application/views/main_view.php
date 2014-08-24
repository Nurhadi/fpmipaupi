<?php
	$this->load->view('header_view');
?>
<link rel="stylesheet" href="<?php echo base_url('assets/styles/dataTable.css');?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/main.js');?>"></script>
</head>
<body>
<div id="container">
    <div id="content-big">
        <?php
			$this->load->view('menu_view');
		?>
        <div class="clear"></div>
        <div id="main-content">
        	<div class="panel_title">Dashboard</div>
            <div class="panel">
            	<div class="panel_title">Pengunjung</div>
                <div class="panel_content lef">
                	<?php
						echo '<b>Pengunjung Online :</b><br/>';
						if($gov->num_rows()>0){
							foreach($gov->result() as $row)
							{
								echo '
								<div class="geoRow">
									<div class="flag"><img src="'.base_url('assets/images/countryflag/'.strtolower($row->countryCode).'.gif').'" width="16" height="11" /></div>
									<div class="country" title="'.htmlspecialchars($row->country).'">'.$row->country.'</div>
									<div class="people">'.$row->total.'</div>
								</div><div class="clear"></div>
								';
							}	
						}else{
							echo 'tidak ada pengunjung online<br/>';
						}
						echo '<br/><b>10 Pengunjung Terakhir :</b><br/>';
						if($gov->num_rows()>0){
							foreach($gov->result() as $row2)
							{
								echo '
								<div class="geoRow">
									<div class="flag"><img src="'.base_url('assets/images/countryflag/'.strtolower($row2->countryCode).'.gif').'" width="16" height="11" /></div>
									<div class="country" title="'.htmlspecialchars($row2->country).'">'.$row2->country.'</div>
									<div class="country" title="'.htmlspecialchars($row2->stringip).'">'.$row2->stringip.'</div>
								</div><div class="clear"></div>
								';
							}
						}
						if($goc->num_rows()>0){
							foreach($goc->result() as $row3){
								echo '	
									<div class="geoRow">
										<div class="flag"><img src="'.base_url('assets/images/countryflag/'.strtolower($row3->countrycode).'.gif').'" width="16" height="11" /></div>
										<div class="country" title="'.htmlspecialchars($row3->country).'">'.$row3->country.'</div>
										<div class="country" title="'.htmlspecialchars($row3->stringip).'">'.$row3->stringip.'</div>
									</div><div class="clear"></div>
								';		
							}
						}
						
						if($jum_all==0){
							echo 'tidak ada data pengunjung<br/>';	
						}
						echo '<br/><b>Total Pengunjung : '.$jum_all.'</b><br/>';
					?>
                </div>
            </div>
            <div class="panel" style="width:600px;padding:0;border:none">
            	<div class="panel" style="width:100%;margin:0">
				<div class="panel_title">New Inbox Contact Us</div>
            	<div class="panel_content">
				<table id="inbox" width="100%" class="display">
                	<thead>
                        <tr>
                            <th>ID</th>
                			<th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
							if($gu->num_rows()>0){
								foreach($gu->result() as $unread){
									echo "<tr>";
									echo "<td>".$unread->inbox_id."</td>";
									echo "<td>".$unread->nama."</td>";
									echo "<td>".$unread->email."</td>";
									$namaBulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
									$part_tgl=explode(' ',$unread->tanggal);
									$part_tgl_part=explode('-',$part_tgl[0]);
									$waktu=$part_tgl[1];
									$tanggal=$part_tgl_part[2]." ".$namaBulan[$part_tgl_part[1]-1]." ".$part_tgl_part[0];
									echo "<td>".$tanggal." ".$waktu."</td>";
									echo "<td align='center'><a href='#' class='detail' ii='".$unread->inbox_id."'>detail</a></td>";
									echo "</tr>";
								}
							}/* 
							else{
								echo "<tr><td></td><td></td><td>Tidak ada pesan di inbox</td><td></td><td></td></tr>";
							} */
                        ?>
                    </tbody>
                </table>
				</div>
				</div>
            </div>
        </div>
<?php
	$this->load->view('footer_view');
?>