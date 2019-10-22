<section class="row">
    <div class="col-lg-10">
        <div class="panel">
            <header class="panel-heading">
                Surat Perintah Tugas
            </header>
            <div class="panel-body">
              <?php
              //Format Tanggal
              $tanggal = date ('j');
              $array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
              $bulan = $array_bulan[date('n')];
              $tahun = date('Y');
              $waktu = ',' . $tanggal .' '. $bulan .' '. $tahun;
              ?>
              <form class="" action="?user=preview_surat_perintah_tugas" target="up" method="post">
                <!-- HTML Codes by Quackit.com -->

                      <style>
                      div.container {
                      background-color: #ffffff;
                      }
                      div.container p {
                      text-align: justify;
                      font-family: Times;
                      font-size: 14px;
                      font-style: normal;
                      font-weight: normal;
                      text-decoration: none;
                      text-transform: none;
                      color: #000000;
                      background-color: #ffffff;
                      }
                      </style>

                      <div class="container">
                      <!-- <p>SURAT PERINTAH TUGAS</p>
                      <p>Nomor : ________/SPT/2016</p>
                      <p></p>
                      <p></p>
                      <p>Dasar	:	Surat Kepala Badan Kepegawaian, Pendidikan dan Pelatihan Daerah Provinsi Riau Nomor : 800/BKP2D/5.1/XI/2016/3779 Tanggal 28 November 2016 Perihal Permintaan Peserta, dengan ini Kepala Dinas Bina Marga Provinsi Riau :</p>
                      <p></p>
                      <p>MEMERINTAHKAN</p>
                      <p></p>
                      <p>Kepada	:	</p>
                      <p>1.	Nama	:	RICKY SYAFRIZAL</p>
                      <p>NIP	:	19880717 201503 1 002</p>
                      <p>Pangkat / Gol.	:	Pengatur Muda (II/a)</p>
                      <p>Jabatan	:	Fungsional Umum pada Sekretariat</p>
                      <p></p>
                      <p>2.	Nama	:	IZAN AKRAMUZI, S.Kom</p>
                      <p>Jabatan	:	Tenaga Ahli Bidang IT</p>
                      <p></p>
                      <p>Untuk	:	Mengikuti kegiatan Bimbingan Teknis Pengisisan dan Penyempurnaan Database serta Percepatan Pemanfaatan Sistem Manajemen Aparatur Responsif dan Terpadu (SMART) bagi SKPD dilingkungan Pemerintah Provinsi Riau, pada :</p>
                      <p></p>
                      <p>Hari / Tanggal	:	Kamis, 1 Desember 2016</p>
                      <p>Waktu	:	08.00 WIB s.d Selesai</p>
                      <p>Tempat	:	Hotel Premiere, Jl. Jend. Sudirman – Pekanbaru</p>
                      <p></p>
                      <p></p>
                      <p>Demikian perintah tugas ini untuk dilaksanakan dengan penuh tanggung jawab dan menyampaikan laporan setelah tugas selesai.</p>
                      <p></p>
                      <p></p>
                      <p></p>
                      <p>	Ditetapkan di	:	P E K A N B A R U</p>
                      <p>	Pada Tanggal	:	     November 2016</p>
                      <p>	</p>
                      <p>	Plt. KEPALA DINAS BINA MARGA</p>
                      <p>	PROVINSI RIAU</p>
                      <p></p>
                      <p></p>
                      <p></p>
                      <p></p>
                      <p>	CHAIRUSSYAH, ST. MT</p>
                      <p>	Pembina Tk.I</p>
                      <p>	NIP. 19630103 198803 1 006</p>
                      <p></p> -->

                      </div>
                <div class="form-group" style="padding-top: 5px; padding-left: 500px;">
                  <label for="">tempat dan tanggal pembuatan surat</label>
                  <input type="text" name="tempat_pembuatan" class="form-control" placeholder="Tempat Pembuatan" />
                  <p name="tanggal_pembuatan" class="form-control-static"><?php echo $waktu; ?></p>

                </div>
                <div class="form-group" style="padding-bottom: 5px;">
                </div>
                <div class="form-group" style="padding-bottom: 5px;">
                  <label for="">Nomor Lampiran Dan Perihal</label>
                  <input type="text" name="nomor_surat" value="" class="form-control" placeholder="Nomor Surat" />
                  <input type="text" name="lampiran_surat" value="" class="form-control" placeholder="Lampiran Surat" />
                  <input type="text" name="perihal_surat" value="" class="form-control" placeholder="Perihal Surat" />
                </div>
                <div class="form-group" style="padding-bottom: 5px;">
                  <label for="">Nama Penerima</label>
                  <input type="text" name="tujuan" value="" class="form-control" placeholder="Tujuan" />
                  <input type="text" name="di" value="" class="form-control" placeholder="di - " />
                </div>
                <div class="form-group" style="padding-bottom: 5px;">
                  <input type="text" name="isi_surat" value="" class="form-control" placeholder="Isi Surat" />
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6">Isi Surat</label>
                    <div class="col-sm-10">
                      <label for="">Pembuka Surat</label>
                      <textarea class="form-control" name="pembuka_surat" rows="6" placeholder="Pembuka Surat"></textarea>
                      <label for="">Isi Surat</label>
                      <textarea class="form-control ckeditor" name="isi_surat" rows="6" placeholder="Isi Surat"></textarea>
                      <label for="">Penutup Surat</label>
                      <textarea class="form-control" name="Penutup_surat" rows="6" placeholder="Penutup"></textarea>
                    </div>
                </div>
                <div class="form-group" style="padding-top: 5px; padding-left: 500px;">
                  <label style="margin-top : 100px;" class="control-label col-sm-6">Keterangan Pengirim ,Nama Pengirim dan NIP</label>
                  <input type="text" name="keterangan_pengirim" value="" class="form-control" placeholder="Keterangan Pengirim" />
                  <input style="margin-top : 100px;" type="text" name="penanggung_jawab" value="" class="form-control" placeholder="Penanggung Jawab" />
                  <input type="text" name="nip" value="" class="form-control" placeholder="NIP" />
                </div>
                <div class="form-group" style="padding-top: 5px; padding-right: 500px;">
                  <label for="">Tembusan</label>
                  <textarea class="form-control" name="tembusan" rows="6" placeholder="Tembusan"></textarea>
                </div>



                 <div class="col-sm-6">
                   <input type="submit" class='btn btn-info' name="preview" value="preview surat">
                 </div>
              </form>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>
