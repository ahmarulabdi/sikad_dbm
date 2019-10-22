<?php
ob_end_clean();
if (isset($_POST['preview'])) {
  include '../../assets/mpdf60/mpdf.php';
  include 'assets/mpdf60/mpdf.php';
  $mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
  //Beginning Buffer to save PHP variables and HTML tags
  ob_start();
 ?>
<html>
<head>
    <title>Surat Permohonan</title>
</head>

<body lang=EN-US style='tab-interval:.5in'>
  <div style="text-align:center;size:300px;">
    <b><u>SURAT KETERANGAN TIDAK SEDANG MENERIMA BEASISWA</u></b>
    <br>Nomor : 416/STIKes PN/IKM/01/IV/2017
  </div>

  <?php
    //Format Tanggal
    $tanggal = date ('j');
    $array_bulan = array(1=>'
    Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
    $bulan = $array_bulan[date('n')];
    $tahun = date('Y');
    $waktu = ',' . $tanggal .' '. $bulan .' '. $tahun;
  ?>
    <?php
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
          <p></p>
          <p>Yang bertanda tangan di bawah ini Ketua Sekolah Tinggi Ilmu Kesehatan (STIKes) Payung Negeri Pekanbaru dengan ini menerangkan bahwa:</p>
          <p></p>
          <p>
            <div style="text-align:center">
              <table>
              <tr>
                <td>Nama			</td>
                <td>:SRI NINGSIH</td>
              </tr>
              <tr>
                <td>Nim			</td>
                <td>:14.4.0.1.0033</td>
              </tr>
              <tr>
                <td>Tempat/ Tgl Lahir:</td>
                <td>: T. Medan, 28 April 1996</td>
              </tr>
              <tr>
                <td>Tingkat</td>
                <td>: III (Tiga)</td>
              </tr>
              <tr>
                <td>Semester	</td>
                <td>:VI (Enam)</td>
              </tr>
              <tr>
                <td>Program Studi	</td>
                <td>: Ilmu Kesehatan Masyarakat</td>
              </tr>
            </table>
            </div>
          </p>
          <p></p>
          <p>Nama tersebut di atas benar mahasiswa Program Studi Ilmu Kesehatan Masyarakat Sekolah Tinggi Ilmu Kesehatan (STIKes) Payung Negeri Pekanbaru yang terdaftar pada Tahun Akademik 2016/2017 dan tidak sedang menerima bantuan pendidikan (beasiswa) dari manapun.

            Demikianlah surat keterangan ini dibuat dan diberikan kepada yang bersangkutan untuk dapat dipergunakan seperlunya.</p>
          <p></p>
          <p></p>

          <table style="width:100%">
            <tr><td style="width:70%"></td><td><?php echo $_POST['keterangan_pengirim'];?></td></tr>
            <br>
            <br>
            <br>
            <br>
            <br>
            <tr><td style="width:70%"></td><td><u><?php echo $_POST['penanggung_jawab'];?></u></td></tr>
            <tr><td style="width:70%"></td><td><?php echo $_POST['NIP'];?></td></tr>
          </table>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
        </div>

</body>

</html>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$nama_dokumen = 'surat permohonan';
$filepdf = $mpdf->Output($nama_dokumen.".pdf" ,'I');

include 'koneksi.php';
$sql = "INSERT into form_surat(nama_surat,perihal_surat) values ('$nama_dokumen','$filepdf')";
$query = mysqli_query($conn,$sql);
exit;

?>
<?php } ?>
