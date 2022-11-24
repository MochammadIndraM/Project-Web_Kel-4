<?php 
require('koneksi.php');
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(!empty(trim($email)) && !empty(trim($pass))){
        $query = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($koneksi,$query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)){
            $userVal = $row['email'];
            $passVal =$row['password'];
            $level = $row['role'];
        }
    }
}
?>