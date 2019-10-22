<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pengolahan Absen Setelah Istirahat
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <!-- panel table pegawai -->
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <th>Id Absen Keseluruhan</th>
                    <th>Nip</th>
                    <th>Id Absen Setelah Istirahat</th>
                    <th>Tanggal</th>
                </thead>
                <tbody>
                  <?php
                  // <!-- menampilkan data mysqli -->
                  include "koneksi.php";
                  $no = 0;

                    $sql ="SELECT * FROM absen_setelah_istirahat";
                    $query=mysqli_query($conn,$sql);
                  while($r=mysqli_fetch_array($query)){
                    $no++;
                    ?>
                    <tr>
                      <td><?php echo  $r['id_absen_keseluruhan']; ?></td>
                      <td><?php echo  $r['NIP']; ?></td>
                      <td><?php echo  $r['id_absen_setelah_istirahat']; ?></td>
                      <td><?php echo  $r['tanggal']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table><!-- /.table-responsive -->
            </div><!-- panel-body -->
        </div><!-- /.panel -->
    </div><!-- /.col-lg-12 -->
</div>
