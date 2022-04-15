<?php
if (isset($_POST['register'])){
    include "connectdb.php";
    session_start();
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    //Hashing
    $epassword = password_hash($password, PASSWORD_DEFAULT);
    $econfirm_password = password_hash($confirm_password, PASSWORD_DEFAULT);
    $query = mysqli_query($connection, "SELECT username FROM user WHERE username='$username'");
    $data = mysqli_fetch_array($query);

    //Validasi
    if ($username == $data['username']){
        $_SESSION['danger'] = "Username already used";
        header("Location:register.php");
    }else{
        if ($password === $confirm_password){
            $create = mysqli_query($connection, "INSERT INTO user VALUES(null, '$name', '$username', '$epassword')");
            $_SESSION['name'] = $name;
            $_SESSION['success'] = "Congratulations " . $_SESSION['name'] . ",
            your registration was successful. Please login to enter";
            header("Location:login.php");
        }else{
            $_SESSION['danger'] = "Password doesn't match";
            header("Location:register.php");
        }
    }
}