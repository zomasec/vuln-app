<?php session_start();  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >

    <title>Vulnrable Web Application</title>
  </head>
  <body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/auth-php/index.php">Home </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth-php/profile.php">Profile</a>
                </li>

                <?php if(!isset($_SESSION['user_name'])): ?> 
                <li class="nav-item">
                    <a class="nav-link" href="/auth-php/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth-php/register.php">Register</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="/auth-php/logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth-php/labs/labs.php">Labs</a>
                </li>
                <?php endif; ?>
            </ul>
            
        </div>
    </nav>