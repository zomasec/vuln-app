<?php 

$server = "localhost";
$dbname = "auth_php";
$user = "root";
$pass = "";


try {
    // $dbh = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);
    $dsn = 'mysql:host=localhost;dbname='.$dbname;
    $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}












