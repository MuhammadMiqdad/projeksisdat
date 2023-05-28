<?php
    include 'koneksi.php';

    if(isset($_POST["submit"])){
        
        if(tambah($_POST)> 0){
            echo "
                <script>
                alert ('Data berhasil ditambahkan') ; 
                document.location.href = '2_login.php'
                </script>
            ";   
        }else{
            echo mysqli_error($conn);
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damnz Market</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        .container{
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.15);
        }
        .container .title{
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }
        .container .title::before{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        .content form .user-details{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }
        form .user-details .input-box{
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }
        form .input-box span.details{
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }
        .user-details .input-box input{
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
            border-color: #9b59b6;
        }
        .button{
            height: 45px;
            margin: 35px 0;
            display: flex;
            justify-content: center;
        }
        .button a{
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        .button a:hover{
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }
    </style>
</head>
<body style="background-image: url('image/bg.jpg');">
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action = "" method = "post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text" name = "name" id = "name"  placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name = "address" id = "address" placeholder="Enter your address" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name = "email" id = "email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name = "phone_number" id = "phone_number" placeholder="Enter your number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name = "password" id = "password" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name = "password2" id = "password2" placeholder="Confirm your password" required>
                    </div>
                </div>
                <div class="button">
                    <button type="submit" name="submit" id="submit">register</button>
                </div>
            </form>
        </div>
    </div> 
    <script>
        // function redirectToLoginPage() {
        //     window.location.href = "2_login.php";
        // }
    </script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/00cb234d5f.js" crossorigin="anonymous"></script>
</body>
</html>