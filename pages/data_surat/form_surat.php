<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pengolahan Form Surat
            </div>
            <div class="btn-group">
              <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="" >Buat Surat<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="?user=surat_balasan" >Surat Balasan</a></li>
                <li><a href="?user=surat_kenaikan_gaji" >Surat Kenaikan Gaji Berkala</a></li>
                <li><a href="?user=surat_perintah_tugas" >Surat Perintah Tugas</a></li>
              </ul>
            </div>
              <!-- panel table pegawai -->
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <th>Id Form Surat</th>
                    <th>Nama Surat PDF</th>
                    <th>Perihal link</th>
                </thead>
                <tbody>
                  <?php
                  // <!-- menampilkan data mysqli -->
                  include "koneksi.php";
                  $no = 0;

                    $sql ="SELECT * FROM form_surat";
                    $query=mysqli_query($conn,$sql);
                  while($r=mysqli_fetch_array($query)){
                    $no++;
                    ?>
                    <tr>
                      <td><?php echo  $r['id_form_surat']; ?></td>
                      <td>
                        <a target="up" href="<?php echo  $r['nama_surat']; ?>"><?php echo  $r['nama_surat']; ?></a>

                      </td>
                      <td><?php echo  $r['perihal_surat']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table><!-- /.table-responsive -->
            </div><!-- panel-body -->
        </div><!-- /.panel -->
    </div><!-- /.col-lg-12 -->
</div>
