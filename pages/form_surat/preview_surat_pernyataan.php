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
    <title>Surat Pernyataan</title>
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
            <p style="text-align: right"><?php echo $_POST['tempat_pembuatan'];?><?php echo $waktu;?></p>

            <p></p>

            <table style="width:100%">
              <tr>
                <td style="width:15%">Nomor<td>: <?php echo $_POST['nomor_surat'];?></td><td>Kepada</td>
              </tr>
              <tr>
                <td style="width:15%">Lampiran<td>: <?php echo $_POST['lampiran_surat'];?></td><td>Yth :<?php echo $_POST['tujuan'];?></td>
              </tr>
              <tr>
                <td style="width:15%">Perihal<td>: <?php echo $_POST['perihal_surat'];?></td><td>Di :<?php echo $_POST['di'];?></td>
              </tr>
            </table>

            <p></p>
            <p><?php echo $_POST['pembuka_surat'];?></p>
            <p></p>
            <p><?php echo $_POST['isi_surat'];?></p>
            <p></p>
            <p><?php echo $_POST['Penutup_surat'];?></p>
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
              <tr><td style="width:70%"></td><td><?php echo $_POST['nip'];?></td></tr>
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

        <?php } ?>
</body>

</html>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$nama_dokumen = 'surat pernyataan';
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;

?>
