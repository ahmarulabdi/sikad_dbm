<?php session_start(); ?>
<section id="container" >

    <?php require_once 'pages/header.php'; ?>
    <?php require_once 'pages/sidebar.php'; ?>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <?php require_once 'routing/master.php'; ?>
        </section>
    </section>
    <!--main content end-->


</section>
