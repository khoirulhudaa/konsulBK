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
    
    $_SESSION['no_telephone_konsultasi'] = $_POST['no_telephone'];
    $_SESSION['instagram_konsultasi'] = $_POST['instagram'];
    $_SESSION['email_konsultasi'] = $_POST['email'];


    if($_POST['email'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['no_telephone'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else if($_POST['instagram'] == "") {
        $error = "Tolong isi semua pertanyaan yang ada!";
    }
    else {
        $username = $_SESSION['username'];
        $cekUser = mysqli_num_rows (mysqli_query($koneksi, "SELECT username FROM keluhan5 WHERE username='$username'"));
        if($cekUser > 0) {
            header("location: finish.php");
        }else {
            $no_telephone = $_POST['no_telephone'];
            $instagram = $_POST['instagram'];
            $email = $_POST['email'];
            $error = "";
            $sql = "insert into keluhan5 (username, jk_user, instagram, email, no_telephone) values ('$username','$_SESSION[jk_user]', '$instagram', '$email', '$no_telephone') ";
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
    header("location: sesi4.php");
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
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
            <h1>SESI 5</h1>
        </div>
        <div class="section1-konsultasi-right">
        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_uyhu7hsk.json" mode="bounce" background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop  autoplay></lottie-player>
        </div>
    </section>
    <!-- end kode component section1 -->
    <form action="sesi5.php" method="post">
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
            <h2 class="judul-sesi" data-aos="fade-up" data-aos-duration="1200">Video Pengantar Sesi 5 </h2>
            <div class="video" data-aos="fade-up" data-aos-duration="1200">
                <video controls>
                    <source src="./video/vg1.mp4" type="video/mp4" controls autoplay />
                </video>
            </div>
            <div class="mb-3">
                <label data-aos="fade-up" data-aos-duration="1200" for="exampleInputEmail1" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                <input data-aos="fade-up" data-aos-duration="1200" type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo isset($_SESSION['email_konsultasi']) ? $_SESSION['email_konsultasi'] : "" ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label data-aos="fade-up" data-aos-duration="1200" for="exampleInputPassword1" class="form-label fw-bold">No telephone <span class="text-danger">*</span></label>
                <input data-aos="fade-up" data-aos-duration="1200" type="number" name="no_telephone" class="form-control" id="exampleInputPassword1" value="<?php echo isset($_SESSION['no_telephone_konsultasi']) ? $_SESSION['no_telephone_konsultasi'] : "" ?>">
            </div>
            <div class="mb-3">
                <label data-aos="fade-up" data-aos-duration="1200" for="exampleInputPassword1" class="form-label fw-bold">Instagram (jika ada)</label>
                <input data-aos="fade-up" data-aos-duration="1200" type="text" class="form-control" name="instagram" id="exampleInputPassword1" value="<?php echo isset($_SESSION['instagram_konsultasi']) ? $_SESSION['instagram_konsultasi'] : "" ?>">
            </div>
            <br>
            <hr>
            <br>
            </form>
            <p data-aos="fade-up" data-aos-duration="1200">
                Hallo temen-teman, selamat datang di sesi konseling ke 5
                Bagaimana perasaan teman-teman setelah mengikuti beberapa sesi konseling, semoga bermanfaat. 
                Video-video yang sudah diputar di harapkan temen-temen dapat memahami dan mengaplikasikan pesan apa yang telah 
                diambil dari berbagai video yang sudah diputar. Video tersebut dapat membuat teman-teman bisa sadar bahwa 
                rencana dan tujuan masa depan perlu dipikirkan dan perlu usaha untuk mencapainya dengan melatih diri untuk 
                menuliskan ulang apa saja list mimpi, tujuan bahkan rencana yang ingin dilakukan sesuai dengan potensi yang 
                dimiliki oleh teman-teman semua, sehingga bisa fokus untuk mengerjakannya. Untuk lebih jelas lagi silahkan 
                mengikuti sesi konseling interaktif yang dapat di pesan melalui platform ini. 
                <br>
                <br>
                <b>
                    Selamat tinggal Conselll for you :)
                </b>
            </p>
            <br>
            <hr>
            <div class="d-flex ms-auto justify-content-end">
                <a href="index.php"><button class="btn btn-danger">Batalkan</button></a>
                <button name="kirimSemua" type="submit" class="btn btn-primary ms-2">Kirim jawaban</button>
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