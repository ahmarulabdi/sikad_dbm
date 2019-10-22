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
    <title>Laporan pegawai</title>
</head>

<body lang=EN-US style='tab-interval:.5in'>
  <h2>
    laporan Pegawai
  </h2>
  <table border="1">
    <tr>
        <th>Nama</th>
        <th>Nip</th>
        <th>JK </th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Golongan</th>
        <th>Pangkat Terakhir</th>
        <th>TMT</th>
        <th>No SK</th>
        <th>Tanggal SK</th>
        <th>Jenjang Pendidikan</th>
        <th>Jurusan</th>
        <th>Status</th>
        <th>Gaji</th>
    </tr>
      <?php
      // <!-- menampilkan data mysqli -->
      include "koneksi.php";
      $no = 0;

        $sql ="SELECT * FROM pegawai";


        $query=mysqli_query($conn,$sql);
      while($r=mysqli_fetch_array($query)){
        $no++;
        ?>
        <tr>
          <td><?php echo  $r['Nama']; ?></td>
          <td><?php echo  $r['NIP']; ?></td>
          <td><?php echo  $r['JK']; ?></td>
          <td><?php echo  $r['Tempat_Lahir']; ?></td>
          <td><?php echo  $r['Tanggal_Lahir']; ?></td>
          <td><?php echo  $r['Golongan']; ?></td>
          <td><?php echo  $r['Pangkat_Terakhir']; ?></td>
          <td><?php echo  $r['TMT']; ?></td>
          <td><?php echo  $r['No_SK']; ?></td>
          <td><?php echo  $r['Tanggal_SK']; ?></td>
          <td><?php echo  $r['Jenjang_Pendidikan']; ?></td>
          <td><?php echo  $r['Jurusan']; ?></td>
          <td><?php echo  $r['Status']; ?></td>
          <td><?php echo  $r['Gaji']; ?></td>
        </tr>
      <?php } ?>
    </tr>
  </table><!-- /.table-responsive -->
</body>

</html>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$nama_dokumen = 'laporan';
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;

?>
