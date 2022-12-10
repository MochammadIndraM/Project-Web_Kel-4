<?php

include '../koneksi.php';

if (isset($_POST['tambah'])) {
    if ($_POST['tnama'] == "") {
        echo "<script>alert('Nama Harus diisi');
                    document.location='../data-customer.php';
                </script>";
    } else  if ($_POST['temail'] == "") {
        echo "<script>alert('Email Harus diisi');
                        document.location='../data-customer.php';
                    </script>";
    } else  if ($_POST['tpassword'] == "") {
        echo "<script>alert('Password Harus diisi');
                        document.location='../data-customer.php';
                    </script>";
    } else  if ($_POST['tnohp'] == "") {
        echo "<script>alert('No HP Harus diisi');
                        document.location='../data-customer.php';
                    </script>";
    } else {
        $tambah = mysqli_query($koneksi, "INSERT INTO user (id_user, username, email, password, no_hp, role)
                                                  VALUES ('null',
                                                          '$_POST[tnama]',
                                                          '$_POST[temail]',
                                                          '$_POST[tpassword]',
                                                          '$_POST[tnohp]',
                                                          'customer')");


        if ($tambah) {
            echo "<script>alert('Berhasil Menambahkan Data');
                            document.location='../data-customer.php';
                        </script>";
        } else {
            echo "<script>alert('Gagal Menambahkan Data');
                            document.location='../data-customer.php';
                        </script>";
        }
    }
} else if (isset($_POST['edit'])) {
    if ($_POST['tnama'] == "") {
        echo "<script>alert('Nama Harus diisi');
                    document.location='../data-customer.php';
                </script>";
    } else  if ($_POST['temail'] == "") {
        echo "<script>alert('Email Harus diisi');
                        document.location='../data-customer.php';
                    </script>";
    } else  if ($_POST['tpassword'] == "") {
        echo "<script>alert('Password Harus diisi');
                        document.location='../data-customer.php';
                    </script>";
    } else  if ($_POST['tnohp'] == "") {
        echo "<script>alert('No HP Harus diisi');
                        document.location='../data-customer.php';
                    </script>";
    } else {
        $edit = mysqli_query($koneksi, "UPDATE user SET username = '$_POST[tnama]', email = '$_POST[temail]', password = '$_POST[tpassword]', no_hp = '$_POST[tnohp]' WHERE id_user ='$_POST[tiduser]'");
    
    
        if ($edit) {
            echo "<script>alert('Berhasil Mengedit Data');
                        document.location='../data-customer.php';
                    </script>";
        } else {
            echo "<script>alert('Gagal Mengedit Data');
                        document.location='../data-customer.php';
                    </script>";
        }

    }
} else if (isset($_POST['hapus'])) {
   
        $hapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user ='$_POST[tiduser]'");
    
    
        if ($hapus) {
            echo "<script>alert('Berhasil Menghapus Data');
                        document.location='../data-customer.php';
                    </script>";
        } else {
            echo "<script>alert('Gagal Menghapus Data');
                        document.location='../data-customer.php';
                    </script>";
        }

    
}
