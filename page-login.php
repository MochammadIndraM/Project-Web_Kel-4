<?php
$koneksi = mysqli_connect("localhost","wstifci1_jasaprinting","Polije1234","wstifci1_jasaprinting");
session_start();

$status = "";
if (isset($_GET["status"])) {
    $status = $_GET["status"];
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (!empty(trim($email)) && !empty(trim($pass))) {
        $query = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);
        while ($row = mysqli_fetch_array($result)) {
            $userVal = $row['email'];
            $passVal = $row['password'];
            $userName = $row['username'];
            $level = $row['role'];
        }

        if ($num != 0) {
            if ($userVal == $email && $passVal == $pass) {
                // header('Location: home.php?user_fullname='.urlencode($username));
                $_SESSION['role'] = $level;
                header('Location: page-login.php?status=sukses');
                //  
            } else {
                header('Location: page-login.php?status=errorepas');
            }
        } else {
            header('Location: page-login.php?status=errornotfound');
        }
    } else {
        header('Location: page-login.php?status=errornodata');
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <script src="js/sweetalert2.min.js"></script>


</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-8">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">

                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    
                                    <form action="page-login.php" method="post">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" value="" name="email" placeholder="Masukkan Email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" value="" name="password" placeholder="Masukkan Password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->

    <script src="js/sweetalert2.min.js"></script>

    <script>
        var p = '<?= $status ?>';
        if ( p == "sukses") {
            '<?php $_SESSION["status"] = "" ?>';
                window.location.replace("dashboard.php");

        }
        if ( p == "errorepas") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Email atau Password Salah',
            }).then(function(){
                '<?php $_SESSION["status"] = "" ?>';
                window.location.replace("page-login.php");
            });

        }
        if ( p == "errornotfound") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'User Tidak DItemukan',
            }).then(function(){
                '<?php $_SESSION["status"] = "" ?>';
                window.location.replace("page-login.php");
            });

        }
        if ( p == "errornodata") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Data Tidak Boleh Kosong',
            }).then(function(){
                '<?php $_SESSION["status"] = "" ?>';
                window.location.replace("page-login.php");
            });

        }
    </script>

</body>

</html>