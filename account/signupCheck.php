<?php
session_start();
include "db_conn.php";

if (isset($_POST['firstname']) && isset($_POST['lastname']) &&  isset($_POST['email'])
    && isset($_POST['password']) && isset($_POST['confirm_password'])
    && isset($_POST['phone_number']) && isset($_POST['username'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $firstname = validate($_POST['firstname']);
    $lastname = validate($_POST['lastname']);
    $email = validate($_POST['email']);
    $phone_number =validate($_POST['phone_number']);
    $username  = validate($_POST['username']);
    $password  = validate($_POST['password']);
    $confirm_password = validate($_POST['confirm_password']);


    $user_data = 'email=' . $email . '&firstname=' . $firstname. '&lastname=' . $lastname . '&phone_number='. $phone_number. '&username=' .$username. '&password='. $password;

    if (empty($firstname)) {
        header("Location: Register.php?error= First Name is required&$user_data");
        exit();
    }
    else if (empty($lastname)) {
        header("Location: Register.php?error= Last Name is required&$user_data");
        exit();
    }else if(empty($email)){
        header("Location: Register.php?error=Email is required&$user_data");
        exit();
    }
    else if (empty($username)){
        header("Location: Register.php?error=Username is required&$user_data");
        exit();
    }
    else if(empty($phone_number)){
        header("Location: Register.php?error= Mobile Number is required&$user_data");
        exit();
    }
    else if(strlen($phone_number) < 11 OR strlen($phone_number) > 11){
        header("Location: Register.php?error= Invalid Mobile Number&$user_data");
        exit();
    }
    else if(empty($password)){
        header("Location: Register.php?error= Password is required&$user_data");
        exit();
    }

    else if(empty($confirm_password)){
        header("Location: Register.php?error=Confirm Password is required&$user_data");
        exit();
    }else if (strlen($password) < 8){
        header("Location: Register.php?error=Password must be 8 character long&$user_data");
        exit();
    }
    // Check if the password contains at least one lowercase letter, one uppercase letter, and one digit
    else if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/", $password)) {
           header("Location: Register.php?error=Password must contain at least one lowercase letter, uppercase letter and digit&$user_data");
           exit();
       }
        // Check if the password contains at least one special character
    else if (!preg_match("/^(?=.*[~!@#$%^&*()_-]).+$/", $password)) {
           header("Location: Register.php?error=Password must contain at least one character&$user_data");
           exit();
       }
    else if($password !== $confirm_password){
        header("Location: Register.php?error=Confirmation password  does not match&$user_data");
        exit();
    }

    else {

        // hashing the password
        $password = md5($password);

        $sql = "SELECT * FROM users  WHERE email ='$email' ";
        $result = mysqli_query($conn, $sql);

        // check for email already exist
        if (mysqli_num_rows($result) > 0) {
            header("Location: Register.php?error=Email already in use, try another one&$user_data");
            exit();
        }



        else {
            $sql2 = "INSERT INTO users (firstname, lastname, email, username, phone_number, password) VALUES('$firstname', '$lastname', '$email', '$username', '$phone_number', '$password')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: Register.php?success=Account created successfully, Go to Login Page");
                exit();
            }else {
                header("Location: Register.php?error= Unknown error occurred&$user_data");
                exit();
            }
        }

    }
}else{
    header("Location: Register.php");
    exit();
}