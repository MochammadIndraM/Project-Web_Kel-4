
﻿<?php
$koneksi = mysqli_connect("localhost", "root", "", "pron");
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
        session_start();
        if ($num != 0) {
            if ($userVal == $email && $passVal == $pass) {
                // header('Location: home.php?user_fullname='.urlencode($username));
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $level;
                header('location: index.php');
            } else {
                echo '<div class="alert alert-danger solid alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                <strong>Error!</strong> Email atau Password salah!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button>
            </div>';
            }
        } else {
            echo '<div class="alert alert-danger solid alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                <strong>Error!</strong> User tidak ditemukan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button>
            </div>';
        }
    } else {
        echo '<div class="alert alert-danger solid alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                <strong>Error!</strong> Data tidak boleh kosong!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button>
            </div>';
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

    <link rel="stylesheet" href="../css/sweetalert2.min.css">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
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
    
    <script src="../js/sweetalert2.min.js"></script>
    <script>
        $('#submit').on('click', function() {
            $.ajax({
                url: '../controllers/logincontroller.php',
                type: 'post',
                data: {
                    'type': 'submit',
                    'email': $('#email').val(),
                    'password': $('#password').val(),
                },
                success: function(res) {
                    const data = JSON.parse(res);
                    if (data.status == 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: data.msg,
                        });
                    }else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: data.msg,
                        }).then(function() {
                            window.location.replace("index.php");
                        });
                    }
                }
            });
        });
    </script>

    <?php if (isset($_GET['error'])) { ?><script>
            Swal.fire(
                'Gagal',
                '<?php echo $_GET['error']; ?>',
                'error'
            ).then((result) => {
                location.replace('page-login.php');
            });
        </script><?php } ?>

</body>
</html>