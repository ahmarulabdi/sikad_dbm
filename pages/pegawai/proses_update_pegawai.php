<?php
	include "koneksi.php";
	$nama = $_POST['nama'];
	$old_nip = $_POST['old_nip'];
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
	  case 'IV/c': $pangkat_terakhir = 'Pembina Utama Muda';
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
	$gaji = $_POST['gaji'];

	//  menampilkan sementara
	 echo '<br>'.$nama;
	 echo '<br>'.$nip;
	 echo '<br>'.$jk;
	 echo '<br>'.$tempat_lahir;
	 echo '<br>'.$tanggal_lahir;
	 echo '<br>'.$golongan;
	 echo '<br>'.$pangkat_terakhir;
	 echo '<br>'.$tmt;
	 echo '<br>'.$no_sk;
	 echo '<br>'.$tanggal_sk;
	 echo '<br>'.$Jenjang_Pendidikan;
	 echo '<br>'.$jurusan.'</br>';
	 $sql2 =
	 "UPDATE pegawai SET
	 Nama = '$nama',
	 NIP = $nip,
	 JK ='$jk',
	 Tempat_Lahir = '$tempat_lahir',
	 Tanggal_Lahir ='$tanggal_lahir',
	 Golongan = '$golongan',
	 Pangkat_Terakhir = '$pangkat_terakhir',
	 TMT = '$tmt',
	 No_SK =$no_sk,
	 Tanggal_SK ='$tanggal_sk',
	 Jenjang_Pendidikan ='$Jenjang_Pendidikan',
	 Jurusan = '$jurusan' ,
	 Gaji = '$gaji'
	 WHERE pegawai . NIP = '$nip' ;
	 ";

	 $sql = "UPDATE `pegawai` SET
	 `Nama` = '$nama',
	 `NIP` = '$nip',
	 `JK` = '$jk',
	 `Tempat_Lahir` = '$tempat_lahir',
	 `Tanggal_Lahir` = '$tanggal_lahir',
	 `Golongan` = '$golongan',
	 `Pangkat_Terakhir` = '$pangkat_terakhir',
	 `TMT` = '$tmt',
	 `No_SK` = '$no_sk',
	 `Tanggal_SK` = '$tanggal_sk',
	 `Jenjang_Pendidikan` = '$Jenjang_Pendidikan',
	 `Jurusan` = '$jurusan',
	 Gaji = '$gaji'
	 WHERE `pegawai`.`NIP` = '$old_nip';";

	  $query =mysqli_query($conn,$sql);

	// var_dump($query);
	//
	header(sprintf('location:?user=pegawai_aktif'));
?>
