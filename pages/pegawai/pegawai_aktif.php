<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
          <?php
          include 'routing/user_config.php';
           ?>
            <?php if ($hak_akses == 'kepala_dinas'): ?>
              <div class="panel-heading">
              Laporan Data Pegawai
              </div>
            <?php else: ?>
              <div class="panel-heading">
              Pengolahan Data Pegawai
              </div>
            <?php endif; ?>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <?php
                if ($hak_akses != 'kepala_dinas') {
                  ?>
                  <p><a href="#" class="btn btn-primary" data-target="#ModalAdd" data-toggle="modal">Tambah Pegawai</a></p>
                <?php }
                elseif($hak_akses == 'kepala_dinas') {
               ?>
               <a href="?user=cetaklaporan" target='up' class="btn btn-primary">cetak laporan</a>
               <?php
             } ?>
              <!-- <select class="form-control m-bot15" name="golongan">
                      <option <?php  $set_golongan = 'semua';?>selected >tampil semua</option>
                      <option <?php  $set_golongan = 'IV/e'; ?> >IV/e	: <label>Pembina Utama</label></option>
                      <option <?php  $set_golongan = 'IV/d'; ?> >IV/d	: <label>Pembina Utama Madya</label></option>
                      <option <?php  $set_golongan = 'IV/c'; ?> >IV/c	: <label>Pembina Utama Muda</label></option>
                      <option <?php  $set_golongan = 'IV/b'; ?> >IV/b	: <label>Pembina Tk.I</label></option>
                      <option <?php  $set_golongan = 'IV/a'; ?> >IV/a	: <label>Pembina</label></option>
                      <option <?php  $set_golongan = 'III/d'; ?> >III/d	: <label>Penata Tk.I</label></option>
                      <option <?php  $set_golongan = 'III/c'; ?> >III/c	: <label>Penata</label></option>
                      <option <?php  $set_golongan = 'III/b'; ?> >III/b	: <label>Penata Muda Tk.I</label></option>
                      <option <?php  $set_golongan = 'III/a'; ?> >III/a	: <label>Penata Muda</label></option>
                      <option <?php  $set_golongan = 'II/d'; ?> >II/d	: <label>Pengatur Tk.I</label></option>
                      <option <?php  $set_golongan = 'II/c'; ?> >II/c	: <label>Pengatur</label></option>
                      <option <?php  $set_golongan = 'II/b'; ?> >II/b	: <label>Pengatur Muda Tk.I</label></option>
                      <option <?php  $set_golongan = 'II/a'; ?> >II/a	: <label>Pengatur Muda</label></option>
                      <option <?php  $set_golongan = 'I/d'; ?> >I/d	: <label>Juru Tk.I</label></option>
                      <option <?php  $set_golongan = 'I/c'; ?> >I/c	: <label>Juru</label></option>
                      <option <?php  $set_golongan = 'I/b'; ?> >I/b	: <label>Juru Muda Tk.I</label></option>
                      <option <?php  $set_golongan = 'I/a'; ?> >I/a	: <label>Juru Muda</label></option>
                    </select> -->

              <!-- panel table pegawai -->
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>JK </th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Golongan</th>
                    <th>Pangkat Terakhir</th>
                    <th>TMT</th>
                    <th>No SK</th>
                    <th>Tanggal SK</th>
                    <th>Jenjang Pendidikan</th>
                    <th>Jurusan</th>
                    <th>Gaji</th>
                    <?php if ($hak_akses != 'kepala_dinas'): ?>

                      <th>Aksi</th>

                    <?php endif; ?>
                </thead>
                <tbody>
                  <?php
                  // <!-- menampilkan data mysqli -->
                  include "koneksi.php";
                  $no = 0;

                    $sql ="SELECT * FROM pegawai where Status = 'aktif' ";


                    $query=mysqli_query($conn,$sql);
                  while($r=mysqli_fetch_array($query)){
                    $no++;
                    ?>
                    <tr>
                      <td><?php echo  $r['Nama']; ?></td>
                      <td><?php echo  $r['NIP']; ?></td>
                      <td><?php echo  $r['JK']; ?></td>
                      <td><?php echo  $r['Tempat_Lahir']; ?></td>
                      <td><?php echo  $r['Tanggal_Lahir']; ?></td>
                      <td><?php echo  $r['Golongan']; ?></td>
                      <td><?php echo  $r['Pangkat_Terakhir']; ?></td>
                      <td><?php echo  $r['TMT']; ?></td>
                      <td><?php echo  $r['No_SK']; ?></td>
                      <td><?php echo  $r['Tanggal_SK']; ?></td>
                      <td><?php echo  $r['Jenjang_Pendidikan']; ?></td>
                      <td><?php echo  $r['Jurusan']; ?></td>
                      <td><?php echo  $r['Gaji']; ?></td>
                      <?php if ($hak_akses != 'kepala_dinas'): ?>
                      <td>

                          <?php echo "<a href='#myModalpegawai' class='btn btn-success btn-small' id='custId' data-toggle='modal' data-nip=".$r['NIP'].">Update</a>"; ?>
                          <?php echo "<a href='#myModalpegawai2' class='btn btn-danger btn-small' id='custId' data-toggle='modal' data-nip=".$r['NIP'].">Non Aktif</a>"; ?>

                      </td>
                    <?php endif; ?>
                    </tr>
                  <?php } ?>
                </tbody>
              </table><!-- /.table-responsive -->
            </div><!-- panel-body -->
        </div><!-- /.panel -->
    </div><!-- /.col-lg-12 -->
</div>

<!-- Modal Popup untuk Add-->
<?php include 'modal_input_pegawai.php'; ?>

<!-- Modal Popup untuk Update-->
<div class="modal fade" id="myModalpegawai" role="dialog">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Update Pegawai</h4>
              </div>
              <div class="modal-body">
                  <div class="fetched-data"></div>
              </div>
          </div>
      </div>
</div>

<!-- javascript Popup untuk Update -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#myModalpegawai').on('show.bs.modal', function (e) {
            var rNIP = $(e.relatedTarget).data('nip');
            $.ajax({
                type : 'post',
                url : 'pages/pegawai/modal_update_pegawai.php',
                data :  'rNIP='+ rNIP,
                success : function(data){
                $('.fetched-data').html(data);
                }
            });
         });
    });


</script>

<!-- Modal Popup untuk Non-Aktif-->
<div class="modal fade" id="myModalpegawai2" role="dialog">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Non-Aktif Pegawai</h4>
              </div>
              <div class="modal-body">
                  <div class="fetched-data"></div>
              </div>
          </div>
      </div>
</div>

<!-- javascript Popup untuk update -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#myModalpegawai2').on('show.bs.modal', function (e) {
            var rNIP = $(e.relatedTarget).data('nip');
            $.ajax({
                type : 'post',
                url : 'pages/pegawai/modal_nonaktif_pegawai.php',
                data :  'rNIP='+ rNIP,
                success : function(data){
                $('.fetched-data').html(data);
                }
            });
         });
    });


</script>
