<?php 

session_start();
unset($_SESSION['lk1_s1_konsultasi']);
unset($_SESSION['lk2_s1_konsultasi']);
unset($_SESSION['lk1_s2_konsultasi']);
unset($_SESSION['lk2a_s2_konsultasi']);
unset($_SESSION['lk2b_s2_konsultasi']);
unset($_SESSION['lk2c_s2_konsultasi']);
unset($_SESSION['lk2d_s2_konsultasi']);
unset($_SESSION['lk2e_s2_konsultasi']);
unset($_SESSION['lk1a_s3_konsultasi']);
unset($_SESSION['lk1b_s3_konsultasi']);
unset($_SESSION['lk1c_s3_konsultasi']);
unset($_SESSION['lk1d_s3_konsultasi']);
unset($_SESSION['lk1e_s3_konsultasi']);
unset($_SESSION['lk2a_s3_konsultasi']);
unset($_SESSION['lk3a_s3_konsultasi']);
unset($_SESSION['lk3b_s3_konsultasi']);
unset($_SESSION['lk3c_s3_konsultasi']);
unset($_SESSION['lk3d_s3_konsultasi']);
unset($_SESSION['lk3e_s3_konsultasi']);
unset($_SESSION['lk3f_s3_konsultasi']);
unset($_SESSION['lk3g_s3_konsultasi']);
unset($_SESSION['lk3h_s3_konsultasi']);
unset($_SESSION['lk1_s4_konsultasi']);
unset($_SESSION['lk1b_s4_konsultasi']);
unset($_SESSION['ck1_s4_konsultasi']);
unset($_SESSION['ck2_s4_konsultasi']);
unset($_SESSION['ck3_s4_konsultasi']);
unset($_SESSION['ck4_s4_konsultasi']);
unset($_SESSION['ck5_s4_konsultasi']);
unset($_SESSION['ck6_s4_konsultasi']);
unset($_SESSION['lainnyaa_s4_konsultasi']);
unset($_SESSION['ck7_s4_konsultasi']);
unset($_SESSION['ck8_s4_konsultasi']);
unset($_SESSION['ck9_s4_konsultasi']);
unset($_SESSION['ck10_s4_konsultasi']);
unset($_SESSION['ck11_s4_konsultasi']);
unset($_SESSION['lainnyab_s4_konsultasi']);
unset($_SESSION['lk2_s4_konsultasi']);
unset($_SESSION['email_konsultasi']);
unset($_SESSION['no_telephone_konsultasi']);
unset($_SESSION['instagram_konsultasi']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- End Meta -->

    <!-- Link fontawesome -->
    <link rel="stylesheet" href="./assets/icons/css/all.min.css">
    <!-- End link fontawesome -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- bootstrap 5.0.2 -->
    <!-- <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- end bootstrap 5.0.2 -->

    <!-- kode CSS -->
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/responsive.css">
    <!-- end kode CSS -->

    <!-- Title -->
    <title>Web konsultasi</title>
    <!-- End Title -->
</head>
<body>
    <!-- kode component navbar -->
    <section class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" onclick="reload()"><img src="./image/logo1.png" class="logo" data-aos="fade-down" alt="logo" width="20" /></a>
            <div class="ss">
                <span class="ms-auto d-flex">
                <?php 
                    if(isset($_SESSION['username'])) {
                ?>
                    <a href="#"><button class="btn-navbar2" data-aos="fade-down"><img src="./image/user.png" alt="user" width="30" class="mr-2 bg-primary rounded-circle p-2"> <?php echo $_SESSION['username'] ?></button></a>
                    <a href="logoutUser.php"><button class="btn btn-danger rounded ms-4 pb-2 pt-2" data-aos="fade-down"><img src="./image/logout.png" alt="icon-logout" width="18" /></button></a>
                <?php 
                } else {
                    ?>
                <a href="./loginUser.php" data-aos="fade-down"><button class="btn-navbar3">Masuk</button></a>
                <?php 
                } 
                ?>
                </span>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" data-aos="fade-down" href="#benefit">Benefit</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-aos="fade-down" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-aos="fade-down" href="https://wa.me/6281225900804?text=Hallo pak/bu. Saya ingin berkonsultasi" target="_blank">Kontak</a>
                </li>
            </ul>
            </div>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> -->
            <!-- </button> -->
            <div class="collapse navbar-collapse" id="navbarText">
                <span class="navbar-text ms-auto d-flex">
                <?php 
                    if(isset($_SESSION['username'])) {
                ?>
                   <button class="btn-navbar2" data-aos="fade-down"><img src="./image/user.png" alt="user" width="30" class="mr-2 bg-primary rounded-circle p-2"> <?php echo $_SESSION['username'] ?></button>
                    <a href="#" data-aos="fade-down"><button data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-danger rounded ms-4 pb-2 pt-2"><img src="./image/logout.png" alt="icon-logout" width="18" /></button></a>
                <?php 
                } else {
                    ?>
                <a href="./loginUser.php" data-aos="fade-down"><button class="btn-navbar">Masuk</button></a>
                <?php 
                } 
                ?>
                </span>
            </div>
        </div>
    </section>
    <!-- end kode component navbar -->


    <!-- kode component section1 -->
    <section class="section1" id="home">
        <div class="section1-left">
            <h1 data-aos="fade-up" data-aos-duration="1200">life design, your life reimagined</h1>
            <p data-aos="fade-up" data-aos-duration="1200">
            Bagikan cerita dengan kami dan dapatkan panduan. Kami akan 
            membantu Anda menemukan potensi Anda.
            </p>
            <?php 
                if(isset($_SESSION['finish'])) {
            ?>
             <div class="wrap-button" data-aos="fade-up" data-aos-duration="1200">
                <?php 
                    if(isset($_SESSION['username']) && isset($_SESSION['sesi'])) {
                ?>  
                <?php 
                    if(isset($_SESSION['finish'])) {
                ?>  
                    <a href="finish.php"><button class="btn-section1 a">Konsultasi Sesi <?php echo $_SESSION['sesi'] ?></button></a>
                    <?php 
                }else {  
                    ?>
                    <a href="./sesi<?php echo $_SESSION['sesi'] ?>.php"><button class="btn-section1 a">Konsultasi Sesi <?php echo $_SESSION['sesi'] ?></button></a>
                <?php
                }
                ?>
                <?php
                }else {
                ?>
                    <button class="btn-section1 a" data-bs-toggle="modal" data-bs-target="#exampleModal">Konsultas</button>
                <?php
                }
                ?>
                    <a href="https://wa.me/6281225900804?text=Hallo pak/bu. Saya ingin berkonsultasi" target="_blank"><button class="btn-section1 b">Hubungi</button></a>
            </div>
            <?php
            } else {
            ?>
            <div class="wrap-button" data-aos="fade-up" data-aos-duration="1200">
                <?php 
                    if(isset($_SESSION['username']) && isset($_SESSION['sesi'])) {
                ?>  
                <?php 
                    if(isset($_SESSION['finish'])) {
                ?>  
                    <a href="sesi<?php echo $_SESSION['sesi'] ?>.php"><button class="btn-section1 a">Konsultasi Sesi <?php echo $_SESSION['sesi'] ?></button></a>
                    <?php 
                }else {  
                    ?>
                    <a href="./sesi<?php echo $_SESSION['sesi'] ?>.php"><button class="btn-section1 a">Konsultasi Sesi <?php echo $_SESSION['sesi'] ?></button></a>
                <?php
                }
                ?>
                <?php
                }else {
                ?>
                    <button class="btn-section1 a" data-bs-toggle="modal" data-bs-target="#exampleModal">Mulai konsultasi</button>
                <?php
                }
                ?>
                    <a href="https://wa.me/6281225900804?text=Hallo pak/bu. Saya ingin berkonsultasi" target="_blank"><button class="btn-section1 b">Hubungi</button></a>
            </div>
            <?php    
            }
            ?>
        </div>
        <div class="section1-right">
            <img src="./image/konselor2.png" class="hero-img" alt="images" data-aos="fade-up" data-aos-duration="3000">
            <div class="kotak" data-aos="fade-up" data-aos-duration="1000">

            </div>
            <!-- <img src="./image/Rectangle 4.png" class="hero-bg" alt="images" lazy="loading"> -->
        </div>
    </section>
    <!-- end kode component section1 -->


    <!-- kode component section2 -->
    <section class="section2" id="benefit">
        <img src="./image/cs2.svg" alt="cs" class="cs1">
        <img src="./image/cs3.svg" alt="cs" class="cs4">
        <h1 data-aos="fade-up" data-aos-duration="1000">Alasan mengapa kamu harus berkonsultasi kepada BK (Bimbingan Konseling)</h1>
        <div class="wrap-section2">
            <div class="card-section2 card1" data-aos="fade-up" data-aos-duration="1000">
                <img src="./image/bn1.png" alt="logo">
                <br>
                <br>
                <h4>Berani berbicara</h4>
                <p>
                  Kamu akan lebih berani untuk bercerita dan berdialog dengan seseorang yang sudah ataupun belum dikenal. Tenang semua akan baik baik saja kok :)
                </p>
              </div>
              <div class="card-section2 card1" data-aos="fade-up" data-aos-duration="1600">
                <img src="./image/bn2.png" alt="logo">
                <br>
                <br>
                <h4>Percaya diri</h4>
                <p>
                  Kamu bisa menjadi orang yang percaya diri. Berani tampil dan menjadi beda dari yang lain. Kamu hebat dan lebih baik dari sebelumnya
                </p>
              </div>
              <div class="card-section2 card1" data-aos="fade-up" data-aos-duration="2000">
                <img src="./image/bn3.png" alt="logo">
                <br>
                <br>
                <h4>Wawasan</h4>
                <p>
                    Kamu akan mendapatkan pengetahuan baru loh...konselor yang membimbingmu adalah orang yang berpengalaman dan hebat kok :)
                </p>
            </div>
        </div>
    </section>
    <!-- end kode component section2 -->

    <!-- kode komponent section 7 -->
    <section class="section7" id="tentang">
        <div class="section7-right">
            <img src="./image/konselor1.png" alt="card" lazy="loading" data-aos="fade-up" data-aos-duration="1200">
        </div>
        <div class="section7-left">
          <img src="./image/cs1.svg" alt="cs" class="cs2">
          <img src="./image/cs3.svg" alt="cs" class="cs5">
          <br>
            <h2 data-aos="fade-up" data-aos-duration="1000">Apakah kalian tahu tentang life design?</h2>
            <br>
            <p data-aos="fade-up" data-aos-duration="1200"> 
                Tempat dimana kamu bisa menceritakan segala hal yang ada di hidupmu. Kamu mendapatkan tema untuk mengobrol dan bertanya tentang hal-hal yang ingin kamu ketahui. Pembimbing di ruang BK selalu ada untuk kamu dan tak perlu khawatir kok.
            </p>
        </div>
        <img src="./image/cs3.svg" alt="cs" class="cs3">
    </section>
    <!-- End kode komponent section 7 -->

    <img src="./image/wave.svg" alt="gelombang" class="wave" style="position: relative;top:  60px;">
    <!-- kode komponent footer -->
    <footer>
        <div class="wrap-footer">
            <img src="./image/logo2.png" alt="logo" class="mylogo" data-aos="fade-up" data-aos-duration="1000">
            <p data-aos="fade-up" data-aos-duration="1400">
                Website untuk melakukan konsultasi dengan <span class="fw-bold">BK SMKN 1 Kota cirebon</span>. Kalian bisa bertanya dan bercerita tentang hidup dan permasalahan yang sedang dihadapi saat ini. 
            </p>
        </div>
        <small>COPYRIGHT © 2022 — Life Design</small>
    </footer>
    <!-- End kode komponent footer -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mau konsultasi 😀 ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Kamu harus melakukan login telebih dahulu sebelum melakukan konsultasi dengan kami</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <a href="loginUser.php"><button type="button" class="btn btn-primary">Masuk</button></a>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin mau keluar 😀 ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Ketika sudah keluar maka saat ingin konsultasi lagi kamu harus masuk ulang</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <a href="logoutUser.php"><button type="button" class="btn btn-danger">Keluar</button></a>
            </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Kode js -->
    <script>
        function reload() {
            window.location.reload();
        }
    </script>
    <!-- <script src="./assets/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- End kode js -->
</body>
</html>