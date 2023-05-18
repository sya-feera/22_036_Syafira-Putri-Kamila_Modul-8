<?php 
session_start();

if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

require 'config.php';

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM masuk WHERE username = '$username' AND password = '$password'");

    if( mysqli_num_rows($result) === 1 ) {
        $_SESSION["login"] = true;
        header("Location: index.php");
        exit;
    }
}

$error = true;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- my font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .login {
            box-sizing: border-box;
            /* position: absolute; */
            margin-top: 50px;
            width: 791px;
            height: 450px;
            left: 564px;
            top: 887px;

            background: #F8F8F8;
            box-shadow: 0px 4px 32px 8px rgba(0, 0, 0, 0.25);
            border-radius: 19px;
        }

        h1{
            /* position: absolute; */
            width: 231px;
            height: 84px;
            left: 845px;
            top: 253px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 69px;
            line-height: 84px;

            color: #3995EA;
        }

        p{
            width: 406px;
            height: 37px;
            left: 757px;
            top: 337px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 30px;
            line-height: 37px;
            /* identical to box height */


            color: #686868;
        }

        input{
            box-sizing: border-box;

            width: 677px;
            height: 40px;
            left: 621px;
            top: 418px;

            margin-top: 20px;
            background: #FFFFFF;
            border: 2px solid #9D9FA2;
            border-radius: 10px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
        }

        a{
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            line-height: 37px;
            text-decoration: none;
            color: #686868;
        }

        button{
            box-sizing: border-box;
            width: 677px;
            height: 50px;
            left: 621px;
            top: 679px;

            background: #2C7FCC;
            border-radius: 31px;

            font-family:  'Montserrat' ;
            font-weight: 700;
            border: none;
            color: #F8F8F8;
        }
    </style>
</head>
<body style="margin-top: 75px;">
    <div class="login container">
        <center>
            <h1 class="">LOGIN</h1>
            <p>Masukkan Username & Password</p>
            <form action="" method="post">
                <input type="text" placeholder="Username" id="username" name="username">
                <input type="password" placeholder="Password" id="password" name="password">
                <?php if(isset($error)) : ?>
                    <br>
                    <span style="color: red; font-style: italic;">username atau password salah</span>
                <?php endif ; ?>
                <button type="submit" name="submit" id="submit" style="margin-top: 20px;">Masuk</button>
            </form>
            <p style="margin-top: 20px;  font-size: 20px">Lupa Password? <a href="#" style="font-size: 20px;">Klik disini!</a></p>
        </center>
    </div>
</body>
</html>