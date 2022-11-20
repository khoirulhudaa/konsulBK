<?php
include 'koneksi.php';

$username = "";
$password = "";
$errorPasswordKosong = "";
$errorSalah = "";
$errorUsernameKosong = "";


if(isset($_POST['kirim'])) {
    session_start();
    $_SESSION['username_value'] = $_POST['username'];
    $_SESSION['password_value'] = $_POST['password'];

    if($_POST['username'] == "") {
        $errorUsernameKosong = "Username tidak boleh kosong!";
    }else if($_POST['password'] == "") {
        $errorPasswordKosong = "Password tidak boleh kosong!";
    }else {
        $sql = mysqli_query($koneksi, "select * from user where username = '$_POST[username]' and password = '$_POST[password] ' ");
        $sql3 = mysqli_fetch_array($sql);
        $cek = mysqli_num_rows($sql);
        if($cek > 0) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['jk_user'] = $sql3['jk_user'];
            $_SESSION['role'] = "user";
            $_SESSION['sesi'] = $sql3['sesi'];
        header('location: index.php');
        }else {
            $errorSalah = "Username atau password salah!";
       }
    }

}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Masuk akun</title>

    <style>
        body {
            overflow: hidden;
        }

        .form-login {
            margin-left: auto;
            margin-right: auto;
            padding-top: 30px;
            width: 36vw;
            height: max-content;
            padding-left: 20px;
            padding-bottom: 40px;
            padding-right: 20px;
            border-radius: 16px;
            z-index: 5;
            position: relative;
            margin-top: 90px;
            background-color: white;
            box-shadow:
            0px 0.8px 2.7px rgba(0, 0, 0, 0.016),
            0px 1.9px 6.9px rgba(0, 0, 0, 0.022),
            0px 3.9px 14.2px rgba(0, 0, 0, 0.028),
            0px 8px 29.2px rgba(0, 0, 0, 0.034),
            0px 22px 80px rgba(0, 0, 0, 0.05)
            ;
        }

        .bg {
            width: 100vw;
            position: absolute;
            top: 0;
            height: auto;
        }
        
        .sudahPunya {
            font-size: 12px;
            font-weight: 500;
        }

        .sudahPunya span {
            color: blue;
        }

        .error {
            width: max-content;
            color: white;
            border-radius: 100px;
            font-size: 10px;
            padding: 4px;
            margin-top: 12px;
        }

        @media screen and (max-width: 720px) {
            .form-login {
                margin-left: auto;
                margin-right: auto;
                padding-top: 30px;
                width: 94vw;
                height: max-content;
                padding-left: 20px;
                padding-bottom: 40px;
                padding-right: 20px;
                border-radius: 16px;
                z-index: 5;
                position: relative;
                margin-top: 90px;
                background-color: white;
                box-shadow:
                0px 0.8px 2.7px rgba(0, 0, 0, 0.016),
                0px 1.9px 6.9px rgba(0, 0, 0, 0.022),
                0px 3.9px 14.2px rgba(0, 0, 0, 0.028),
                0px 8px 29.2px rgba(0, 0, 0, 0.034),
                0px 22px 80px rgba(0, 0, 0, 0.05)
                ;
            }
        }
    </style>

</head>
<body>
    <div class="form-login">
    <?php 
        if($errorSalah != "") {
        ?>
        <span class="error bg-danger"><?php echo $errorSalah ?></span>
        <br>
        <br>
        <?php
        }
    ?>
        <h2 class="mb-4 fw-bold">Masuk</h2>
        <form action="loginUser.php" method="post">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo isset($_SESSION['username_value']) ? $_SESSION['username_value'] : "" ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            <?php 
                if($errorUsernameKosong != "") {
                ?>
                <br>
                <span class="error bg-danger"><?php echo $errorUsernameKosong ?></span>
                <?php
                }
            ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo isset($_SESSION['password_value']) ? $_SESSION['password_value'] : "" ?>" id="exampleInputPassword1">
                <?php 
                    if($errorPasswordKosong != "") {
                    ?>
                    <br>
                    <span class="error bg-danger"><?php echo $errorPasswordKosong ?></span>
                    <br>
                    <br>
                    <?php
                    }
                ?>
            </div>
            <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
            <br>
            <br>
            <small class="sudahPunya">Belum punya akun? <a href="register.php"><span>Daftar</span></a></small>
        </form>
    </div>
<img src="./image/bgnews.jpg" class="bg" alt="background" />

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>