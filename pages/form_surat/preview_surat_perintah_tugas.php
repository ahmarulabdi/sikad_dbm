<?php
ob_end_clean();
  include '../../assets/mpdf60/mpdf.php';
  include 'assets/mpdf60/mpdf.php';
  $mpdf=new mPDF('utf-8', 'Legal'); // Create new mPDF Document
  //Beginning Buffer to save PHP variables and HTML tags
  ob_start();
 ?>
<html>

<head>
    <title>Surat Perintah Tugas</title>
</head>

<body lang=EN-US style='tab-interval:.5in'>
  <?php
              //Format Tanggal
              $tanggal = date ('j');
              $array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
              $bulan = $array_bulan[date('n')];
              $tahun = date('Y');
              $waktu = ',' . $tanggal .' '. $bulan .' '. $tahun;
  ?>
    <?php if (isset($_POST['preview'])) {
      echo $_POST['tes'];
                                           ?>

        <style>
            div.container {
                background-color: #ffffff;
            }

            div.container p {
                text-align: justify;
                font-family: Times;
                font-size: 14px;
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                text-transform: none;
                color: #000000;
                background-color: #ffffff;
            }
        </style>
        <?php
              //Format Tanggal
              $tanggal = date ('j');
              $array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
              $bulan = $array_bulan[date('n')];
              $tahun = date('Y');
              $waktu = ',' . $tanggal .' '. $bulan .' '. $tahun;
        ?>
        <div class="container">
          <!-- HTML Codes by Quackit.com -->
<!DOCTYPE html>
<title>Text Example</title>
<style>
div.container {
background-color: #ffffff;
}
div.container p {
text-align: justify;
font-family: Times;
font-size: 14px;
font-style: normal;
font-weight: normal;
text-decoration: none;
text-transform: none;
color: #000000;
background-color: #ffffff;
}
</style>

<div class="container">
<p>SURAT PERINTAH TUGAS</p>
<p>Nomor : ________/SPT/2016</p>
<p></p>
<p></p>
<p>Dasar	:	Surat Kepala Badan Kepegawaian, Pendidikan dan Pelatihan Daerah Provinsi Riau Nomor : 800/BKP2D/5.1/XI/2016/3779 Tanggal 28 November 2016 Perihal Permintaan Peserta, dengan ini Kepala Dinas Bina Marga Provinsi Riau :</p>
<p></p>
<p>MEMERINTAHKAN</p>
<p></p>
<p>Kepada	:	</p>
<p>1.	Nama	:	RICKY SYAFRIZAL</p>
<p>NIP	:	19880717 201503 1 002</p>
<p>Pangkat / Gol.	:	Pengatur Muda (II/a)</p>
<p>Jabatan	:	Fungsional Umum pada Sekretariat</p>
<p></p>
<p>2.	Nama	:	IZAN AKRAMUZI, S.Kom</p>
<p>Jabatan	:	Tenaga Ahli Bidang IT</p>
<p></p>
<p>Untuk	:	Mengikuti kegiatan Bimbingan Teknis Pengisisan dan Penyempurnaan Database serta Percepatan Pemanfaatan Sistem Manajemen Aparatur Responsif dan Terpadu (SMART) bagi SKPD dilingkungan Pemerintah Provinsi Riau, pada :</p>
<p></p>
<p>Hari / Tanggal	:	Kamis, 1 Desember 2016</p>
<p>Waktu	:	08.00 WIB s.d Selesai</p>
<p>Tempat	:	Hotel Premiere, Jl. Jend. Sudirman – Pekanbaru</p>
<p></p>
<p></p>
<p>Demikian perintah tugas ini untuk dilaksanakan dengan penuh tanggung jawab dan menyampaikan laporan setelah tugas selesai.</p>
<p></p>
<p></p>
<p></p>
<p>	Ditetapkan di	:	P E K A N B A R U</p>
<p>	Pada Tanggal	:	     November 2016</p>
<p>	</p>
<p>	Plt. KEPALA DINAS BINA MARGA</p>
<p>	PROVINSI RIAU</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p>	CHAIRUSSYAH, ST. MT</p>
<p>	Pembina Tk.I</p>
<p>	NIP. 19630103 198803 1 006</p>
<p></p>

        </div>

        <?php } ?>
</body>

</html>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$nama_dokumen = 'Surat Perintah Tugas';
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;

?>
