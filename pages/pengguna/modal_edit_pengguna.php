<?php
    if($_POST['rusername']) {
      include '../../koneksi.php';
          $username = $_POST['rusername'];
          // mengambil data berdasarkan username
          $query = mysqli_query( $conn,"SELECT * FROM pengguna WHERE username = '$username'");
          foreach ($query as $r) {
            ?>
            <!-- MEMBUAT FORM -->
          <form action="?user=proses_edit_pengguna" name="modal_popup" enctype="multipart/form-data" method="POST">
              <div class="form-group" style="padding-bottom: 20px;">
                <?php $old_username = $r['username']; ?>
                  <input type="hidden" name="old_username" value='<?php echo $old_username; ?>' >
                  <label>Username </label>:
                  <input required="required" type="text" name="username" class="form-control" value="<?php echo $r['username']; ?>" />
              </div>
              <div class="form-group" style="padding-bottom: 20px;">
                  <label>password </label>:
                  <input required="required" type="text" name="password" class="form-control" value="<?php echo $r['password']; ?>" />
              </div>
              <div class="form-group" style="padding-bottom: 20px;">
                  <label>E-mail </label>:
                  <input required="required" type="text" name="email" class="form-control" value="<?php echo $r['email']; ?>" />
              </div>
              <div class="form-group" style="padding-bottom: 20px;">
                  <label>Hak Akses </label>:
                  <select class="form-control m-bot15" name="hak_akses" required="required">
                    <?php $optionhak_akses = $r['hak_akses']; ?>
                    <option value="administrator" <?php if ($optionhak_akses == "administrator") {echo "selected";} ?>>Administrator</option>
                    <option value="pegawai"<?php if ($optionhak_akses == "pegawai") {echo "selected";} ?>>pegawai</option>
                    <option value="kepala_dinas" <?php if ($optionhak_akses == "kepala_dinas") {echo "selected";} ?>>Kepala Dinas</option>
                  </select>
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
