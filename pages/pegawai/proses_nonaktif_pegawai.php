<?php
	include "koneksi.php";
	$old_nip = $_POST['old_nip'];
	$keterangan = $_POST['keterangan'];
	 $sql = "UPDATE `pegawai` SET
	 Status = 'non-aktif',
	 Keterangan = '$keterangan'
	 WHERE `pegawai`.`NIP` = '$old_nip';";

	  $query =mysqli_query($conn,$sql);

	// var_dump($query);
	//
	header(sprintf('location:?user=pegawai_non_aktif'));
?>
