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
    <title>laporan surat Keluar</title>
</head>

<body lang=EN-US style='tab-interval:.5in'>
  <h2>
    laporan surat Keluar
  </h2>
<table  border="1">
  <tr>
      <th>Id Surat Keluar</th>
      <th>PDF</th>
      <th>No Surat</th>
      <th>Jenis Surat</th>
      <th>Tanggal Surat</th>
      <th>Perihal</th>
  </tr>

    <?php
    // <!-- menampilkan data mysqli -->
    include "koneksi.php";
    $no = 0;

      $sql ="SELECT * FROM surat_keluar";
      $query=mysqli_query($conn,$sql);
    while($r=mysqli_fetch_array($query)){
      $no++;
      ?>
      <tr>
        <td><?php echo  $r['id_surat_keluar']; ?></td>
        <td><?php echo  $r['pdf']; ?></td>
        <td><?php echo  $r['no_surat']; ?></td>
        <td><?php echo  $r['jenis_surat']; ?></td>
        <td><?php echo  $r['tanggal_surat']; ?></td>
        <td><?php echo  $r['perihal']; ?></td>
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
$nama_dokumen = 'laporan surat keluar';
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;

?>
