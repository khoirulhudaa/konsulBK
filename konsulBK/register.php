<?php
include 'koneksi.php';

$username = "";
$password = "";
$no_telephone = "";
$jk_user = "";
$errorUsernameKosong = "";
$errorUsernamePendek = "";
$errorPasswordKosong = "";
$errorPasswordPendek = "";
$errorNomerKosong = "";
$errorDuplikat = "";

if(isset($_POST['kirim'])) {
    session_start();
    $_SESSION['username2_value'] = $_POST['username'];
    $_SESSION['password2_value'] = $_POST['password'];
    $_SESSION['no2_telephone_value'] = $_POST['no_telephone'];
    $_SESSION['jk2_value'] = $_POST['jk_user'];
    
    if($_POST['username'] == "") {
        $errorUsernameKosong = "Username tidak boleh kosong!";
    }else if(strlen($_POST['username']) < 2) {
        $errorUsernamePendek = "Username minimal 3 karakter!";
    }else if($_POST['password'] == "") {
        $errorPasswordKosong = "Password tidak boleh kosong!";
    } else if(strlen($_POST['password']) < 3) {
        $errorPasswordPendek = "Username minimal 4 karakter!";
    } else if($_POST['no_telephone'] == "") {
        $errorNomerKosong = "No telephone tidak boleh kosong!";
    }  
    else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $jk_user = $_POST['jk_user'];
        $no_telephone = $_POST['no_telephone'];
        $role = "user";

        
        $sql2 = mysqli_num_rows (mysqli_query($koneksi, "SELECT username FROM user WHERE username='$username'"));
        if($sql2 > 0) {
            $errorDuplikat = "Username tersebut sudah digunakan!";  
        }else {
            $sql = mysqli_query($koneksi, "insert into user(username, password, no_telephone, jk_user, role, sesi) values ('$username', '$password', '$no_telephone', '$jk_user', '$role', '1') ");
            if($sql) {
                    session_start();
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['jk_user'] = $_POST['jk_user'];
                    $_SESSION['no_telephone'] = $_POST['no_telephone'];
                    $_SESSION['sesi'] = "1";
                    header('location: index.php');
                }else {
                    header("location: error.php");
                }
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
            padding-top: 20px;
            width: 36vw;
            height: max-content;
            padding-left: 20px;
            padding-bottom: 40px;
            padding-right: 20px;
            border-radius: 16px;
            z-index: 5;
            position: relative;
            margin-top: 45px;
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

        .error {
            width: max-content;
            color: white;
            border-radius: 100px;
            font-size: 10px;
            padding: 4px;
            margin-top: 4px;
        }

        .errorDup {
            width: max-content;
            color: white;
            border-radius: 100px;
            font-size: 10px;
            padding: 4px;
            position: relative;
            top: -20px;
            margin-top: 4px;
        }

        .sudahPunya {
            font-size: 12px;
            font-weight: 500;
        }

        .sudahPunya span {
            color: blue;
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
                margin-top: 20px;
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
            if($errorDuplikat != "") {
            ?>
            <br>
            <span class="errorDup bg-danger"><?php echo $errorDuplikat ?></span>
            <?php
            }
        ?>
        <h2 class="mb-4 fw-bold">Daftar</h2>
        <form method="post">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo isset($_SESSION['username2_value']) ? $_SESSION['username2_value'] : "" ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            <?php 
                if($errorUsernameKosong != "") {
                ?>
                <br>
                <span class="error bg-danger"><?php echo $errorUsernameKosong ?></span>
                <?php
                }
                
                if($errorUsernamePendek != "") {
                    ?>
                    <br>
                    <span class="error bg-danger"><?php echo $errorUsernamePendek ?></span>
                    <?php
                }
            ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo isset($_SESSION['password2_value']) ? $_SESSION['password2_value'] : "" ?>" id="exampleInputPassword1">
                <?php 
                if($errorPasswordKosong != "") {
                    ?>
                <br>
                <span class="error bg-danger"><?php echo $errorPasswordKosong ?></span>
                <?php
                }
                
                if($errorPasswordPendek != "") {
                    ?>
                    <br>
                    <span class="error bg-danger"><?php echo $errorPasswordPendek ?></span>
                    <?php
                }
            ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis kelamin</label>
                <select class="form-select" name="jk_user" aria-label="Default select example">
                    <option value="Pria" <?php echo isset($_SESSION['jk2_value']) == "Pria" ? "selected": "" ?>>Pria</option>
                    <option value="Wanita" <?php echo isset($_SESSION['jk2_value']) == "Wanita" ? "selected": "" ?>>Wanita</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No telephone</label>
                <input type="number" 
                class="form-control" 
                name="no_telephone" 
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                type = "number"
                maxlength = "13" 
                value="<?php echo isset($_SESSION['no2_telephone_value']) ? $_SESSION['no2_telephone_value'] : "" ?>
                ">
                <?php 
                if($errorNomerKosong != "") {
                    ?>
                    <br>
                    <span class="error bg-danger"><?php echo $errorNomerKosong ?></span>
                    <?php
                }
                ?>
            </div>
            <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
            <br>
            <br>
            <small class="sudahPunya">Sudah punya akun? <a href="loginUser.php"><span>Masuk</span></a></small>
        </form>
    </div>
<img src="./image/bgnews.jpg" class="bg" alt="background" />

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>