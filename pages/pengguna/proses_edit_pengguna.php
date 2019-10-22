<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
	if (isset($_POST['submit'])) {
		$old_username = $_POST['old_username'];
		$username =$_POST['username'];
		$password =$_POST['password'];
		$email =$_POST['email'];
		$hak_akses =$_POST['hak_akses'];

		$sql = "UPDATE `pengguna` SET
	 `username` = '$username',
	 `password` = '$password',
	 `email` = '$email',
	 `hak_akses` = '$hak_akses'
	 WHERE `pengguna`.`username` = '$old_username';";

	  $query =mysqli_query($conn,$sql);

	// var_dump($query);
	//
	header(sprintf('location:?user=pengguna'));
}
?>
