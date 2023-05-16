<?php
session_start();
include("inc_koneksi.php");
if(!isset($_SESSION['admin_username'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" htef="style.css">
</head>
<body>
    <div id="app">
        <nav>
            <ul>
                <li><a href="admin_depan.php">Halaman Utama</a></li>
                <li><a href="admin_staff.php">Halaman Staff</a></li>
                <li><a href="admin_user.php">Halaman Pengguna</a></li>
                <li><a href="admin_manajer.php">Halaman Manajer</a></li>
                <li><a href="logout.php">Logout>></a></li>
</ul> 
</nav>