<?php

include '../koneksi.php';

if (isset($_POST['hapus'])) {

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
