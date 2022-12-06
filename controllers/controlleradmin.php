<?php
include '../koneksi.php';


session_start();


if (isset($_POST['tambah'])) {
    tambah($koneksi);
} else if (isset($_POST['edit'])) {
    edit($koneksi);
} else if(isset($_POST['hapus'])){
    hapus($koneksi);
}

function tambah($koneksi)
{
    $nama = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nohp = $_POST['ho_hp'];

    mysqli_query($koneksi, "INSERT INTO user VALUES (null, '$nama', '$email', '$password', '$nohp','admin')");

    
    $_SESSION['flashData'] = 'Tambah Data Berhasil';
    header('Location: ../data-admin.php');
}

function edit($koneksi)
{
    $nama = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nohp = $_POST['ho_hp'];

    mysqli_query($koneksi, "INSERT INTO user VALUES (null, '$nama', '$email', '$password', '$nohp','admin')");

    
    $_SESSION['flashData'] = 'Tambah Data Berhasil';
    header('Location: ../data-admin.php');
}

function hapus($koneksi)
{
    $nama = $_GET['id_user'];

    mysqli_query($koneksi, "DELETE FROM `user` WHERE id_user = '$nama'");

    
    $_SESSION['flashData'] = 'Tambah Data Berhasil';
    header('Location: ../data-admin.php');
}
