<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Pegawai</h4>
            </div>
            <div class="modal-body">
                <form action="?user=proses_input_pegawai" name="modal_popup" enctype="multipart/form-data" method="POST">

                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="nama">Nama</label>
                      <input required="required" type="text" name="nama" onkeypress='return isNumberKey(event)';
                       class="form-control" placeholder="Nama" />
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="nip">NIP</label>
                      <input required="required" type="number" name="nip"
                       class="form-control" placeholder="NIP" />
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label class="control-label col-lg-3" for="inputSuccess">Jenis Kelamin</label>
                      <div class="col-lg-9">
                          <div class="radio">
                              <label>
                                  <input required="required" type="radio" name="jk" id="optionsRadios1" value="Laki-Laki" checked>
                                  Laki-Laki
                              </label>
                          </div>
                          <div class="radio">
                              <label>
                                  <input required="required" type="radio" name="jk" id="optionsRadios2" value="Perempuan">
                                  Perempuan
                              </label>
                          </div>
                      </div>
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="Tempat Lahir">Tempat Lahir</label>
                      <input required="required" type="text" name="tempat_lahir" onkeypress='return isNumberKey(event)';
                       class="form-control" placeholder="Tempat_Lahir" />
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="Tanggal Lahir">Tanggal Lahir</label>
                      <input required="required" type="date" name="tanggal_lahir"
                       class="form-control" placeholder="Tanggal_Lahir" />
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="Golongan">Golongan</label>
                      <select class="form-control m-bot15" name="golongan">
                        <option value="IV/e">IV/e	: <label>Pembina Utama</label></option>
                        <option value="IV/d">IV/d	: <label>Pembina Utama Madya</label></option>
                        <option value="IV/c">IV/c	: <label>Pembina Utama Muda</label></option>
                        <option value="IV/b">IV/b	: <label>Pembina Tk.I</label></option>
                        <option value="IV/a">IV/a	: <label>Pembina</label></option>
                        <option value="III/d">III/d	: <label>Penata Tk.I</label></option>
                        <option value="III/c">III/c	: <label>Penata</label></option>
                        <option value="III/b">III/b	: <label>Penata Muda Tk.I</label></option>
                        <option value="III/a">III/a	: <label>Penata Muda</label></option>
                        <option value="II/d">II/d	: <label>Pengatur Tk.I</label></option>
                        <option value="II/c">II/c	: <label>Pengatur</label></option>
                        <option value="II/b">II/b	: <label>Pengatur Muda Tk.I</label></option>
                        <option value="II/a">II/a	: <label>Pengatur Muda</label></option>
                        <option value="I/d">I/d	: <label>Juru Tk.I</label></option>
                        <option value="I/c">I/c	: <label>Juru</label></option>
                        <option value="I/b">I/b	: <label>Juru Muda Tk.I</label></option>
                        <option value="I/a">I/a	: <label>Juru Muda</label></option>
                      </select>
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="tmt">TMT</label>
                      <input required="required" type="Date" name="tmt"
                       class="form-control" placeholder="TMT" />
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="No Sk">No SK</label>
                      <input required="required" type="number" name="no_sk"
                       class="form-control" placeholder="No_SK" />
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="Tanggal Sk">Tanggal SK</label>
                      <input required="required" type="Date" name="tanggal_sk"
                       class="form-control" placeholder="Tanggal_SK" />
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="Jenjang Pendidikan">Jenjang Pendidikan</label>
                      <select name="jenjang_pendidikan" class="form-control m-bot15">
                        <option>SD</option>
                        <option>SMP</option>
                        <option>SMA</option>
                        <option>D1/D2</option>
                        <option>D3</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                      </select>
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="Jurusan">Jurusan</label>
                      <input required="required" type="text" name="jurusan"
                       class="form-control" placeholder="Jurusan" />
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label class="control-label col-lg-3" for="inputSuccess">Status</label>
                      <div class="col-lg-9">
                          <div class="radio">
                              <label>
                                  <input required="required" type="radio" name="status" id="optionsRadios1aktif" value="aktif" checked>
                                  Aktif
                              </label>
                          </div>
                          <div class="radio">
                              <label>
                                  <input required="required" type="radio" name="status" id="optionsRadios2nonaktif" value="non_aktif">
                                  Non-Aktif
                              </label>
                          </div>
                      </div>
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                      <label for="Gaji">Gaji</label>
                      <input required="required" type="number" name="gaji"
                       class="form-control" placeholder="Gaji" />
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
