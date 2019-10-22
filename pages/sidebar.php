<aside>
    <div id="sidebar"  class="nav-collapse ">
      <?php
      if (isset($_SESSION['SES_LOGIN'])):
        include 'routing/user_config.php';
        ?>
        <!-- hak akses administrator -->
        <?php if ($hak_akses == 'administrator'): ?>
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li style="background-color: #1d3ba6;">
              <a>
                  <span class="profile-ava">
                    <img alt="" src="img/avatar/<?php echo $r['gambar']?>" width='150' height='150'>
                  </span>
                  <?php
                    $modal=mysqli_query($conn,"SELECT * FROM pengguna");
                    $r=mysqli_fetch_array($modal);
                    $nip = $r['NIP'];
                    $getnama=mysqli_query($conn,"SELECT *FROM pegawai where NIP = '$nip'");
                    $r2=mysqli_fetch_array($getnama);
                    $nama = $r2['Nama'];
                   ?>
                  <h3><?php echo $nama;?></h3>
                  <h3>Log As : </h3>
                  <span><?php echo $hak_akses;?></span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                <span>Master</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="?user=pegawai_aktif">Pegawai Aktif</a></li>
                <li><a class="" href="?user=pegawai_non_aktif">Pegawai Non Aktif</a></li>
                <li><a class="" href="?user=pengguna">Pengguna</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_desktop"></i>
                <span>Absensi</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="?user=absensi_absen_apel">Absen Apel</a></li>
                <li><a class="" href="?user=absensi_absen_istirahat">Absen Istirahat</a></li>
                <li><a class="" href="?user=absensi_absen_keseluruhan">Absen Keseluruhan</a></li>
                <li><a class="" href="?user=absensi_absen_pagi">Absen Pagi</a></li>
                <li><a class="" href="?user=absensi_absen_pelatihan">Absen Pelatihan</a></li>
                <li><a class="" href="?user=absensi_absen_pulang">Absen Pulang</a></li>
                <li><a class="" href="?user=absensi_absen_setelah_istirahat">Absen Setelah Istirahat</a></li>
                <li><a class="" href="?user=absensi_absen_tugas_apel">Absen Tugas Apel</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_table"></i>
                <span>Arsip Digital</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="?user=surat_masuk">Surat Masuk</a></li>
                <li><a class="" href="?user=surat_keluar">Surat Keluar</a></li>
                <li><a class="" href="?user=form_surat">Form Surat</a></li>
              </ul>
            </li>
          </ul>
          <!-- sidebar menu end-->
        <?php endif; ?>
        <?php if ($hak_akses == 'pegawai'): ?>
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li style="background-color: #7e1da6;">
              <a class="">
                  <img alt="" src="img/avatar/<?php echo $r['gambar']?>" width='150' height='150'>
                  <span><?php echo $nama;?></span>
                  <h3>Log As : </h3>

                  <span><?php echo $hak_akses;?></span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_desktop"></i>
                <span>Absensi</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="?user=absensi_absen_apel">Absen Apel</a></li>
                <li><a class="" href="?user=absensi_absen_istirahat">Absen Istirahat</a></li>
                <li><a class="" href="?user=absensi_absen_keseluruhan">Absen Keseluruhan</a></li>
                <li><a class="" href="?user=absensi_absen_pagi">Absen Pagi</a></li>
                <li><a class="" href="?user=absensi_absen_pelatihan">Absen Pelatihan</a></li>
                <li><a class="" href="?user=absensi_absen_pulang">Absen Pulang</a></li>
                <li><a class="" href="?user=absensi_absen_setelah_istirahat">Absen Setelah Istirahat</a></li>
                <li><a class="" href="?user=absensi_absen_tugas_apel">Absen Tugas Apel</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_table"></i>
                <span>Form Surat</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="?user=surat_permohonan">Surat Permohonan</a></li>
                <li><a class="" href="?user=surat_pernyataan">Surat Pernyataan</a></li>
                <li><a class="" href="?user=surat_keterangan">Surat Keterangan</a></li>
                <li><a class="" href="?user=kirim_surat">Kirim Surat</a></li>
              </ul>
            </li>



          </ul>
          <!-- sidebar menu end-->
        <?php endif; ?>
        <?php if ($hak_akses == 'kepala_dinas'): ?>
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li style="background-color: #d50707;">
              <a class="">
                  <img alt="" src="img/avatar/<?php echo $r['gambar']?>" width='150' height='150'>
                  <span><?php echo $nama;?></span>
                  <h3>Log As : </h3>
                  <span>Kepala Dinas</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_table"></i>
                <span>Laporan</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="?user=pegawai">Laporan Pegawai</a></li>
                <li><a class="" href="?user=absensi_keseluruhan">Absensi Keseluruhan</a></li>
                <li><a class="" href="?user=surat_masuk">Surat Masuk</a></li>
                <li><a class="" href="?user=surat_keluar">Surat Keluar</a></li>
              </ul>
            </li>

          </ul>
          <!-- sidebar menu end-->
        <?php endif; ?>


      <?php else: ?>
        <ul class="sidebar-menu">
          <li class ="sub-menu" style="background-color: #1d3ba6;"><a href="?user=login">Login</a></li>
        </ul>
      <?php endif; ?>
    </div>
</aside>
