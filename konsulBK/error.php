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

    <!-- Googe fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Kode CSS External -->
    <!-- <link rel="stylesheet" href="./styles/index.css"> -->
    <title>Jawaban terkirim</title>

    <style>
        body {
            overflow: hidden;
        }

        .success {
            width: 40vw;
            background-color: #fff;
            height: 60vh;
            text-align: center;
            z-index: 22;
            position: relative;
            box-shadow:
            3.4px 3.4px 2.7px rgba(0, 0, 0, 0.016),
            8.7px 8.7px 6.9px rgba(0, 0, 0, 0.022),
            17.7px 17.7px 14.2px rgba(0, 0, 0, 0.028),
            36.5px 36.5px 29.2px rgba(0, 0, 0, 0.034),
            100px 100px 80px rgba(0, 0, 0, 0.05);
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            border-radius: 20px;
            flex-direction: column  ;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success h1 {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .success p {
            line-height: 1.6em;
            font-weight: 400;
            font-size: 16px;
            margin-bottom: 20px;
            width: 80%;
        }

         .btn-success {
            border: none;
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

        .btn-success:hover {
            transition: 0.2s;
            background-color: #bc3543;
        }

        .bg {
            width: 100vw;
            position: absolute;
            top: 0;
            height: auto;
        }
        
        .check {
            width: 12%;
            margin-bottom: 20px;
        }
        
        @media screen and (max-width: 860px) {
            .bg {
                width: auto;
                position: absolute;
                top: 0;
                height: 100vh;
            }
            .success {
                width: 96vw;
                background-color: #fff;
                height: 60vh;
                text-align: center;
                z-index: 22;
                position: relative;
                box-shadow:
                3.4px 3.4px 2.7px rgba(0, 0, 0, 0.016),
                8.7px 8.7px 6.9px rgba(0, 0, 0, 0.022),
                17.7px 17.7px 14.2px rgba(0, 0, 0, 0.028),
                36.5px 36.5px 29.2px rgba(0, 0, 0, 0.034),
                100px 100px 80px rgba(0, 0, 0, 0.05);
                margin-left: auto;
                margin-right: auto;
                margin-top: 120px;
                border-radius: 20px;
                flex-direction: column  ;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    
<div class="success">
    <img src="./image/wrong.png" alt="check-image" class="check">
    <h1>Terjadi suatu kesalahan!</h1>
    <p>
        Saat ini layann kami terganggu karena ada kesalahan. Cobalah konsultasi ulang dan 
        isi pertanyaan.
    </p>
    <a href="loginUser.php"><button class="btn-success btn-danger">Kembali</button></a>
</div>

<img src="./image/bg-error.png" class="bg" alt="background" />

</body>
</html>