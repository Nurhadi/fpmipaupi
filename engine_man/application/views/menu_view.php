<?php
	echo '<h1 class="head2">&nbsp;FPMIPA UPI Manager</h1>
        <div class="menu">
        	<ul class="sf-menu sf-js-enabled sf-shadow">
	          <li class="">
	         	 	<a href="'.site_url('main').'">Welcome, '.ucwords($this->session->userdata('username')).'</a>
	          </li>
	          <li class="">
	              <a href="'.site_url('profile').'">Profile Admin</a>
	          </li>
	          <li class="">
              <a class="sf-with-ul" href="#">Page<span class="sf-sub-indicator"> »</span></a>
              <ul style="display: none; visibility: hidden;">
								<li class="">
                  <a class="sf-with-ul" href="#">Profil<span class="sf-sub-indicator"> »</span></a>
									<ul style="display: none; visibility: hidden;">
										<li class="">
											<a class="sf-with-ul" href="'.site_url('sejarah').'">Sejarah</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('visi_misi').'">Visi dan Misi</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('kebijakan_mutu').'">Kebijakan Mutu</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('pimpinan').'">Pimpinan</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('struktur').'">Struktur</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('prestasi').'">Prestasi</a>
										</li>
									</ul>
                </li>
								<li class="">
                  <a class="sf-with-ul" href="#">Akademik<span class="sf-sub-indicator"> »</span></a>
									<ul style="display: none; visibility: hidden;">
										<li class="">
											<a class="sf-with-ul" href="'.site_url('kalender_akademik').'">Kalender Akademik</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('kurikulum').'">Kurikulum</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="#">Jadwal (x)</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="http://siak.upi.edu/nilai/" target="_blank">Nilai</a>
										</li>
									</ul>
                </li>
								<li class="">
                  <a class="sf-with-ul" href="#">SDM<span class="sf-sub-indicator"> »</span></a>
									<ul style="display: none; visibility: hidden;">
										<li class="">
											<a class="sf-with-ul" href="'.site_url('dosen').'">Dosen</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('tata_usaha').'">Bag. Administrasi</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('laboran_teknisi').'">Laboran / Teknisi</a>
										</li>
									</ul>
                </li>
								<li class="">
                  <a class="sf-with-ul" href="#">Mahasiswa</a>
                </li>
								<li class="">
                  <a class="sf-with-ul" href="#">Fasilitas<span class="sf-sub-indicator"> »</span></a>
									<ul style="display: none; visibility: hidden;">
										<li class="">
											<a class="sf-with-ul" href="'.site_url('laboratorium').'">Laboratorium</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('peralatan').'">Peralatan Lab</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('sarana_prasarana').'">Sarana Prasarana</a>
										</li>
									</ul>
                </li>
								<li class="">
                  <a class="sf-with-ul" href="#">Publikasi Ilmiah<span class="sf-sub-indicator"> »</span></a>
									<ul style="display: none; visibility: hidden;">
										<li class="">
											<a class="sf-with-ul" href="'.site_url('proceeding_pdf').'">Proceeding PDF</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('proceeding_detail').'">Proceeding Detail</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="http://jpmipa.fpmipa.upi.edu/" target="_blank">Jurnal MIPA</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="http://kimia.upi.edu/jstk/" target="_blank">Jurnal SAINT & Kimia</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="http://jurnal.upi.edu/ptik-ilkom" target="_blank">Jurnal PTIK-ILKOM</a>
										</li>
									</ul>
                </li>
								<li class="">
                  <a class="sf-with-ul" href="#">IKOM<span class="sf-sub-indicator"> »</span></a>
									<ul style="display: none; visibility: hidden;">
										<li class="">
											<a class="sf-with-ul" href="'.site_url('tentang_ikom').'">Tentang IKOM</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('visi_misi_ikom').'">Visi dan Misi</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('tujuan_dan_prinsip_dasar_ikom').'">Tujuan & Prinsip</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('pengurus_ikom').'">Pengurus</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('donatur_ikom').'">Donatur IKOM</a>
										</li>
									</ul>
                </li>
								<li class="">
									<a class="sf-with-ul" href="#">TCTP<span class="sf-sub-indicator"> »</span></a>
									<ul style="display: none; visibility: hidden;">
										<li class="">
											<a class="sf-with-ul" href="'.site_url('organizing_comittee').'">Organizing Committee</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('participant').'">Participant</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('report_activity').'">Report Activity</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('publication').'">Publication</a>
										</li>
										<li class="">
											<a class="sf-with-ul" href="'.site_url('research_project').'">Research Project</a>
										</li>
									</ul>
								</li>
              </ul>
          	</li>
						<li class="">
              <a href="'.site_url('berita').'">Berita</a>
          	</li>
						<li class="">
              <a href="'.site_url('slider').'">Slider</a>
          	</li>
						<li class="">
              <a href="'.site_url('meta-tag').'">Meta Tag</a>
          	</li>
          	<li class="">
              <a href="http://fpmipa.upi.edu" target="_blank">View Front End</a>
          	</li>
          	<li class="">
              <a href="'.site_url('logout').'">Logout</a>
          	</li>	
					</ul>
        </div>';
?>