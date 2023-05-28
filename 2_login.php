<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login";    

  if(isset($_POST["login"])) {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name, '3307');
    $query = "INSERT INTO user_login VALUES ('','$email', '$password')";
    mysqli_query($conn, $query);
//     echo "$email";
//     if(empty($email) || empty($password)) {
//       echo "<script>
//               alert('Please enter both email and password.');
//               document.location.href = '2_login.php';
//             </script>";
//       exit;
    }

//     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "<script>
//                 alert('Please enter a valid email address.');
//                 event.preventDefault(); // Prevent form submission
//               </script>";
//         exit;
//       }

//     $stmt = mysqli_prepare($conn, "SELECT * FROM customer WHERE email = ?");
//     mysqli_stmt_bind_param($stmt, 's', $email);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);

//     if(mysqli_num_rows($result) === 1) {
//       $row = mysqli_fetch_assoc($result);
//       if(password_verify($password, $row['password'])) {
//         echo "password valid";
//         header("Location: 3_index.php");
//         exit;
//       }
//     }
    
//     echo "<script>
//             alert('Invalid email or password.');
//             document.location.href = '2_login.php';
//           </script>";
//     exit;

//     mysqli_stmt_close($stmt);
//     mysqli_close($conn);
//   }
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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #0d2329;
            background-image: url('image/bg.jpg');
        }

        .container {
            width: 100%;
            display: flex;
            max-width: 850px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .login {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        form {
            width: 100%;
            max-width: 300px;
            margin: 30px auto;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
            font-weight: bolder;
            text-transform: uppercase;
            color: #0d2329;
        }

        hr {
            border-top: 2px solid #0d2329;
        }

        p {
            text-align: center;
            margin: 10px;
            color: #0d2329;
        }

        .right {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0d2329;
        }

        .right img {
            max-width: 100%;
            max-height: 100%;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        form label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 5px;
            color: #0d2329;
        }

        input {
            width: 100%;
            margin: 2px;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        button {
            border: none;
            outline: none;
            padding: 8px;
            width: 100%;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
            background: #0d2329;
        }

        button:hover {
            background: #426c60;
        }

        a {
            color: #0d2329;
        }

        a:hover {
            text-decoration: underline;
        }


        @media (max-width: 880px) {
            .container {
                width: 100%;
                max-width: 750px;
                margin-left: 20px;
                margin-right: 20px;
            }

            .login {
                padding: 20px;
            }

            form {
                width: 100%;
                max-width: 300px;
                margin: 20px auto;
            }

            button {
                width: 100%;
            }

            .right img {
                width: 100%;
                height: 100%;
            }
        }

        .navbar-nav li:hover {
            background-color: rgb(46, 46, 222);
            transition: background-color 0.3s;
        }

        .navbar-nav li:hover a {
            color: rgb(5, 5, 5);
            transition: color 0.3s;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login">
            <form action = "" method="post">
                <h1>Login</h1>
                <hr>
                <p>Damnz Market</p>
                <label for="email">Email/ID</label>
                <input type="text" name ="email" id="email" placeholder="example_user" required>
                <label for="password">Password</label>
                <input type="password" name = "password" id="password" placeholder="Password" required>
                <button type="submit" name = "login" id = "login">Login</button>
                <p>
                    <a href="#">Forgot Password?</a>
                    <br>
                    Don't have an account? <a href="1_signin.php">Sign Up</a>
                </p>
            </form> 
        </div>
            <div class="right">
                <img src="image/logodamnzfull.png" alt="..." style="width: 200px;">
            </div>
    </div>
            

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/00cb234d5f.js" crossorigin="anonymous"></script>
</body>
</html>

