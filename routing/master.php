<?php
// session ketika sesudah login
if (isset($_SESSION['SES_LOGIN'])) {
  include 'user_config.php';
  if ($hak_akses == 'administrator') {
    if ($_GET) {
      // menampilkan menu ?open
      switch ($_GET['user']) {
        // awal
        case '':
          if(!file_exists ('pages/pegawai/pegawai_aktif.php'))
          die ("Filed tidak ada!");
          include 'pages/pegawai/pegawai_aktif.php'; break;

        //pengalihan ketika sudah login
        case 'login':
          if(!file_exists ('pages/pegawai/pegawai_aktif.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/pegawai_aktif.php'; break;
        case 'loginproses':
          if(!file_exists ('pages/pegawai/pegawai_aktif.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/pegawai_aktif.php'; break;

        case 'profile':
          if(!file_exists ('pages/profile.php'))
          die ("File tidak ada!");
          include 'pages/profile.php'; break;

        //pengguna
        case 'pengguna':
          if(!file_exists ('pages/pengguna/pengguna.php'))
          die ("File tidak ada!");
          include 'pages/pengguna/pengguna.php'; break;

        case 'proses_input_pengguna':
          if(!file_exists ('pages/pengguna/proses_input_pengguna.php'))
          die ("File tidak ada!");
          include 'pages/pengguna/proses_input_pengguna.php'; break;

        case 'proses_edit_pengguna':
          if(!file_exists ('pages/pengguna/proses_edit_pengguna.php'))
          die ("File tidak ada!");
          include 'pages/pengguna/proses_edit_pengguna.php'; break;

        case 'proses_delete_pengguna':
          if(!file_exists ('pages/pengguna/proses_delete_pengguna.php'))
          die ("File tidak ada!");
          include 'pages/pengguna/proses_delete_pengguna.php'; break;
        //pegawai
        case 'pegawai_aktif':
          if(!file_exists ('pages/pegawai/pegawai_aktif.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/pegawai_aktif.php'; break;
        case 'pegawai_non_aktif':
          if(!file_exists ('pages/pegawai/pegawai_non_aktif.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/pegawai_non_aktif.php'; break;
        case 'proses_update_pegawai':
          if(!file_exists ('pages/pegawai/proses_update_pegawai.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/proses_update_pegawai.php'; break;
        case 'proses_input_pegawai':
          if(!file_exists ('pages/pegawai/proses_input_pegawai.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/proses_input_pegawai.php'; break;
        case 'proses_edit_pegawai':
          if(!file_exists ('pages/pegawai/proses_edit_pegawai.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/proses_edit_pegawai.php'; break;
        case 'proses_nonaktif_pegawai':
          if(!file_exists ('pages/pegawai/proses_nonaktif_pegawai.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/proses_nonaktif_pegawai.php'; break;
        case 'pegawai_non_aktif':
          if(!file_exists ('pages/pegawai/pegawai_non_aktif.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/pegawai_non_aktif.php'; break;

        // absensi
        case 'absensi_absen_apel':
          if(!file_exists ('pages/absensi/absen_apel/absen_apel.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_apel/absen_apel.php'; break;

        case 'absensi_absen_istirahat':
          if(!file_exists ('pages/absensi/absen_istirahat/absen_istirahat.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_istirahat/absen_istirahat.php'; break;

          case 'absensi_keseluruhan':
            if(!file_exists ('pages/absensi/absen_keseluruhan/absen_keseluruhan.php'))
            die ("File tidak ada!");
            include 'pages/absensi/absen_keseluruhan/absen_keseluruhan.php'; break;

        case 'absensi_absen_pagi':
          if(!file_exists ('pages/absensi/absen_pagi/absen_pagi.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_pagi/absen_pagi.php'; break;

        case 'absensi_absen_pelatihan':
          if(!file_exists ('pages/absensi/absen_pelatihan/absen_pelatihan.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_pelatihan/absen_pelatihan.php'; break;

        case 'absensi_absen_pulang':
          if(!file_exists ('pages/absensi/absen_pulang/absen_pulang.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_pulang/absen_pulang.php'; break;

        case 'absensi_absen_setelah_istirahat':
          if(!file_exists ('pages/absensi/absen_setelah_istirahat/absen_setelah_istirahat.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_setelah_istirahat/absen_setelah_istirahat.php'; break;

        case 'absensi_absen_tugas_apel':
          if(!file_exists ('pages/absensi/absen_tugas_apel/absen_tugas_apel.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_tugas_apel/absen_tugas_apel.php'; break;

// START SESSION BAGIAN UNTUK MEMBUAT SURAT
// NEVER GIVE UP
// ==============================================================================

        // surat balasan
        case 'surat_balasan':
          if(!file_exists ('pages/form_surat/surat_balasan.php'))
          die ("File tidak ada!");
          include 'pages/form_surat/surat_balasan.php'; break;
        case 'preview_surat_balasan':
          if(!file_exists ('pages/form_surat/preview_surat_balasan.php'))
          die ("File tidak ada!");
          include 'pages/form_surat/preview_surat_balasan.php'; break;

        // surat kenaikan gaji
        case 'surat_kenaikan_gaji':
          if(!file_exists ('pages/form_surat/surat_kenaikan_gaji.php'))
          die ("File tidak ada!");
          include 'pages/form_surat/surat_kenaikan_gaji.php'; break;
        case 'preview_surat_kenaikan_gaji':
          if(!file_exists ('pages/form_surat/preview_surat_kenaikan_gaji.php'))
          die ("File tidak ada!");
          include 'pages/form_surat/preview_surat_kenaikan_gaji.php'; break;

        // surat perintah tugas
        case 'surat_perintah_tugas':
          if(!file_exists ('pages/form_surat/surat_perintah_tugas.php'))
          die ("File tidak ada!");
          include 'pages/form_surat/surat_perintah_tugas.php'; break;
        case 'preview_surat_perintah_tugas':
          if(!file_exists ('pages/form_surat/preview_surat_perintah_tugas.php'))
          die ("File tidak ada!");
          include 'pages/form_surat/preview_surat_perintah_tugas.php'; break;

// ==============================================================================
// NEVER GIVE UP
// END SESSION BAGIAN UNTUK MEMBUAT SURAT


        // surat masuk
        case 'surat_masuk':
          if(!file_exists ('pages/data_surat/surat_masuk.php'))
          die ("File tidak ada!");
          include 'pages/data_surat/surat_masuk.php'; break;

        // surat keluar
        case 'surat_keluar':
          if(!file_exists ('pages/data_surat/surat_keluar.php'))
          die ("File tidak ada!");
          include 'pages/data_surat/surat_keluar.php'; break;

        // surat keluar
        case 'form_surat':
          if(!file_exists ('pages/data_surat/form_surat.php'))
          die ("File tidak ada!");
          include 'pages/data_surat/form_surat.php'; break;

        // logout
        case 'logout':
          if(!file_exists ('pages/login_out.php'))
          die ("File tidak ada!");
          include 'pages/login_out.php';break;
      }
    }
    else {
      if(!file_exists ('pages/pegawai/pegawai_aktif.php'))
      die ("File tidak ada!");
      include 'pages/pegawai/pegawai_aktif.php';
    }
  }
  elseif ($hak_akses == 'pegawai') {
    if ($_GET) {
      // menampilkan menu ?open
      switch ($_GET['user']) {
        // awal
        case '':
          if(!file_exists ('pages/form_surat/surat_permohonan.php'))
          die ("File tidak ada!");
          include 'pages/form_surat/surat_permohonan.php'; break;
        //pengalihan ketika sudah login
        case 'login':
          if(!file_exists ('pages/form_surat/surat_permohonan.php'))
          die ("File tidak ada!");
          include 'pages/form_surat/surat_permohonan.php'; break;
        case 'loginproses':
          if(!file_exists ('pages/form_surat/surat_permohonan.php'))
          die ("File tidak ada!");
          include 'pages/form_surat/surat_permohonan.php'; break;

        case 'profile':
          if(!file_exists ('pages/profile.php'))
          die ("File tidak ada!");
          include 'pages/profile.php'; break;
        // absensi
        case 'absensi_absen_apel':
          if(!file_exists ('pages/absensi/absen_apel/absen_apel.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_apel/absen_apel.php'; break;

        case 'absensi_absen_istirahat':
          if(!file_exists ('pages/absensi/absen_istirahat/absen_istirahat.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_istirahat/absen_istirahat.php'; break;

          case 'absensi_keseluruhan':
            if(!file_exists ('pages/absensi/absen_keseluruhan/absen_keseluruhan.php'))
            die ("File tidak ada!");
            include 'pages/absensi/absen_keseluruhan/absen_keseluruhan.php'; break;

        case 'absensi_absen_pagi':
          if(!file_exists ('pages/absensi/absen_pagi/absen_pagi.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_pagi/absen_pagi.php'; break;

        case 'absensi_absen_pelatihan':
          if(!file_exists ('pages/absensi/absen_pelatihan/absen_pelatihan.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_pelatihan/absen_pelatihan.php'; break;

        case 'absensi_absen_pulang':
          if(!file_exists ('pages/absensi/absen_pulang/absen_pulang.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_pulang/absen_pulang.php'; break;

        case 'absensi_absen_setelah_istirahat':
          if(!file_exists ('pages/absensi/absen_setelah_istirahat/absen_setelah_istirahat.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_setelah_istirahat/absen_setelah_istirahat.php'; break;

        case 'absensi_absen_tugas_apel':
          if(!file_exists ('pages/absensi/absen_tugas_apel/absen_tugas_apel.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_tugas_apel/absen_tugas_apel.php'; break;

// FORM SURAT INI MA MEEENNNN!!!!!!!!!!!!!
          // surat_permohonan
          case 'surat_permohonan':
            if(!file_exists ('pages/form_surat/surat_permohonan.php'))
            die ("File tidak ada!");
            include 'pages/form_surat/surat_permohonan.php'; break;
          case 'preview_surat_permohonan':
            if(!file_exists ('pages/form_surat/preview_surat_permohonan.php'))
            die ("File tidak ada!");
            include 'pages/form_surat/preview_surat_permohonan.php'; break;
          case 'kirim_surat':
            if(!file_exists ('pages/form_surat/kirim_surat.php'))
            die ("File tidak ada!");
            include 'pages/form_surat/kirim_surat.php'; break;
          case 'proses_kirim_surat':
            if(!file_exists ('pages/form_surat/proses_kirim_surat.php'))
            die ("File tidak ada!");
            include 'pages/form_surat/proses_kirim_surat.php'; break;
          // surat_pernyataan
          case 'surat_pernyataan':
            if(!file_exists ('pages/form_surat/surat_pernyataan.php'))
            die ("File tidak ada!");
            include 'pages/form_surat/surat_pernyataan.php'; break;
          case 'preview_surat_pernyataan':
            if(!file_exists ('pages/form_surat/preview_surat_pernyataan.php'))
            die ("File tidak ada!");
            include 'pages/form_surat/preview_surat_pernyataan.php'; break;
          // surat_keterangan
          case 'surat_keterangan':
            if(!file_exists ('pages/form_surat/surat_keterangan.php'))
            die ("File tidak ada!");
            include 'pages/form_surat/surat_keterangan.php'; break;
          case 'preview_surat_keterangan':
            if(!file_exists ('pages/form_surat/preview_surat_keterangan.php'))
            die ("File tidak ada!");
            include 'pages/form_surat/preview_surat_keterangan.php'; break;


// END FORM SURAT INI MA MEEENNNN!!!!!!!!!!!!!
        // logout
        case 'logout':
          if(!file_exists ('pages/login_out.php'))
          die ("File tidak ada!");
          include 'pages/login_out.php';break;
      }
    }
    else {
      if(!file_exists ('pages/pegawai/pegawai_aktif.php'))
      die ("File tidak ada!");
      include 'pages/pegawai/pegawai_aktif.php';
    }
  }
  elseif ($hak_akses == 'kepala_dinas') {
    if ($_GET) {
      // menampilkan menu ?open
      switch ($_GET['user']) {
        // awal
        case '':
          if(!file_exists ('pages/pegawai/pegawai_aktif.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/pegawai_aktif.php'; break;
        //pengalihan ketika sudah login
        case 'login':
          if(!file_exists ('pages/pegawai/pegawai_aktif.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/pegawai_aktif.php'; break;
        case 'loginproses':
          if(!file_exists ('pages/pegawai/pegawai_aktif.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/pegawai_aktif.php'; break;

        //pegawai
        case 'pegawai_aktif':
          if(!file_exists ('pages/pegawai/pegawai_aktif.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/pegawai_aktif.php'; break;
        case 'pegawai_non_aktif':
          if(!file_exists ('pages/pegawai/pegawai_non_aktif.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/pegawai_non_aktif.php'; break;
        case 'cetaklaporan':
          if(!file_exists ('pages/pegawai/cetaklaporan.php'))
          die ("File tidak ada!");
          include 'pages/pegawai/cetaklaporan.php'; break;

        // surat masuk
        case 'surat_masuk':
          if(!file_exists ('pages/data_surat/surat_masuk.php'))
          die ("File tidak ada!");
          include 'pages/data_surat/surat_masuk.php'; break;
        // laporan surat masuk
        case 'laporan_surat_masuk':
          if(!file_exists ('pages/data_surat/laporan_surat_masuk.php'))
          die ("File tidak ada!");
          include 'pages/data_surat/laporan_surat_masuk.php'; break;

          // surat keluar
        case 'surat_keluar':
          if(!file_exists ('pages/data_surat/surat_keluar.php'))
          die ("File tidak ada!");
          include 'pages/data_surat/surat_keluar.php'; break;
          //  laporan surat keluar
          case 'laporan_surat_keluar':
          if(!file_exists ('pages/data_surat/laporan_surat_keluar.php'))
          die ("File tidak ada!");
          include 'pages/data_surat/laporan_surat_keluar.php'; break;

        case 'absensi_keseluruhan':
          if(!file_exists ('pages/absensi/absen_keseluruhan/absen_keseluruhan.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_keseluruhan/absen_keseluruhan.php'; break;
          //laporan absen keseluruhan
        case 'laporan_absensi_seluruh':
          if(!file_exists ('pages/absensi/absen_keseluruhan/laporan_absensi_seluruh.php'))
          die ("File tidak ada!");
          include 'pages/absensi/absen_keseluruhan/laporan_absensi_seluruh.php'; break;

        case 'profile':
          if(!file_exists ('pages/profile.php'))
          die ("File tidak ada!");
          include 'pages/profile.php'; break;
      // logout
        case 'logout':
          if(!file_exists ('pages/login_out.php'))
          die ("File tidak ada!");
          include 'pages/login_out.php';break;
      }
    }
    else {
      if(!file_exists ('pages/pegawai/pegawai_aktif.php'))
      die ("File tidak ada!");
      include 'pages/pegawai/pegawai_aktif.php';
    }
  }

}

// session sebelum login
else {
  if ($_GET) {
    // menampilkan menu ?open
      switch ($_GET['user']) {
        // login
        case '':
        if(!file_exists ("pages/main.php")) die ("File tidak ada!");
        include "pages/main.php";break;
        case 'login':
        if(!file_exists ('pages/login.php')) die ("File tidak ada!");
        include 'pages/login.php'; break;
        case 'loginproses':
        if(!file_exists ('pages/loginproses.php')) die ("File tidak ada!");
        include 'pages/loginproses.php'; break;

    }
  }
  else {
    if(!file_exists ("pages/main.php")) die ("File tidak ada!");
    include "pages/main.php";
  }
}
?>
