<?php

include 'koneksi.php';
session_start();

if(!isset($_SESSION['username'])) {
    header("location: index.php");
}

$sukses = "";
$error = "";
$ck1_s4 = "";


if(isset($_POST['kirimSemua'])) {

    $username = $_SESSION['username'];

    $_SESSION['lk1a_s3_konsultasi'] = $_POST['lk1a_s3'];
    $_SESSION['lk1b_s3_konsultasi'] = $_POST['lk1b_s3'];
    $_SESSION['lk1c_s3_konsultasi'] = $_POST['lk1c_s3'];
    $_SESSION['lk1d_s3_konsultasi'] = $_POST['lk1d_s3'];
    $_SESSION['lk1e_s3_konsultasi'] = $_POST['lk1e_s3'];
    $_SESSION['lk2a_s3_konsultasi'] = $_POST['lk2a_s3'];
    $_SESSION['lk3a_s3_konsultasi'] = $_POST['lk3a_s3'];
    $_SESSION['lk3b_s3_konsultasi'] = $_POST['lk3b_s3'];
    $_SESSION['lk3c_s3_konsultasi'] = $_POST['lk3c_s3'];
    $_SESSION['lk3d_s3_konsultasi'] = $_POST['lk3d_s3'];
    $_SESSION['lk3e_s3_konsultasi'] = $_POST['lk3e_s3'];
    $_SESSION['lk3f_s3_konsultasi'] = $_POST['lk3f_s3'];
    $_SESSION['lk3g_s3_konsultasi'] = $_POST['lk3g_s3'];
    $_SESSION['lk3h_s3_konsultasi'] = $_POST['lk3h_s3'];


    if($_POST['lk1a_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk1b_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk1c_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk1d_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk1e_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk1d_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk2a_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk3a_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk3b_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk3c_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk3d_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk3e_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk3f_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk3g_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['lk3h_s3'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }else {
        $username = $_SESSION['username'];
        $cekUser = mysqli_num_rows (mysqli_query($koneksi, "SELECT username FROM keluhan3 WHERE username='$username'"));
        if($cekUser > 0) {
            header("location: finish.php");
        }else {
            $lk1a_s3 = $_POST['lk1a_s3'];
            $lk1b_s3 = $_POST['lk1b_s3'];
            $lk1c_s3 = $_POST['lk1c_s3'];
            $lk1d_s3 = $_POST['lk1d_s3'];
            $lk1e_s3 = $_POST['lk1e_s3'];
            $lk2a_s3 = $_POST['lk2a_s3'];
            $lk3a_s3 = $_POST['lk3a_s3'];
            $lk3b_s3 = $_POST['lk3b_s3'];
            $lk3c_s3 = $_POST['lk3c_s3'];
            $lk3d_s3 = $_POST['lk3d_s3'];
            $lk3e_s3 = $_POST['lk3e_s3'];
            $lk3f_s3 = $_POST['lk3f_s3'];
            $lk3g_s3 = $_POST['lk3g_s3'];
            $lk3h_s3 = $_POST['lk3h_s3'];    
            $error = "";
            $sql = "insert into keluhan3 (username, jk_user, lk1a_s3, lk1b_s3, lk1c_s3, lk1d_s3, lk1e_s3, lk2a_s3, lk3a_s3, lk3b_s3, lk3c_s3, lk3d_s3, lk3e_s3, lk3f_s3, lk3g_s3, lk3h_s3) values ('$username','$_SESSION[jk_user]', '$lk1a_s3', '$lk1b_s3', '$lk1c_s3', '$lk1d_s3', '$lk1e_s3', '$lk2a_s3', '$lk3a_s3', '$lk3b_s3', '$lk3c_s3', '$lk3d_s3', '$lk3e_s3', '$lk3f_s3', '$lk3g_s3', '$lk3h_s3') ";
            $sql2 = mysqli_query($koneksi,$sql);
            if($sql2) {
                $_SESSION['finish'] = "TRUE";
                header("location: success.php");
            }else{
                header("location: error.php");
            }
        }
    }

 }

 if(isset($_POST['kembali'])) {
    header("location: sesi2.php");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Judul website -->
    <title>Web konsultasi</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Sweetalert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Akhir Sweetalert -->

    <!-- Googe fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Kode CSS External -->

    <title>Web konsultasi</title>

    <style>
        :root {
            --bluePrimary: rgba(59, 130, 246, 1);
        }
        
        ::-webkit-scrollbar {
          width: 10px;
          background-color: grey;
        }

        #wraps {
            position: relative;
            /* left: -200px; */
            margin-left: -200px;
        }

        ::-webkit-scrollbar-thumb {
          background-color: white;
          width: 100%;
          height: 10px;
        }

        .logo {
            position: relative;
            top: -3px;
            margin-right: 12px;
        }

        span {
            font-weight: 400;
            font-size: 18px
        }

        .section1 {
            width: 64vw;
            height: max-content;
            background-color: white;
            padding: 20px;
            padding-top: 20px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 12px;
            margin-top: 0px;
        }

        p {
            font-weight: 400;
            line-height: 2em;
        }

        .video {
            width: 100%;
            overflow: hidden;
            margin-top: 40px;
            height: 500px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .video video {
            width: 100%;
            height: 100%;
        }

        p {
            width: 90%;
        }

        .section1 .judul-sesi {
            font-size: 28px;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .btn-download {
            border: none;
            background-color: rgb(0, 74, 212);
            text-align: center;
            cursor: pointer;
            outline: none;
            padding-left: 20px;
            padding-right: 20px;
            height: 44px;
            margin-top: 20px;
            min-width: 140px;
            transform: scale(1);
            color: white;
            border-radius: 6px;
            transition: 0.2s;
        }

        .btn-download:hover {
            transition: 0.2s;
            background-color: rgb(0, 58, 167);
        }

        .upTo {
            position: fixed;
            right: 20px;
            bottom: 20px;
            border-radius: 120px;
            background-color: white;
            z-index: 44;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow:
            4.5px 4.5px 3.6px rgba(0, 0, 0, 0.028),
            12.5px 12.5px 10px rgba(0, 0, 0, 0.04),
            30.1px 30.1px 24.1px rgba(0, 0, 0, 0.052),
            100px 100px 80px rgba(0, 0, 0, 0.08);       
        }

        textarea {
            margin-top: 10px;
        }

        .title-textarea {
            font-size: 16px;
            padding: 10px;
            margin-left: -10px;
            font-weight: 400;
        }

        .h3 {
            margin-top: 60px;
            font-size: 20px;
            background-color: rgb(0, 74, 212);
            color: white;
            border-radius: 36px;
            padding-left: 20px;
            width: max-content;
            padding-right: 20px;
            margin-bottom: 20px;
            font-weight: 400;
            padding-top: 6px;
            padding-bottom: 7px;
        }

        input[type="checkbox"] {
            margin-bottom: 20px;
            margin-right: 16px;
            margin-left: 10px;
            transform: scale(1.3);
        }

        .kirimfile {
            display: flex;
            width: max-content;
            height: max-content;
            padding-right: 35px;
            background-color: white;
            padding-bottom: 20px;
            border-radius: 8px;
            padding-left: 0px;
            align-items: center;
        }

        .kirimfile p {
            position: relative;
            top: 20px;
            left: 20px;
        }

        .kirimfile .btn-wa {
            position: relative;
            top: 12px;
            left: 15px;
        }

        .section1-konsultasi {
            position: sticky;
            top: 0;
            left: 0;
            background: #7EC4FF;
            width: 35vw;
            height: 100vh;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column-reverse;
            padding: 0 40px;
            z-index: 3  ;
        }

        .section1-konsultasi-left {
            width: 100%;
            height: 100%;
            flex-direction: column;
            display: flex;
            margin-left: -12px;
            justify-content: center;
            background: var(--bgColor);
        }

        .section1-konsultasi-left h1 {
            color: white;
            font-size: 64px;
            width: 80%;
            letter-spacing: 0.2em;
            position: relative;
            top: -140px;
            left: 8px;
            margin-bottom: 100px;
            margin-left: auto;
            margin-right: auto;
        }

        .section1-konsultasi-left p {
            font-style: normal;
            font-weight: normal;
            font-size: 22px;
            width: 86%;
            line-height: 36px;
            color: var(--paragraph);
            margin-left: 67px;
            margin-top: 0px;
        }

        .titleX {
            font-weight: bold;
            width: 100%;
            text-decoration: none;
        }

        * {
            text-decoration: none;
        }

        .wrap-button {
            width: max-content;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            display: flex;
        }

        .wrap-button img {
            width: 22px;
            margin-right: 10px;
        }

        .btn-section1-konsultasi {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 20px 30px;
            width: 214px;
            height: 64px;
            box-shadow: 0px 30px 60px rgba(59, 130, 246, 0.25);
            border-radius: 6px;
            flex: none;
            order: 0;
            border: none;
            outline: none;
            flex-grow: 0;
            margin: 0px 15px 0 0;
        }

        .a {
            background-color: var(--bluePrimary);
            color: white;
        }

        .b {
            background-color: var(--blueLight);
            color: var(--bluePrimary);
        }

        .section1-konsultasi-right {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            background: var(--bgColor);
        }

        .section1-konsultasi-right .hero-img {
            width: 160%;
            z-index: 33;
            margin-top: 110px;
        }

        .section1-konsultasi-right .hero-bg {
            position: absolute;
            width: 50%;
            top: 0;
            height: auto;
            right: 0;
        }

        .wrap-konsultasi {
            display: flex;
        }

        .nav-mini {
            position: fixed;
            top: 0px;
            left: 0%;
            width: max-content;
            height: 66px;
            display: flex;
            align-items: center;
            color: white;
            z-index: 99;
            padding-bottom: 10px;
        }
        
        .menu-nav-mini {
            margin-left: auto;
            height: 60px;
            background-color: white ;
            border-radius: 0 0 10px 0;
            width: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logout {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 6px;
            cursor: pointer;
            transition: 0.3s;
            width: 40px;
            margin-left: -5px;
            margin-top: -4px;
            height: 100%;
        }

        .menu-nav-mini:hover {
            filter: brightness(90%);
            transition: 0.3s;
        }

        @media screen and (max-width: 720px) {

            p {
                width: 96%;
            }

            .menu-nav-mini {
                margin-left: auto;
                height: 60px;
                background-color: var(--bluePrimary);
                border-radius: 0 0 10px 0;
                width: 60px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .kirimfile {
                display: block;
                width: max-content;
                height: max-content;
                flex-direction: column;
                justify-content: start;
                background-color: transparent;
                padding-bottom: 20px;
                border-radius: 8px;
                margin-left: 0;
                padding-left: 0px;
            }

            .kirimfile p {
                position: relative;
                top: 10px;
                left: 0px;
                font-size: 12px;
            }

            .kirimfile .btn-wa {
                position: relative;
                top: 4px;
                width: max-content;
                left: -20px;
            }

            .section1 {
                width: 100vw;
            }

            .section1 .judul-sesi {
                font-size: 22px;
                margin-top: 40px;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .video {
                width: 100%;
                overflow: hidden;
                margin-top: 10px;
                height: max-content;
                border-radius: 10px;
            }

            .video video {
                width: 100%;
                height: 100%;
            }

            .section1 .judul-sesi {
                font-size: 28px;
                margin-top: 40px;
                margin-bottom: 20px;
            }

            .btn-download {
                border: none;
                background-color: rgb(0, 74, 212);
                text-align: center;
                cursor: pointer;
                outline: none;
                padding-left: 20px;
                padding-right: 20px;
                height: 44px;
                margin-top: 20px;
                min-width: 140px;
                transform: scale(1);
                color: white;
                border-radius: 6px;
                transition: 0.2s;
            }

            .section1-konsultasi {
                display: none;
            }
        }
    </style>
</head>
<body>

<!-- Konten website -->
<div class="wrap-konsultasi">

    <section class="section1-konsultasi" id="home">
        <div class="section1-konsultasi-left">
            <h1>SESI 3</h1>
        </div>
        <div class="section1-konsultasi-right">
        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_uyhu7hsk.json" mode="bounce" background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop  autoplay></lottie-player>
        </div>
    </section>
    <!-- end kode component section1 -->
    <form action="sesi3.php" method="post">
    <section class="section1" id="section1">
        <?php 
        if($error != "") {
        ?>
        <div class="container mt-4">
            <div class="alert alert-danger" role="alert">
                <img src="./image/warning.svg" alt="warning icon" style="margin-top: -4px" />
                <cmall class="ms-2"><?php echo $error ?></cmall>
            </div>
        </div☻>
        <?php
        }
        ?>
        <div class="nav-mini">
                <a href="index.php" class="alert_notif">
                    <div class="menu-nav-mini">
                        <div class="logout"><img src="./image/home2.svg" alt="icon logout" width="20" /></div>
                    </div>
                </a>
            </div>
            <h2 class="judul-sesi" data-aos="fade-up" data-aos-duration="1200">
                Video Pengantar Sesi 3
            </h2>
            <div class="video" data-aos="fade-up" data-aos-duration="1200">
                <video controls>
                    <source src="./video/vg1.mp4" type="video/mp4" controls autoplay />
                </video>
            </div>
            <br>
            <h2 class="judul-sesi" data-aos="fade-up" data-aos-duration="1200">
                Video Merekontruksi potret kehidupan
            </h2>
            <div class="video" data-aos="fade-up" data-aos-duration="1200">
                <video controls>
                    <source src="./video/vg1.mp4" type="video/mp4" controls autoplay />
                </video>
            </div>
            <br>
            <h2 class="judul-sesi" data-aos="fade-up" data-aos-duration="1200">Mendengarkan Cerita Saya</h2>
            <p data-aos="fade-up" data-aos-duration="1200">
                Anda  menceritakan  kisah-kisah  kecil  tentang  karir  hidup  Anda  dengan  menjawab  
                pertanyaan-pertanyaan  di  sesi 2.  Sekarang,  mari  kita  gabungkan  cerita-cerita  kecil  
                ini  menjadi  cerita  besar,  atau  potret  hidup  Anda.  Potret  hidup  Anda  akan  membantu  
                Anda  mendengar  kisah  karir  hidup  Anda  sendiri,  memahami  perubahan  yang  Anda  buat,  
                dan  memperjelas  pilihan  yang  harus  dibuat.
            </p>
            <h2 class="judul-sesi" data-aos="fade-up" data-aos-duration="1200">Petunjuk arah</h2>
            <p data-aos="fade-up" data-aos-duration="1200">
                Dikatakan  bahwa  ketika  kita  ingin  seseorang  tahu  siapa  kita  sebenarnya,  kita  
                menceritakan  kisah  hidup  kita  kepada  mereka. Itu  karena  kita  membuat  diri  kita 
                dan  dunia  kita  melalui  cerita  yang  kita  ceritakan.  Untuk  mencapai  kesuksesan  karir 
                hidup  terbaik,  Anda  harus  membuat  cerita  tentang  diri  Anda  yang  mengungkapkan  dengan  
                sangat  jelas  siapa  Anda  sebagai  pribadi,  di  mana  Anda  paling  suka  berada  di  dunia  
                kerja,  dan  bagaimana  Anda  ingin  menggunakan  pekerjaan  dengan  cara  yang  paling  
                menguntungkan  untuk  anda sepenuhnya  menjadi  diri  sendiri.  Mari  gunakan  jawaban  Anda  
                atas  pertanyaan-pertanyaan  di  sesi 2  sehingga  Anda  dapat  mendengar  cerita  tentang  
                diri  Anda  sebagai  tokoh  utama  dalam  karir  hidup  Anda  sendiri,  lingkungan  kerja  di  
                mana  Anda  ingin  menjalankan  karir  hidup  Anda,  dan  naskah  yang  menjelaskan  arah  karir  
                hidup,  atau  bagaimana  Anda  dapat  menghubungkan  siapa  diri  Anda  dengan  apa  yang  Anda  
                inginkan  di  dunia  kerja.
            </p>
            <br>
            <h2 class="judul-sesi" data-aos="fade-up" data-aos-duration="1200">Lembar Kerja 1 Tema “Diri”</h2>
            <p data-aos="fade-up" data-aos-duration="1200"><i>(lihat kata-kata yang Anda gunakan untuk menggambarkan pahlawan di sesi ke 2)</i></p>
            
            <p class="title-textarea fw-bold" data-aos="fade-up" data-aos-duration="1200">1. Tuliskam kata sifat pertama yang anda gunakan untuk menggambarkan masing-masing dari mereka!</p>
            <div class="form-floating">
                <textarea class="form-control" name="lk1a_s3" id="floatingTextarea2" style="height: 180px"><?php echo isset($_SESSION['lk1a_s3_konsultasi']) ? $_SESSION['lk1a_s3_konsultasi'] : "" ?></textarea>
            </div>
            <br>
            <p class="title-textarea fw-bold" data-aos="fade-up" data-aos-duration="1200">2. Tuliskan kata-kata serupa yang Anda gunakan lebih dari satu kali untuk menggambarkannya</p>
            <div class="form-floating">
                <textarea class="form-control" name="lk1b_s3" id="floatingTextarea2" style="height: 180px"><?php echo isset($_SESSION['lk1b_s3_konsultasi']) ? $_SESSION['lk1b_s3_konsultasi'] : "" ?></textarea>
            </div>
            <br>
            <p class="title-textarea fw-bold" data-aos="fade-up" data-aos-duration="1200">3. Tuliskan dua tau lebih kesamaan yang dimiliki oleh pahlawan dengan anda!</p>
            <div class="form-floating">
                <textarea class="form-control" name="lk1c_s3" id="floatingTextarea2" style="height: 180px"><?php echo isset($_SESSION['lk1c_s3_konsultasi']) ? $_SESSION['lk1c_s3_konsultasi'] : "" ?></textarea>
            </div>
            <br>
            <p class="title-textarea fw-bold" data-aos="fade-up" data-aos-duration="1200">4. Buat daftra kata atau frasa penting lainnya yang anda gunakan untuk menggambarkannya!</p>
            <div class="form-floating">
                <textarea class="form-control" name="lk1d_s3" id="floatingTextarea2" style="height: 180px"><?php echo isset($_SESSION['lk1d_s3_konsultasi']) ? $_SESSION['lk1d_s3_konsultasi'] : "" ?></textarea>
            </div>
            
            <p class="mt-4">
                Ini  adalah  Anda,  inti  diri  Anda.  Perhatikan  baik-baik  kata-kata  yang  Anda  gunakan  untuk  
                menggambarkan  pahlawan  Anda.  Anda  telah  menggambarkan  diri  Anda  sendiri!  Anda  mengambil  
                hal-hal  yang  Anda  sukai  dari  mereka  dan  menggabungkannya  untuk  membuat  Anda.  
                <br>
                <br>
                <b>Sekarang, dengan  menggunakan  kata-kata  yang  Anda  tulis  di  atas,  ceritakan  dalam  dua  sampai  empat 
                    kalimat  siapa  Anda  dan  akan  menjadi  siapa  Anda.</b>
                </p>

            <p class="title-textarea fw-bold" data-aos="fade-up" data-aos-duration="1200">Saya menjadi orang yang......</p>
            <div class="form-floating">
                <textarea class="form-control" name="lk1e_s3" id="floatingTextarea2" style="height: 300px"><?php echo isset($_SESSION['lk1e_s3_konsultasi']) ? $_SESSION['lk1e_s3_konsultasi'] : "" ?></textarea>
            </div>
            
            <h2 class="judul-sesi" data-aos="fade-up" data-aos-duration="1200">Lembar Kerja 2 Tema  “Setting” </h2>
            <p data-aos="fade-up" data-aos-duration="1200">
                Di  sinilah  Anda  suka  menjadi  diri  Anda  sendiri,  minat  karier  Anda.  Ini  adalah  jenis  
                tempat  di  mana  Anda  ingin  bekerja,  orang-  orang  yang  Anda  inginkan,  masalah  yang  ingin 
                Anda  tangani,  dan  prosedur  yang  ingin  Anda  gunakan.  Anda  ingin  menempatkan  diri  Anda  dalam  
                lingkungan  yang  menarik  minat  Anda  dan  di  mana  Anda  menikmati  orang-orang  yang  bekerja  
                dengan  Anda.  
                <br>
                <br>
                <b>
                    Dengan  menggunakan  kata-kata  yang  Anda  tulis  dalam  ringkasan  Anda  di  atas,  
                    ceritakan  dalam  2-4  kalimat  di  mana  Anda  ingin  berada.
                </b>
            </p>

            <p class="title-textarea fw-bold" data-aos="fade-up" data-aos-duration="1200">Saya suka berada ditempat mana......</p>
            <div class="form-floating">
                <textarea class="form-control" name="lk2a_s3" id="floatingTextarea2" style="height: 300px"><?php echo isset($_SESSION['lk2a_s3_konsultasi']) ? $_SESSION['lk2a_s3_konsultasi'] : "" ?></textarea>
            </div>
            <h2 class="judul-sesi" data-aos="fade-up" data-aos-duration="1200">Lembar Kerja 3 Ringkasan Potret</h2>
            <br>
            <table class="table" border="1" data-aos="fade-up" data-aos-duration="1200">
                <thead>
                <tr>
                <th scope="col" style="width: 35%;">Cerita karir saya</th>
                <th scope="col">Ringkasan Potret</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Diri sendiri</th>
                <td>Saya menjadi :
                <br>
                <br>
                <div class="mb-3">
                    <input type="text" name="lk3a_s3" value="<?php echo isset($_SESSION['lk3a_s3_konsultasi']) ? $_SESSION['lk3a_s3_konsultasi'] : "" ?>" style="height: max-content;border: 1px dashed black;border-left: 0;border-top: 0; border-right: 0;outline: none;border-radius: 0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                </td>
                </tr>
                <tr>
                <th scope="row">Setting</th>
                <td>Saya suka tempat di mana orang melakukan kegiatan seperti :
                <br>
                <br>
                <div class="mb-3">
                    <input type="text" name="lk3b_s3" value="<?php echo isset($_SESSION['lk3b_s3_konsultasi']) ? $_SESSION['lk3b_s3_konsultasi'] : "" ?>" style="height: max-content;border: 1px dashed black;border-left: 0;border-top: 0; border-right: 0;outline: none;border-radius: 0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                </td>
                </tr>
                <tr>
                <th scope="row">Naskah</th>
                <td>
                Plot dari buku atau film favorit saya adalah :
                <br>
                <br>
                <div class="mb-3">
                    <input type="text" name="lk3c_s3" value="<?php echo isset($_SESSION['lk3c_s3_konsultasi']) ? $_SESSION['lk3c_s3_konsultasi'] : "" ?>" style="height: max-content;border: 1px dashed black;border-left: 0;border-top: 0; border-right: 0;outline: none;border-radius: 0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <br>
                Oleh karena itu, di tempat-tempat ini saya ingin :
                <br>
                <br>
                <div class="mb-3">
                    <input type="text" name="lk3d_s3" value="<?php echo isset($_SESSION['lk3d_s3_konsultasi']) ? $_SESSION['lk3d_s3_konsultasi'] : "" ?>" style="height: max-content;border: 1px dashed black;border-left: 0;border-top: 0; border-right: 0;outline: none;border-radius: 0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                </td>
                </tr>
                <tr>
                <th scope="row">
                    Rumus Kesuksesan <i>gunakan diri anda, setting dan skrip untuk menulis satu kalimat kehidupan karir anda</i>
                </th>
                <td>
                    Saya akan sangat bahagia dan sukses ketika saya :
                <br>
                <br>
                Bisa menjadi
                <div class="mb-3">
                    <input type="text" name="lk3e_s3" value="<?php echo isset($_SESSION['lk3e_s3_konsultasi']) ? $_SESSION['lk3e_s3_konsultasi'] : "" ?>" style="height: max-content;border: 1px dashed black;border-left: 0;border-top: 0; border-right: 0;outline: none;border-radius: 0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <br>
                di tempat-tempat dimana orang-orang 
                <div class="mb-3">
                    <input type="text" name="lk3f_s3" value="<?php echo isset($_SESSION['lk3f_s3_konsultasi']) ? $_SESSION['lk3f_s3_konsultasi'] : "" ?>" style="height: max-content;border: 1px dashed black;border-left: 0;border-top: 0; border-right: 0;outline: none;border-radius: 0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <br>jadi saya bisa 
                <div class="mb-3">
                    <input type="text" name="lk3g_s3" value="<?php echo isset($_SESSION['lk3g_s3_konsultasi']) ? $_SESSION['lk3g_s3_konsultasi'] : "" ?>" style="height: max-content;border: 1px dashed black;border-left: 0;border-top: 0; border-right: 0;outline: none;border-radius: 0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                </tr>
                <tr>
                <th scope="row">Saran diri</th>
                <td>
                    Moto  saya  berisi  nasihat  terbaik  saya  untuk  diri  saya  sendiri  untuk  menangani  
                    masalah  karir  saya.  Untuk menerapkan  formula  sukses  saya  sekarang,  
                    saran  terbaik  yang  bisa  saya  berikan  pada  diri  saya  sendiri  adalah  
                    <i>(tulis  moto  Anda  di  sini) : <i>
                <br>
                <br>
                <div class="mb-3">
                    <input type="text" name="lk3h_s3" value="<?php echo isset($_SESSION['lk3h_s3_konsultasi']) ? $_SESSION['lk3h_s3_konsultasi'] : "" ?>" style="height: max-content;border: 1px dashed black;border-left: 0;border-top: 0; border-right: 0;outline: none;border-radius: 0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                </td>
                </tr>
            </tbody>
            </table>
            <br>
            <div class="d-flex ms-auto justify-content-end">
                <a href="index.php"><button class="btn btn-danger">Batalkan</button></a>
                <a href="sesi4.php"><button type="submit" name="kirimSemua" class="btn btn-primary ms-2">Selanjut - Sesi 4</button></a>
            </div>
    </section>
    </form>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- Sweetalert -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<!-- Akhir Sweetalert -->

<script>
    $('.alert_notif').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
            title: "Akhiri konsultasi ini?",            
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonColor: '#3085d6',
            cancelButtonText: "Batal"
        
        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if(result.isConfirmed){
                window.location.href = getLink
            }
        })
        return false;
    });
</script>



<!-- Akhir pembungkus semua kode halaman utama -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Mengubungkan js bootstrap 5 -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>