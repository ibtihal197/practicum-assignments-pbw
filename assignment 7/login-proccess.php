<?php
if (isset($_POST['login'])){
    include "connectdb.php";
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Hashing
    $query = mysqli_query($connection, "SELECT * FROM user WHERE username='$username'");
    $count = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);
    $passwordnow = $data['password'];

    if ($count > 0){
        if(password_verify($password, $passwordnow)){
            $_SESSION['name'] = $data['name'];
            $_SESSION['success'] = "Welcome " . $_SESSION['name'] . " to the Dashboard Page";
            header("Location:dashboard.php");
        }else{
            $_SESSION['danger'] = "Wrong password";
            header("Location:login.php");
        }  
    }else{
        $_SESSION['danger'] = "Login failed";
        header("Location:login.php");
    }
}