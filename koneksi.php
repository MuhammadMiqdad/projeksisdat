<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "supermarket";    
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name, '3307');

    function query ($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        $name = $data["name"];
        $address = $data["address"];
        $phone_number = $data["phone_number"];
        $email = $data["email"];
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        $result = mysqli_query($conn, "SELECT customer_name FROM customer WHERE customer_name = '$name'");

        if(mysqli_fetch_assoc($result)){
            echo "<script>
            alert ('username sudah terdaftar!') ;
            </script>";
            return false;
        }

        if($password !== $password2){
            echo "<script>
            alert ('konfirmasi password tidak sesuai!, kembali ke halaman awal');
            document.location.href = '1_signIn.php';
            </script>";
            return false;
        }
        $password= password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO customer VALUES ('', '$name', '$address', '$phone_number','$email', '$password')";
        mysqli_query($conn, $query);
       return mysqli_affected_rows($conn);
    }

    function login($isi){
        global $conn;
        $email = $isi["email"];
        $password = $isi["password"];

        $result = mysqli_query($conn, "SELECT * FROM customer WHERE email = '$email'");
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                header("Location: 2_index.php");
                exit;
            }
        }
    }
?>