<?php 
include 'koneksi.php';
session_start();

$op = "";

    if(isset($_GET['op'])) {
        $op = $_GET['op'];
    }else {
        $op = '';
    }
   
    if($op == 'edit') {
        $id = $_GET['id'];
        $sql = "select * from user where id_user = '$id'";
        $sql2 = mysqli_query($koneksi, $sql);
        $sql3 = mysqli_fetch_array($sql2);
        $username = $sql3['username'];
        $sesi = $sql3['sesi'];
    }

    /*Variabel untuk menerima data dari form*/
    
    if(isset($_POST['edit']))
    {
        $id_user= $_GET['id'];
        $sesi = $_POST['sesi'];

        /*query Update ke database*/
        $sql="UPDATE user SET sesi='$sesi' WHERE id_user='$id_user'";
        $query=mysqli_query($koneksi, $sql);
        header("location:user.php");
    }

    if(isset($_POST['batal']))
    {
        header("location:user.php");
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
    <link rel="stylesheet" href="./styles/index.css">
    <!-- akhir menghubungkan CSS -->
    
    <!-- Menghubungkan bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Akhir menghubungkan bootstrap 5 -->

    <title>Data admin</title>
    <style>
        #menu-left {
            height: 100vh;
            border-radius: 0;
        }

        #search {
            width: 30%;
        }
        
    </style>
</head>
<body>

<!-- Pembungkus semua kode halaman utama -->
    <div class="row">
        <div class="col-3 position-sticky fixed-top bg-primary list-white" id="menu-left">
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
        <div class="col-9 overflow-auto ps-4">
            
            <h1 class="fw-bold fs-2 mt-5 ms-4">Hai, <?php echo $_SESSION['username_admin'] ?> 👋</h1>
            <p class="ms-4">Ciptakan data yang effisien dan efektif</p>
            <br>

            <div class="container mt-4">
                <form action="editSesi.php?id=<?php echo $id ?>" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" disabled name="username" value="<?php echo $username ?>" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Sesi</label>
                        <input type="number" class="form-control" name="sesi" value="<?php echo $sesi ?>" id="exampleInputEmail1">
                    </div>
                    <br>
                    <button type="submit" name="edit" class="btn btn-primary px-4">Simpan</button>
                    <a href="user.php"><button type="submit" name="batal" class="btn btn-secondary ms-3 px-4">Batal</button></a>
                </form>
            </div>  
        </div>
    </div>
<!-- Akhir pembungkus semua kode halaman utama -->

<!-- Mengubungkan js bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm   /@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Akhir mengubungkan js bootstrap 5 -->

</body>
</html>
