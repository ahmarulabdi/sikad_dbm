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
    <title>laporan absensi keseluruhan</title>
</head>

<body lang=EN-US style='tab-interval:.5in'>
  <h2>
    laporan absensi keseluruhan
  </h2>
<table border="1">
  <tr>
      <th>Id Absen Keseluruhan</th>
      <th>Id Absen Apel</th>
      <th>Id Absen Pagi</th>
      <th>Id Absen Istirahat</th>
      <th>Id Absen Setelah Istirahat</th>
      <th>Id Absen Pulang</th>
      <th>Id Absen Tugas Apel</th>
      <th>Id Absen Pelatihan</th>
  </tr>

    <?php
    // <!-- menampilkan data mysqli -->
    include "koneksi.php";
    $no = 0;

      $sql ="SELECT * FROM absen_keseluruhan";
      $query=mysqli_query($conn,$sql);
    while($r=mysqli_fetch_array($query)){
      $no++;
      ?>
      <tr>
        <td><?php echo  $r['id_absen_keseluruhan']; ?></td>
        <td><?php echo  $r['id_absen_apel']; ?></td>
        <td><?php echo  $r['Id_absen_pagi']; ?></td>
        <td><?php echo  $r['Id_absen_istirahat']; ?></td>
        <td><?php echo  $r['Id_absen_setelah_istirahat']; ?></td>
        <td><?php echo  $r['Id_absen_pulang']; ?></td>
        <td><?php echo  $r['Id_absen_tugas_apel']; ?></td>
        <td><?php echo  $r['Id_absen_pelatihan']; ?></td>
      </tr>
    <?php } ?>

</table><!-- /.table-responsive -->
</body>

</html>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$nama_dokumen = 'laporan absensi seluruh';
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;

?>
