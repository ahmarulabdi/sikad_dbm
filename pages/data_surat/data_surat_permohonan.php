<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Surat Permohonan
            </div>
            
              <!-- panel table pegawai -->
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <th>Id Surat Keluar</th>

                    <th>Jenis Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Id Form Surat</th>
                </thead>
                <tbody>
                  <?php
                  // <!-- menampilkan data mysqli -->
                  include "koneksi.php";
                  $no = 0;

                    $sql ="SELECT * FROM surat_permohonan";
                    $query=mysqli_query($conn,$sql);
                  while($r=mysqli_fetch_array($query)){
                    $no++;
                    ?>
                    <tr>
                      <td><?php echo  $r['jenis_surat']; ?></td>
                      <td><?php echo  $r['tanggal_surat']; ?></td>
                      <td><?php echo  $r['Id_form_surat']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table><!-- /.table-responsive -->
            </div><!-- panel-body -->
        </div><!-- /.panel -->
    </div><!-- /.col-lg-12 -->
</div>
