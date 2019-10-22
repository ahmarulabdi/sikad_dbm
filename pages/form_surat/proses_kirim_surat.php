<?php if (isset($_POST['kirim'])){
  $nama_file = $_FILES['pdf']['name'];
  $tmp_file = $_FILES['pdf']['tmp_name'];
  $path = "D:/localserver/htdocs/sikad_dbm/pages/form_surat/filepdf/".$nama_file;
  move_uploaded_file($tmp_file, $path); // Cek apakah gambar berhasil diupload atau tidak
  $sql = "INSERT into form_surat(nama_surat,perihal_surat) VALUES('$nama_file','$path')";
  $query = mysqli_query($conn,$sql );
 var_dump($query);
}
?>
