<?php
# MEMBACA TOMBOL LOGIN DARI FILE login.
if(isset($_POST['btnLogin'])){

	# Baca variabel form
	$txtUser 		= $_POST['txtUser'];
	$txtPassword	= $_POST['txtPassword'];

		# LOGIN CEK KE TABEL USER LOGIN
		$mySql = "SELECT * FROM pengguna WHERE username='$txtUser' AND password='$txtPassword'";
		$myQry = mysqli_query($conn,$mySql ) or die ("Query Salah : ".mysql_error());

		$myData= mysqli_fetch_array($myQry);
		# JIKA LOGIN SUKSES
		if(mysqli_num_rows($myQry) >=1) {
			// Menyimpan Kode yang Login
			$_SESSION['SES_LOGIN'] = 'default';
			$_SESSION['SES_LOGIN'] = $myData['username'];
			// Refresh
			include 'routing/user_config.php';

			//menu awal setelah login
			if ($hak_akses == 'administrator' ) {
				header(sprintf("Location:?user=pegawai_aktif"));
			}
			else if ($hak_akses == 'pegawai' ) {
				header(sprintf("Location:?user=surat_permohonan"));
			}
			else if ($hak_akses == 'kepala_dinas' ) {
				header(sprintf("Location:?user=pegawai_aktif"));
			}
		}
		else {
			 include 'relogin.php';
		}

} // End POST
?>
