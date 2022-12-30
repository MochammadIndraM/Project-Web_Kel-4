<?php

include '../koneksi.php';

if (isset($_POST['tambah'])) {
    if ($_POST['tnama'] == "") {
        echo "<script>alert('Nama Harus diisi');
                    document.location='../data-admin.php';
                </script>";
    } else  if ($_POST['temail'] == "") {
        echo "<script>alert('Email Harus diisi');
                        document.location='../data-admin.php';
                    </script>";
    } else  if ($_POST['tpassword'] == "") {
        echo "<script>alert('Password Harus diisi');
                        document.location='../data-admin.php';
                    </script>";
    } else  if ($_POST['tnohp'] == "") {
        echo "<script>alert('No HP Harus diisi');
                        document.location='../data-admin.php';
                    </script>";
    } else {
        $sql2 = mysqli_query($koneksi, "SELECT max(id_user) as kodeTerbesar FROM user WHERE role = 'admin'");
        $data = mysqli_fetch_array($sql2);
        $id_user = $data['kodeTerbesar'];
        $urutan = (int) substr($id_user, 5, 5);
        $urutan++;
        $huruf = "ADMN";
        $id_user = $huruf . sprintf("%03s", $urutan);

        $tambah = mysqli_query($koneksi, "INSERT INTO user (id_user, username, email, password, no_hp, role)
                                                  VALUES ('$id_user',
                                                          '$_POST[tnama]',
                                                          '$_POST[temail]',
                                                          '$_POST[tpassword]',
                                                          '$_POST[tnohp]',
                                                          'admin')");
        $cek = mysqli_query($koneksi, $tambah);


        if ($tambah) {
            echo "<script>alert('Berhasil Menambahkan Data');
                            document.location='../data-admin.php';
                        </script>";
        } else {
            echo "<script>alert('Gagal Menambahkan Data');
                            document.location='../data-admin.php';
                        </script>";
        }
    }
} else if (isset($_POST['edit'])) {
    if ($_POST['tnama'] == "") {
        echo "<script>alert('Nama Harus diisi');
                    document.location='../data-admin.php';
                </script>";
    } else  if ($_POST['temail'] == "") {
        echo "<script>alert('Email Harus diisi');
                        document.location='../data-admin.php';
                    </script>";
    } else  if ($_POST['tpassword'] == "") {
        echo "<script>alert('Password Harus diisi');
                        document.location='../data-admin.php';
                    </script>";
    } else  if ($_POST['tnohp'] == "") {
        echo "<script>alert('No HP Harus diisi');
                        document.location='../data-admin.php';
                    </script>";
    } else {
        $edit = mysqli_query($koneksi, "UPDATE user SET username = '$_POST[tnama]', email = '$_POST[temail]', password = '$_POST[tpassword]', no_hp = '$_POST[tnohp]' WHERE id_user ='$_POST[tiduser]'");


        if ($edit) {
            echo "<script>alert('Berhasil Mengedit Data');
                        document.location='../data-admin.php';
                    </script>";
        } else {
            echo "<script>alert('Gagal Mengedit Data');
                        document.location='../data-admin.php';
                    </script>";
        }
    }
} else if (isset($_POST['hapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user ='$_POST[tiduser]'");


    if ($hapus) {
        echo "<script>alert('Berhasil Menghapus Data');
                        document.location='../data-admin.php';
                    </script>";
    } else {
        echo "<script>alert('Gagal Menghapus Data');
                        document.location='../data-admin.php';
                    </script>";
    }
}
