<section class="row">
    <div class="col-lg-10">
        <div class="panel">
            <header class="panel-heading">
                Surat Pernyataan
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
              <form class="" action="?user=preview_surat_pernyataan" target="up" method="post">
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
