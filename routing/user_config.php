<?php
  include 'koneksi.php';
  $user = $_SESSION['SES_LOGIN'];
  $sql = "SELECT * FROM pengguna where username = '$user' " ;
  $query = mysqli_query($conn,$sql);
  $r = mysqli_fetch_array($query);
  $hak_akses = $r['hak_akses'];
  $niplogin = $r['NIP'];
 ?>
