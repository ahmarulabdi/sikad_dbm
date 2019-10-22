<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$nip = $_POST['nip'];
// uploadgambar
$nama_file = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
//end uploadgambar
$hak_akses = $_POST['hak_akses'];
$email = $_POST['email'];

// penyimpanan file gambar di memori
$path = "D:/localserver/htdocs/sikad_dbm/img/avatar/".$nama_file;
move_uploaded_file($tmp_file, $path); // Cek apakah gambar berhasil diupload atau tidak
// menampilkan sementara
$getnip = mysqli_query($conn,"SELECT * FROM pegawai");
$r = mysqli_fetch_array($getnip);
$r['nip'] ='default';
if ($nip != $r['nip'] ) {
  ?>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">

          <h2>
            nip tidak sesuai silahkan kembali ke <a href="?user=pengguna">tabel pengguna</a>
          </h2>
        </div>
      </div>
      </div>

  </div>
  <?php
}
else {

  $query =mysqli_query($conn,"INSERT INTO `pengguna` (
    `username`,`password`,`NIP`,`gambar`,`hak_akses`,`email`,`created_at`,`updated_at`)
    VALUES ('$username','$password','$nip','$nama_file','$hak_akses','$email',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);");
  
  header(sprintf('Location:?user=pengguna'));
}
}
?>
