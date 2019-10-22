<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pengolahan Absen Keseluruhan
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <!-- panel table pegawai -->
              <?php
                if ($hak_akses != 'kepala_dinas') {
                  ?>
                  <p><a href="#" class="btn btn-primary" data-target="#ModalAdd" data-toggle="modal">Tambah Pegawai</a></p>
                <?php }
                elseif($hak_akses == 'kepala_dinas') {
               ?>
               <a href="?user=laporan_absensi_seluruh" target='up' class="btn btn-primary">cetak laporan</a>
               <?php
             } ?>
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <th>Id Absen Keseluruhan</th>
                    <th>Id Absen Apel</th>
                    <th>Id Absen Pagi</th>
                    <th>Id Absen Istirahat</th>
                    <th>Id Absen Setelah Istirahat</th>
                    <th>Id Absen Pulang</th>
                    <th>Id Absen Tugas Apel</th>
                    <th>Id Absen Pelatihan</th>
                </thead>
                <tbody>
                  <?php
                  // <!-- menampilkan data mysqli -->
                  include "koneksi.php";
                  $no = 0;

                    $sql ="SELECT * FROM absen_keseluruhan";
                    $query=mysqli_query($conn,$sql);
                  while($r=mysqli_fetch_array($query)){
                    $no++;
                    ?>
                    <tr>
                      <td><?php echo  $r['id_absen_keseluruhan']; ?></td>
                      <td><?php echo  $r['id_absen_apel']; ?></td>
                      <td><?php echo  $r['Id_absen_pagi']; ?></td>
                      <td><?php echo  $r['Id_absen_istirahat']; ?></td>
                      <td><?php echo  $r['Id_absen_setelah_istirahat']; ?></td>
                      <td><?php echo  $r['Id_absen_pulang']; ?></td>
                      <td><?php echo  $r['Id_absen_tugas_apel']; ?></td>
                      <td><?php echo  $r['Id_absen_pelatihan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table><!-- /.table-responsive -->
            </div><!-- panel-body -->
        </div><!-- /.panel -->
    </div><!-- /.col-lg-12 -->
</div>
