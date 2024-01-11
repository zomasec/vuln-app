<?php 
session_start();
require_once('../inc/db.php');


if(isset($_POST['submit']))
{
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL );
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);


    $sql = "SELECT * FROM users WHERE email=? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $data = $stmt->fetchObject();
    if($data)
    {
        $ver = password_verify($password,$data->password);
        if($ver)
        {
            $_SESSION['user_id'] = $data->name;
            $_SESSION['user_name'] = $data->name;
            $_SESSION['user_email'] = $data->email;
            $_SESSION['user_mobile'] = $data->mobile;

            header("Location:../profile.php");

        }
        else 
        {
            echo "error";
        }
    }

}


