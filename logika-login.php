<?php
include_once("koneksi.php");

if (isset($_POST['submit'])) {

    $user = $_POST['user'];
    $password = $_POST['password'];

    $query = mysqli_query($mysqli, "select * from user where user='$user' and password='$password'");


    $data = mysqli_fetch_assoc($query);

    $cek = mysqli_num_rows($query);

    if ($cek == 1) {
        print(" Berhasil");
    } else {
        header("Location:tampilan-login.php");
    }
}
