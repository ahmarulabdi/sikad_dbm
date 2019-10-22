<?php

if(isset($_SESSION['SES_LOGIN'])) {
	?>

	<body class="login-img2-body">
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<div class="panel-body">
						<div class="container">
							<h1>Selamat datang di</h1>
							<h1><b>SISTEM INFORMASI KEPEGAWAIAN DAN ARSIP DIGITAL DINAS BINAMARGA PROVINSI RIAU</b></h1>"; echo "
							<h3><b> Anda sudah login</h>";
					</div>
				</div>
			</section>
		</div>
		</div>
	</body>
	<?php exit;
}
else { ?>
	<body class="login-img2-body">
		<div class="row">
		  <div class="col-lg-12">
		      <section class="panel">
		        <div class="panel-body">
							<div class="container">
								<h1>Selamat datang di</h1>
								<h1><b>SISTEM INFORMASI KEPEGAWAIAN DAN ARSIP DIGITAL DINAS BINAMARGA PROVINSI RIAU</b></h1>
								<h3><b>Anda belum login, silahkan <a href='?user=login' alt='Login'>login </a>untuk mengakses sistem ini :)</h>
							</div>
		        </div>
		      </section>
		  </div>
		</div>
	</body>
	<?php
}
?>
