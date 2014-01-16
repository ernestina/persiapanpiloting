<!DOCTYPE html>
<html>
    <head>
		
	<script src="<?php echo URL; ?>public/js/Chart.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery-2.0.3.min.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
        <script src="<?php echo URL; ?>public/js/myjs.js"></script>
        <script src="<?php echo URL; ?>public/js/teamdf-jquery-number/jquery.number.js"></script>
        <script src="<?php echo URL; ?>public/js/gaugejs/raphael.2.1.0.min.js"></script>
        <script src="<?php echo URL; ?>public/js/gaugejs/justgage.1.0.1.min.js"></script>
        <script src="<?php echo URL; ?>public/js/Chart.js"></script>
        <script src="<?php echo URL; ?>public/js/paging.js"></script>
        <link href="<?php echo URL; ?>public/js/jquery-ui-1.10.3/themes/base/jquery.ui.all.css" rel="stylesheet">
        <link href="<?php echo URL; ?>public/css/ernest.css" rel="stylesheet">
        <link href="<?php echo URL; ?>public/css/dialog.css" rel="stylesheet">

        <script type="text/javascript">
            $(function() {
                $('#datepicker').datepicker();
                $('#datepicker1').datepicker();
                $('#datepicker2').datepicker();
            });
        </script>
    </head>
    <header><img src="<?php echo URL; ?>public/img/span-putih.png" width="40px" height="48px"></header>
    <body>
        <div id="wrapper">
            <div id="menu">
                <ul>
                    <li class="nav"><a href="#"></a></li>
                    <li class="nav"><a href="#"></a></li>
                    <li class="nav"><a href="#"></a></li>
                    <?php
                    if (Session::get('role') == ADMIN) {
                        echo '<li class="nav"><a href=' . URL . 'dataKppn/rekapAll>Beranda</a></li>';
                        echo '<li class="nav"><a href=' . URL . 'dataKppn/rekapKanwil/2000>Per Kanwil</a></li>';
                        echo '<li class="nav"><a href=' . URL . 'dataKppn/rekapKppn>Form KPPN</a></li>';
                    }
                    if (Session::get('role') == KPPN) {
                        echo '<li class="nav"><a href=' . URL . 'dataKppn/formIsian>Form Isian</a></li>';
                    }
                    if (Session::get('role') == KANWIL) {
                        echo '<li class="nav"><a href=' . URL . 'dataKppn/formIsian>Form Isian</a></li>';
                    }
                    if (Session::get('role') == BA999) {
                        echo '<li class="nav"><a href=' . URL . 'dataBa/addDataBa>BA 999</a></li>';
                    }
                    if (Session::get('role') == PKN) {
                        echo '<li class="nav"><a href=' . URL . 'dataPkn/addDataPkn>PKN</a></li>';
                    }
                    ?>
                    <li class="nav">
                        <a href="<?php echo URL; ?>auth/logout">Logout</a>
                    </li>
                    <li class="nav" style="float: right; font-size: 70%">
                        <a style="color: #F2C45A ">Selamat datang,<?php echo Session::get('user') ?></a>
                    </li>
                </ul>
            </div>





