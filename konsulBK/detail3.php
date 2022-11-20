<?php

include 'koneksi.php';
session_start();

$op = "";

    if(isset($_GET['op'])) {
        $op = $_GET['op'];
    }else {
        $op = '';
    }

    $username = "";
    $jk_user = "";
    $alamat_user = "";
    $no_telephone = "";
    $facebook = "";
    $email = "";
  
    $lk1a_s3 = "";
    $lk1b_s3 = "";
    $lk1c_s3 = "";
    $lk1d_s3 = "";
    $lk1e_s3 = "";
    $lk2a_s3 = "";
    $lk3a_s3 = "";
    $lk3b_s3 = "";
    $lk3c_s3 = "";
    $lk3d_s3 = "";
    $lk3e_s3 = "";
    $lk3f_s3 = "";
    $lk3g_s3 = "";
    $lk3h_s3 = "";

   
    if($op == 'detail') {
        $id = $_GET['id'];
        $sql = "select * from keluhan3 where id_keluhan = '$id'";
        $sql2 = mysqli_query($koneksi, $sql);
        $sql3 = mysqli_fetch_array($sql2);
        $username = $sql3['username'];
        $jk_user = $sql3['jk_user'];
        $lk1a_s3 = $sql3['lk1a_s3'];
        $lk1b_s3 = $sql3['lk1b_s3'];
        $lk1c_s3 = $sql3['lk1c_s3'];
        $lk1d_s3 = $sql3['lk1d_s3'];
        $lk1e_s3 = $sql3['lk1e_s3'];
        $lk2a_s3 = $sql3['lk2a_s3'];
        $lk3a_s3 = $sql3['lk3a_s3'];
        $lk3b_s3 = $sql3['lk3b_s3'];
        $lk3c_s3 = $sql3['lk3c_s3'];
        $lk3d_s3 = $sql3['lk3d_s3'];
        $lk3e_s3 = $sql3['lk3e_s3'];
        $lk3f_s3 = $sql3['lk3f_s3'];
        $lk3g_s3 = $sql3['lk3g_s3'];
        $lk3h_s3 = $sql3['lk3h_s3'];
        $tgl_konsultasi = $sql3['tgl_konsultasi'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Mengambil font eksternal -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Akhir mengambil font eksternal -->
    
    <!-- Menghubungkan CSS dengan kode HTML -->
    <!-- <link rel="stylesheet" href="./styles/index.css"> -->
    <!-- akhir menghubungkan CSS -->
    
    <!-- Menghubungkan bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Akhir menghubungkan bootstrap 5 -->

    <title>Detail keluhan</title>

    <style>
        body {
            overflow-x: hidden;
        }

        .form-floating {
            font-size: 12px;
        }

        .bgss {
            width: 100%;
            height: auto;
        }

        .judul-sesii {
            width: max-content;
            height: 40px;
            border-radius: 10px;
            background-color: #0d6efd;
            color: white;
            font-size: 16px;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 4px 20px;
        }

        .foto, .notif {
            width: 40px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2px;
            border-radius: 1000px;
            background-color: transparent;
            border: 1px solid black;
        }

        .foto img, .notif img {
            width: 90%;
        }

        ul li:hover {
            transition: 0.4s;
            transform: scale(0.98);
            margin-left: 6px;
        }

        .title-info {
            font-weight: 600;
            font-size: 26px;
        }

        .kolom {
            margin-bottom: 50px;
        }

        .kolom p {
            width: 86%;
            line-height: 2em;
            text-align: left;
        }

        .wrap-sosmed {
            display: flex;
            width: 100%;
            position: relative;
            left: -46px;
            transform: scale(0.9);
            margin-left: 22px;
        }

        .sosmed {
            width: max-content;
            padding-left: 10px;
            padding-right: 20px;
            display: flex;
            align-items: center;
            margin-right: 20px;
            border-radius: 36px;
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .sosmed-wa {
            background-color:  #209c01;
        }

        .sosmed-facebook {
            background-color:  #013f9c;
        }
        
        .sosmed-email {
            background-color:  #f0e43b;
        }

        .wa {
            position: relative;
            top: -2px;
            width: 28px;
        }
        
        .ig {
            position: relative;
            left: -6px;
            margin-left: 9px;
            width: 38px;
        }
        
        .line {
            width: 30px;
        }

        .sosmed-facebook p {
            position: relative;
            left: -8px;
        }
        
        .sosmed p {
            position: relative;
            top: 6px;
            margin-left: 8px;
            color: white;
        }

        .section1 {
            width: 95%;
            height: max-content;
            background-color: rgb(245, 245, 245);
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-top: 8px;
            border-radius: 12px;
            margin-left: 20px;
            margin-top: 30px;
        }

        p {
            font-weight: 400;
            line-height: 2em;
        }

        .video {
            width: 75%;
            overflow: hidden;
            margin-top: 40px;
            height: 500px;
            border-radius: 10px;
        }

        .video video {
            width: 100%;
            height: 100%;
        }

        .section1 .judul-sesi {
            font-size: 26px;
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

        textarea {
            font-size: 10px;
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
            padding-left: 20px;
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

        @media screen and (max-width: 720px) {
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
                width: 90%;
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
                height: 500px;
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
        }

        .wrap-cetak {
            width: 100%;
            justify-content: space-between;
        }

        .wrap-cetak button {
            height: 40px;
            padding-left: 20px;
            margin-top: 10px;
            padding-right: 20px;
            border-radius: 10px;
        }
    </style>

</head>
<body>

<!-- Pembungkus semua kode halaman utama -->
<div class="row">
    <div class="col-3 position-sticky fixed-top bg-primary list-white" id="side">
        <ul class="position-fixed ms-1 mt-4 sticky-top pt-5">
                <a href="admin.php"><li class="list-unstyled d-flex mb-4 text-white"><div class="icon bg-primary"><img src="./image/admin.png" style="color:white;margin-right: 16px;" width="25" alt="icon" /></div>Data admin</li></a><br>
                <a href="user.php"><li class="list-unstyled d-flex mb-4 text-white"><div class="icon bg-primary"><img src="./image/user.png" style="color:white;margin-right: 16px;" width="25" alt="icon" /></div>Data pengguna</li></a><br>
                <a href="keluhan.php"><li class="list-unstyled d-flex mb-4 text-white"><div class="icon bg-primary"><img src="./image/ask.png" style="color:white;margin-right: 16px;" width="25" alt="icon" /></div>Data LK Sesi 1</li></a><br>
                <a href="keluhan2.php"><li class="list-unstyled d-flex mb-4 text-white"><div class="icon bg-primary"><img src="./image/ask.png" style="color:white;margin-right: 16px;" width="25" alt="icon" /></div>Data LK Sesi 2</li></a><br>
                <a href="keluhan3.php"><li class="list-unstyled d-flex mb-4 text-white"><div class="icon bg-primary"><img src="./image/ask.png" style="color:white;margin-right: 16px;" width="25" alt="icon" /></div>Data LK Sesi 3</li></a><br>
                <a href="keluhan4.php"><li class="list-unstyled d-flex mb-4 text-white"><div class="icon bg-primary"><img src="./image/ask.png" style="color:white;margin-right: 16px;" width="25" alt="icon" /></div>Data LK Sesi 4</li></a><br>
                <a href="keluhan5.php"><li class="list-unstyled d-flex mb-4 text-white"><div class="icon bg-primary"><img src="./image/ask.png" style="color:white;margin-right: 16px;" width="25" alt="icon" /></div>Data LK Sesi 5</li></a><br>
                <a href="logout.php"><li class="list-unstyled d-flex mb-4 text-white"><div class="icon"><img src="./image/logout.png" style="color:white;margin-right: 16px;" width="25" alt="icon" /></div>Keluar</li></a>
        </ul>
    </div>
        <div class="col-9 overflow-y-auto overflow-x-hidden ps-4">
            
            <h1 class="fw-bold fs-2 mt-5 ms-4"><?php echo $username ?> <img src="<?php echo $jk_user == "Pria" ? "./image/male.png" : "./image/female.png" ?>" alt="gender" width="40" class="<?php echo $jk_user == "Pria" ? "ms-2" : "" ?>" /></h1>
            <br>
            <small class="ms-4">Tgl konsultasi : <b><?php echo $tgl_konsultasi ?></b></small>

            <!-- Section 1 -->
            <section class="section1">
                    <div class="wrap-cetak d-flex">    
                        <h2 class="judul-sesii" id="judul">
                            Sesi 3 
                        </h2>
                        <button class="btn btn-danger text-white ctk" onclick="printer()" id="cetak">Cetak</button>
                    </div>
                   
                    <h2 class="judul-sesi">Lembar Kerja 1 Tema “Diri”</h2>
                    <p><i>(lihat kata-kata yang Anda gunakan untuk menggambarkan pahlawan di sesi ke 2)</i></p>
                    
                    <p class="title-textarea">1. Tuliskam kata sifat pertama yang anda gunakan untuk menggambarkan masing-masing dari mereka!</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk1a_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk1a_s3 ?></textarea>
                    </div>
                    <br>
                    <p class="title-textarea">2. Tuliskan kata-kata serupa yang Anda gunakan lebih dari satu kali untuk menggambarkannya</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk1b_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk1b_s3 ?></textarea>
                    </div>
                    <br>
                    <p class="title-textarea">3. Tuliskan dua tau lebih kesamaan yang dimiliki oleh pahlawan dengan anda!</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk1c_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk1c_s3 ?></textarea>
                    </div>
                    <br>
                    <p class="title-textarea">4. Buat daftra kata atau frasa penting lainnya yang anda gunakan untuk menggambarkannya!</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk1d_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk1d_s3 ?></textarea>
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

                    <p class="title-textarea">Saya menjadi orang yang......</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk1e_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk1e_s3 ?></textarea>
                    </div>
                    
                    <h2 class="judul-sesi">Lembar Kerja 2 tema  “Setting” </h2>
                    <p>
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

                    <p class="title-textarea">Saya suka berada ditempat mana......</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk2a_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk2a_s3 ?></textarea>
                    </div>
                    
                    <h2 class="judul-sesi">Lembar Kerja 3 Ringkasan Potret</h2>
                    <h3 class="h3">Diri Sendiri</h3>
                    <p>Saya menjadi....</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk3a_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk3a_s3 ?></textarea>
                    </div>
                    
                    <h3 class="h3">Setting</h3>
                    <p>Saya suka tempat di mana orang melakukan kegiatan seperti.....</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk3b_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk3b_s3 ?></textarea>
                    </div>
                    
                    <h3 class="h3">Naskah</h3>
                    <p>Plot dari buku atau film favorit saya adalah.....</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk3c_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk3c_s3 ?></textarea>
                    </div>
                    <br>
                    <p>Oleh karena itu, di tempat-tempat ini saya ingin.....</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk3d_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk3d_s3 ?></textarea>
                    </div>
                    
                    <h3 class="h3">Rumus Kesuksesan</h3>
                    <p>Saya akan sangat bahagia dan sukses ketika saya bisa menjadi.....</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk3e_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk3e_s3 ?></textarea>
                    </div>
                    <br>
                    <p>di tempat-tempat dimana otang-orang.....</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk3f_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk3f_s3 ?></textarea>
                    </div>
                    <br>
                    <p>jadi saya bisa.....</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk3g_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk3g_s3 ?></textarea>
                    </div>
                    
                    <h3 class="h3">Saran Diri</h3>
                    <p>Saran  terbaik  yang  bisa  saya  berikan  pada  diri  saya  sendiri  adalah.....</p>
                    <div class="form-floating">
                        <textarea class="form-control" name="lk3h_s3" id="floatingTextarea2" style="height: 300px;font-size: 15px;line-height: 1.8em"><?php echo $lk3h_s3 ?></textarea>
                    </div>
                    <hr>
                <br>
            </section> 
        </div>
    </div>
<!-- Akhir pembungkus semua kode halaman utama -->

<script>
    printer = () => {
        let sidebar = document.getElementById('side');
        let judul = document.getElementById('judul');
        let cetak = document.getElementById('cetak');
        sidebar.style.display = "none";
        judul.style.display = "none";
        cetak.style.display = "none";
        window.print();
        setTimeout(() => {
            sidebar.style.display = "block";
            judul.style.display = "block";
            cetak.style.display = "block";
            window.location.reload()
        }, 100);
    }
</script>
<!-- Mengubungkan js bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm   /@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Akhir mengubungkan js bootstrap 5 -->
    
</body>
</html>