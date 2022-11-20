<?php 

include 'koneksi.php';
session_start();

$op = "";
$search = "";

if(isset($_GET['op'])) {
        $op = $_GET['op'];
        if($op == 'delete') {
            $id             = $_GET['id'];
            $sql            = "delete from keluhan3 where id_keluhan = '$id'";
            $sql2           = mysqli_query($koneksi, $sql);
            if($sql2) {
                $sukses     = "Data sudah berhasil dihapus";
            }else {
                $error      = "Data gagal dihapus!";
            }
        }
    }else {
        $op = '';
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

    <!-- Sweetalert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Akhir Sweetalert -->

    <!-- Judul dari halaman website -->
    <title>Data keluhan</title>
    <!-- akhir judul website -->

    <style>
        #menu-left {
            height: 100vh;
            border-radius: 0;
        }

        .eye {
            width: 15px;
        }

        .trash {
            width: 15px;
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
    <div class="col-9 overflow-auto">
        <h1 class="fw-bold fs-2 mt-5 ms-4">Sesi 3</h1>
        <p class="ms-4">Ciptakan data yang effisien dan efektif</p>
        <br>
        <div class="container mt-5">
            <div class="mb-3" id="search">
                <form action="" method="get" class="d-flex">
                    <input type="text" class="form-control" placeholder="Cari nama disini...." name="search" value="<?php echo $search ?>" id="exampleInputEmail1" />
                    <button class="btn btn-primary ms-2" type="submit" name="kirim2"><img src="./image/search.png" alt="search icon" width="16" /></button>
                </form>
            </div>
            <form action="project.php" method="post" enctype="multipart/form-data">
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">LK1a - sesi 3</th>
                        <th scope="col">Tgl konsultasi</th>
                        <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <?php
                         $sql = "select * from keluhan3";
                         if(isset($_GET['search'])) {
                             $sql = "SELECT * FROM keluhan3 WHERE username LIKE '%".$_GET['search']."%'";
                         }
                        $getData = mysqli_query($koneksi, $sql);
                            $no = 1;
                            while($data = mysqli_fetch_array($getData)) {
                                $id = $data['id_keluhan'];
                                $username = $data['username'];
                                $keluhan_pertama = $data['lk1a_s3'];
                                $tgl = $data['tgl_konsultasi'];
                        ?>
                        <tr>    
                            <th><?php echo $no++ ?></th>      
                            <th><?php echo $username ?></th>
                            <th><?php echo $keluhan_pertama ?></th>
                            <th><?php echo $tgl ?></th>
                            <th>
                                <a href="detail3.php?op=detail&id=<?php echo $id ?>">
                                    <button type="button" class="btn btn-primary"><img src="./image/eye.png" alt="eye" class="eye" /></button>
                                </a>
                                <br>
                                <br>
                                <a href="keluhan3.php?op=delete&id=<?php echo $id ?>" class="alert_notif">
                                    <button type="button" class="btn btn-danger" name="delete"><img src="./image/trash.png" alt="trash" class="trash" /></button>
                                </a>
                            </th>
                        </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                    <tbody>
                </table>
            </form>
        </div>
    </div>
</div>

<!-- Sweetalert -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<!-- Akhir Sweetalert -->

<script>
    $('.alert_notif').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
            title: "Yakin hapus data?",            
            icon: 'warning',
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
<!-- Akhir mengubungkan js bootstrap 5 -->

</body>
</html>