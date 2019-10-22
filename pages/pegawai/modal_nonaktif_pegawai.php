<?php
    if (!$_POST['rNIP']) {
      echo "NIP TIDAK DITEMUKAN";
    }
    elseif($_POST['rNIP']) {
      include '../../koneksi.php';
          $NIP = $_POST['rNIP'];

          // mengambil data berdasarkan id
          $query = mysqli_query( $conn,"SELECT * FROM pegawai WHERE NIP = $NIP");

          foreach ($query as $r) {
            ?>
            <!-- MEMBUAT FORM -->
          <form action="?user=proses_nonaktif_pegawai" name="modal_popup" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="old_nip" class="form-control" value="<?php echo  $r['NIP']; ?>" >
            <div class="form-group" style="padding-bottom: 20px;">
              <label for="Keterangan">Keterangan Non-Aktif</label>
              <input type="text" name="keterangan" class="form-control" required="requred"/>
            </div>
            <ul>
              <li><label for="nama">Nama : <?php echo  $r['Nama']; ?></label></li>
              <li><label for="nip">NIP : <?php echo  $r['NIP']; ?></label></li>
              <li><label for="Jenis Kelamin">Jenis Kelamin : <?php echo $r['JK']; ?></label></li>
              <li><label for="Tempat Lahir">Tempat Lahir : <?php echo  $r['Tempat_Lahir']; ?></label></li>
              <li><label for="Tanggal Lahir">Tanggal Lahir : <?php echo  $r['Tanggal_Lahir']; ?></label></li>
              <li><label for="Golongan">golongan : <?php echo $r['Golongan']; ?></label></li>
              <li><label for="tmt">TMT : <?php echo  $r['TMT']; ?></label></li>
              <li><label for="No Sk">No SK : <?php echo  $r['No_SK']; ?></label></li>
              <li><label for="Tanggal Sk">Tanggal SK : <?php echo  $r['Tanggal_SK']; ?></label></li>
              <li><label for="Jenjang Pendidikan">Jenjang Pendidikan : <?php $optionjenjang = $r['Jenjang_Pendidikan'] ?></label></li>
              <li><label for="Jurusan">Jurusan : <?php echo  $r['Jurusan'];?></label></li>
              <li><label for="Gaji">Gaji : <?php echo  $r['Gaji'];?></label></li>
            </ul>
            <div class="modal-footer">
              <table>
                <tr>
                  <td style='padding-right:10px;'>
                    <h4>Apakah anda yakin ingin non-aktif pegawai di atas ?</h4>
                  </td>
                  <td>
                    <button class="btn btn-success" type="submit" name="submit">
                      Ya
                    </button>
                    <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
                      Tidak
                    </button>
                  </td>
                </tr>
              </table>
            </div>
          </form>
<?php
    }
  }
?>
