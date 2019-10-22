<?php
	if (isset($_GET['username'])) {
		include "koneksi.php";
		$username=$_GET['username'];
		$query=mysqli_query($conn,"Delete FROM pengguna WHERE username='$username'");
		header(sprintf('Location:?user=pengguna'));
	}
?>
