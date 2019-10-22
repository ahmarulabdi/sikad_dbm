
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Pengguna</h4>
            </div>
            <div class="modal-body">
                <form action="?user=proses_input_pengguna" enctype="multipart/form-data" name="modal_popup" enctype="multipart/form-data" method="POST">

                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="username">Username</label>
                      <input type="text" name="username"
                       class="form-control" placeholder="username" required="requred"/>
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="password">Password</label>
                      <input type="password" name="password"
                       class="form-control" placeholder="password" required="requred"/>
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="nip">NIP</label>
                      <input type="number" name="nip"
                       class="form-control" placeholder="NIP" required="requred"/>
                    </div>
                    <!-- upload gambar -->
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="password">gambar</label>
                      <input type="file" name="gambar">
                    </div>
                    <!--end upload gambar -->
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="hak_akses">Hak Akses</label>
                      <select class="form-control m-bot15" name="hak_akses">
                        <option value="administrator">Administrator</option>
                        <option value="pegawai">Pegawai</option>
                        <option value="kepala_dinas">Kepala Dinas</option>
                      </select>
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="email">E-mail</label>
                      <input type="email" name="email"
                      class="form-control" placeholder="E-mail" required="requred"/>
                    </div>


            <div class="modal-footer">
                <button class="btn btn-success" type="submit" name="submit">
              Tambahkan
                </button>
                <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
            Batalkan
                </button>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>
