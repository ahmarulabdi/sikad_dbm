<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pengolahan Surat Keluar
            </div>
              <!-- panel table pegawai -->
              <?php
                if ($hak_akses != 'kepala_dinas') {
                  ?>
                  
                <?php }
                elseif($hak_akses == 'kepala_dinas') {
               ?>
               <a href="?user=laporan_surat_keluar" target='up' class="btn btn-primary">cetak laporan</a>
               <?php
             } ?>
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <th>Id Surat Keluar</th>
                    <th>PDF</th>
                    <th>No Surat</th>
                    <th>Jenis Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Perihal</th>
                </thead>
                <tbody>
                  <?php
                  // <!-- menampilkan data mysqli -->
                  include "koneksi.php";
                  $no = 0;

                    $sql ="SELECT * FROM surat_keluar";
                    $query=mysqli_query($conn,$sql);
                  while($r=mysqli_fetch_array($query)){
                    $no++;
                    ?>
                    <tr>
                      <td><?php echo  $r['id_surat_keluar']; ?></td>
                      <td><?php echo  $r['pdf']; ?></td>
                      <td><?php echo  $r['no_surat']; ?></td>
                      <td><?php echo  $r['jenis_surat']; ?></td>
                      <td><?php echo  $r['tanggal_surat']; ?></td>
                      <td><?php echo  $r['perihal']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table><!-- /.table-responsive -->
            </div><!-- panel-body -->
        </div><!-- /.panel -->
    </div><!-- /.col-lg-12 -->
</div>
