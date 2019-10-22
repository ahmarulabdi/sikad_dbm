<!DOCTYPE html>
<html>
  <head>
    <?php header(sprintf('Location:?user=pegawai')) ?>
  </head>
<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$jk = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$golongan = $_POST['golongan'];
switch ($golongan) {
  case 'IV/e': $pangkat_terakhir = 'Pembina Utama';
    break;
  case 'IV/d': $pangkat_terakhir = 'Pembina Utama Madya';
    break;
  case 'IV/c': $pangkat_terakhir = 'Pembin  a Utama Muda';
    break;
  case 'IV/b': $pangkat_terakhir = 'Pembina Tk.I';
    break;
  case 'IV/a': $pangkat_terakhir = 'Pembina';
    break;
  case 'III/d': $pangkat_terakhir = 'Penata Tk.I';
    break;
  case 'III/c': $pangkat_terakhir = 'Penata';
    break;
  case 'III/b': $pangkat_terakhir = 'Penata Muda Tk.I';
    break;
  case 'III/a': $pangkat_terakhir = 'Penata Muda';
    break;
  case 'II/d': $pangkat_terakhir = 'Pengatur Tk.I';
    break;
  case 'II/c': $pangkat_terakhir = 'Pengatur';
    break;
  case 'II/b': $pangkat_terakhir = 'Pengatur Muda Tk.I';
    break;
  case 'II/a': $pangkat_terakhir = 'Pengatur Muda';
    break;
  case 'I/d': $pangkat_terakhir = 'Juru Tk.I';
    break;
  case 'I/c': $pangkat_terakhir = 'Juru';
    break;
  case 'I/b': $pangkat_terakhir = 'Juru Muda Tk.I';
    break;
  case 'I/a': $pangkat_terakhir = 'Juru Muda';
    break;
}

$tmt = $_POST['tmt'];
$no_sk = $_POST['no_sk'];
$tanggal_sk = $_POST['tanggal_sk'];
$Jenjang_Pendidikan = $_POST['jenjang_pendidikan'];
$jurusan = $_POST['jurusan'];
$status =$_POST['status'];
$gaji =$_POST['gaji'];


  $query =mysqli_query($conn,"INSERT INTO pegawai (
  Nama,
  NIP,
  JK,
  Tempat_Lahir,
  Tanggal_Lahir,
  Golongan,
  Pangkat_Terakhir,
  TMT,
  No_SK,
  Tanggal_SK,
  Jenjang_Pendidikan,
  Jurusan,
  Status,
  Gaji
  )
  VALUES (
    '$nama',
    '$nip',
    '$jk',
    '$tempat_lahir',
    '$tanggal_lahir',
    '$golongan',
    '$pangkat_terakhir',
    '$tmt',
    '$no_sk',
    '$tanggal_sk',
    '$Jenjang_Pendidikan',
    '$jurusan',
    '$status',
    '$gaji'
    )");
// var_dump($query);



}
?>
