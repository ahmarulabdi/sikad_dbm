<div class="row">
    <!-- profile-widget -->
    <div class="col-lg-12">
        <div class="profile-widget profile-widget-info">
            <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                    <h4><?php echo $nama;?></h4>
                    <div class="follow-ava">
                        <img alt="" src="img/avatar/<?php echo $r['gambar']?>" width='150' height='150'>
                    </div>
                    <h6><?php echo $hak_akses;?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page start-->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#profile">
                            <i class="icon-user"></i> Profile
                        </a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#edit-profile">
                            <i class="icon-envelope"></i> Edit Profile
                        </a>
                    </li>
                </ul>
            </header>
            <div class="panel-body">
                <div class="tab-content">
                    <!-- profile -->
                    <div id="profile" class="tab-pane active">
                        <section class="panel">
                            <div class="panel-body bio-graph-info">
                                <h1><strong>Info Pengguna</strong></h1>
                                <div class="row">
                                    <div class="bio-row">
                                      <?php include 'routing/user_config.php'; ?>
                                        <p><span>Nama </span>: <?php echo $r['username']; ?></p>
                                        <p><span>Username </span>: <?php echo $r['password']; ?></p>
                                        <p><span>NIP </span>: <?php echo $r['NIP']; ?></p>
                                        <p><span>E-mail </span>: <?php echo $r['email']; ?></p>
                                        <p><span>Hak Akses </span>: <?php echo $r['hak_akses']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- edit-profile -->
                    <div id="edit-profile" class="tab-pane active">
                        <section class="panel">
                            <div class="panel-body bio-graph-info">
                                <h1><strong>Edit profile pengguna</strong></h1>
                                  <!-- MEMBUAT FORM -->


                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- page end-->
