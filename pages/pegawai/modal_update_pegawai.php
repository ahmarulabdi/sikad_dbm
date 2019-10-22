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
          <form action="?user=proses_update_pegawai" name="modal_popup" enctype="multipart/form-data" method="POST">

            <div class="form-group" style="padding-bottom: 20px;">
              <label for="nama">Nama</label>
              <input type="text" name="nama" onkeypress='return isNumberKey(event)';
               class="form-control" value="<?php echo  $r['Nama']; ?>" required="requred"/>
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
              <label for="nip">NIP</label>
              <input type="hidden" name="old_nip"
              class="form-control" value="<?php echo  $r['NIP']; ?>" >
              <input type="number" name="nip"
               class="form-control" value="<?php echo  $r['NIP']; ?>" required="requred"/>
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
              <label class="control-label col-lg-3" for="inputSuccess">Jenis Kelamin</label>
              <div class="col-lg-9">
                <?php
                if ($r['JK'] == 'Laki-Laki'):
                  $optionsRadios1 = 'checked';
                  $optionsRadios2 = '';
                else:
                  $optionsRadios1 = '';
                  $optionsRadios2 = 'checked';
                endif;
                ?>

                <div class="radio">
                    <label>
                        <input type="radio" name="jk" id="optionsRadios1" value="Laki-Laki" <?php echo $optionsRadios1 ?>>
                        Laki-Laki
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="jk" id="optionsRadios2" value="Perempuan" <?php echo $optionsRadios2 ?>>
                        Perempuan
                    </label>
                </div>

              </div>
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
              <label for="Tempat Lahir">Tempat Lahir</label>
              <input type="text" name="tempat_lahir"
               class="form-control" value="<?php echo  $r['Tempat_Lahir']; ?>" required="requred"/>
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
              <label for="Tanggal Lahir">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir"
               class="form-control" value="<?php echo  $r['Tanggal_Lahir']; ?>" required="requred"/>
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
              <label for="Golongan">golongan</label>
              <select class="form-control m-bot15" name="golongan">
                <?php $optiongolongan = $r['Golongan']; ?>
                <option value="IV/e" <?php if ($optiongolongan == "IV/e") {echo "selected";} ?>>IV/e	: <label>Pembina Utama</label></option>
                <option value="IV/d" <?php if ($optiongolongan == "IV/d") {echo "selected";} ?>>IV/d	: <label>Pembina Utama Madya</label></option>
                <option value="IV/c" <?php if ($optiongolongan == "IV/c") {echo "selected";} ?>>IV/c	: <label>Pembina Utama Muda</label></option>
                <option value="IV/b" <?php if ($optiongolongan == "IV/b") {echo "selected";} ?>>IV/b	: <label>Pembina Tk.I</label></option>
                <option value="IV/a" <?php if ($optiongolongan == "IV/a") {echo "selected";} ?>>IV/a	: <label>Pembina</label></option>
                <option value="III/d" <?php if ($optiongolongan == "III/d") {echo "selected";} ?>>III/d	: <label>Penata Tk.I</label></option>
                <option value="III/c" <?php if ($optiongolongan == "III/c") {echo "selected";} ?>>III/c	: <label>Penata</label></option>
                <option value="III/b" <?php if ($optiongolongan == "III/b") {echo "selected";} ?>>III/b	: <label>Penata Muda Tk.I</label></option>
                <option value="III/a" <?php if ($optiongolongan == "III/a") {echo "selected";} ?>>III/a	: <label>Penata Muda</label></option>
                <option value="II/d" <?php if ($optiongolongan == "II/d") {echo "selected";} ?>>II/d	: <label>Pengatur Tk.I</label></option>
                <option value="II/c" <?php if ($optiongolongan == "II/c") {echo "selected";} ?>>II/c	: <label>Pengatur</label></option>
                <option value="II/b" <?php if ($optiongolongan == "II/b") {echo "selected";} ?>>II/b	: <label>Pengatur Muda Tk.I</label></option>
                <option value="II/a" <?php if ($optiongolongan == "II/a") {echo "selected";} ?>>II/a	: <label>Pengatur Muda</label></option>
                <option value="I/d" <?php if ($optiongolongan == "I/d") {echo "selected";} ?>>I/d	: <label>Juru Tk.I</label></option>
                <option value="I/c" <?php if ($optiongolongan == "I/c") {echo "selected";} ?>>I/c	: <label>Juru</label></option>
                <option value="I/b" <?php if ($optiongolongan == "I/b") {echo "selected";} ?>>I/b	: <label>Juru Muda Tk.I</label></option>
                <option value="I/a" <?php if ($optiongolongan == "I/a") {echo "selected";} ?>>I/a	: <label>Juru Muda</label></option>
              </select>
            </div>

            <div class="form-group" style="padding-bottom: 20px;">
              <label for="tmt">TMT</label>
              <input type="Date" name="tmt"
               class="form-control" value="<?php echo  $r['TMT']; ?>" required="requred"/>
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
              <label for="No Sk">No SK</label>
              <input type="number" name="no_sk"
               class="form-control" value="<?php echo  $r['No_SK']; ?>" required="requred"/>
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
              <label for="Tanggal Sk">Tanggal SK</label>
              <input type="Date" name="tanggal_sk"
               class="form-control" value="<?php echo  $r['Tanggal_SK']; ?>" required="requred"/>
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
              <label for="Jenjang Pendidikan">Jenjang Pendidikan</label>
              <select name="jenjang_pendidikan" class="form-control m-bot15">
                <?php $optionjenjang = $r['Jenjang_Pendidikan'] ?>
                <option value="SD" <?php if ($optionjenjang == "SD") {echo "selected";} ?>>SD</option>
                <option value="SMP" <?php if ($optionjenjang == "SMP") {echo "selected";} ?>>SMP</option>
                <option value="SMA" <?php if ($optionjenjang == "SMA") {echo "selected";} ?>>SMA</option>
                <option value="D1/D2" <?php if ($optionjenjang == "D1/D2") {echo "selected";} ?>>D1/D2</option>
                <option value="D3" <?php if ($optionjenjang == "D3") {echo "selected";} ?>>D3</option>
                <option value="S1" <?php if ($optionjenjang == "S1") {echo "selected";} ?>>S1</option>
                <option value="S2" <?php if ($optionjenjang == "S2") {echo "selected";} ?>>S2</option>
                <option value="S3" <?php if ($optionjenjang == "S3") {echo "selected";} ?>>S3</option>
              </select>
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
              <label for="Jurusan">Jurusan</label>
              <input type="text" name="jurusan"
               class="form-control" value="<?php echo  $r['Jurusan'];?>" required="requred"/>
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
              <label for="Gaji">Gaji</label>
              <input type="number" name="gaji"
               class="form-control" value="<?php echo  $r['Gaji'];?>" required="requred"/>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit" name="submit">
              Confirm
          </button>
                <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
            Cancel
          </button>
            </div>
          </form>
<?php
    }
  }
?>
