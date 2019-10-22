<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pengolahan Arsip Digital
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <!-- panel table pegawai -->
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <th>Id Absen Keseluruhan</th>
                    <th>Id Absen Keseluruhan</th>
                    <th>Id Arsip</th>
                    <th>No Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Id Form Surat</th>
                    <th>Id Surat Masuk</th>
                    <th>Id Surat Keluar</th>
                </thead>
                <tbody>
                  <?php
                  // <!-- menampilkan data mysqli -->
                  include "koneksi.php";
                  $no = 0;
                    $sql ="SELECT * FROM arsip_digital";
                    $query=mysqli_query($conn,$sql);
                  while($r=mysqli_fetch_array($query)){
                    $no++;
                    ?>
                    <tr>
                      <td><?php echo  $r['id_absen_keseluruhan']; ?></td>
                      <td><?php echo  $r['id_arsip']; ?></td>
                      <td><?php echo  $r['no_surat']; ?></td>
                      <td><?php echo  $r['tanggal_surat']; ?></td>
                      <td><?php echo  $r['Id_form_surat']; ?></td>
                      <td><?php echo  $r['Id_surat_masuk']; ?></td>
                      <td><?php echo  $r['Id_surat_keluar']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table><!-- /.table-responsive -->
            </div><!-- panel-body -->
        </div><!-- /.panel -->
    </div><!-- /.col-lg-12 -->
</div>
