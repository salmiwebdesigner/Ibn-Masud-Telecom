<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    $user_data = 'email=' . $email . '&password=' . $password;

    if (empty($email)) {
        header("Location: login.php?error= Email is required&$user_data");
        exit();
    }else if(empty($password)){
        header("Location: login.php?error=Password is required&$user_data");
        exit();
    }else {
        // hashing the password
        $password = md5($password);


        $sql = "SELECT * FROM users WHERE email ='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../Dashboard/index.php");
                exit();
            }else{
                header("Location: login.php?error= Incorrect Email or Password");
                exit();
            }
        }else{
            header("Location: login.php?error=Incorrect Email or password");
            exit();
        }
    }
}else{
    header("Location: login.php");
    exit();
}