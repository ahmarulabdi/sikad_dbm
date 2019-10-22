<header class="header yellow-bg">
      <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>SIKAD </b><span class="lite"><b>DINAS BINAMARGA PROVINSI RIAU</b></span></a>
      <!--logo end-->
      <?php if (isset($_SESSION['SES_LOGIN'])): ?>
        <!-- hak akses login as administrator -->

          <div class="top-nav notification-row">

            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
              <!-- user login dropdown start-->
                <li class="dropdown">

                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span>


                        </span>
                        <span class="profile-ava">
                          <?php include 'routing/user_config.php'; ?>
                            <img alt="" src="img/avatar/<?php echo $r['gambar']?>" width='30' height='30'>
                        </span>
                        <span class="username">
                          <?php
                            $modal=mysqli_query($conn,"SELECT * FROM pengguna");
                            $r=mysqli_fetch_array($modal);
                            $nip = $r['NIP'];
                            $getnama=mysqli_query($conn,"SELECT *FROM pegawai where NIP = '$nip'");
                            $r2=mysqli_fetch_array($getnama);
                            $nama = $r2['Nama'];
                            echo $nama;
                           ?>
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="?user=profile"><i class="icon_profile"></i>Profil Saya</a>
                        </li>
                        <li>
                            <a class="btn btn-warning" data-toggle="modal" href="#myModal2">
                                  Log Out
                              </a>

                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
          </div>


      <?php endif; ?>
    </div>

</header>
<!--header end-->
