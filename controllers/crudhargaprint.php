<?php

include '../koneksi.php';

if (isset($_POST['tambah'])) {
    if ($_POST['tjenis'] == "") {
        echo "<script>alert('Nama Harus diisi');
                    document.location='../daftar-harga-print.php';
                </script>";
    } else  if ($_POST['tharga'] == "") {
        echo "<script>alert('Email Harus diisi');
                        document.location='../daftar-harga-print.php';
                    </script>";
    } else {
        $tambah = mysqli_query($koneksi, "INSERT INTO list_harga_print (id_print, jenis_print, harga) VALUES ('null', '$_POST[tjenis]', '$_POST[tharga]')");


        if ($tambah) {
            echo "<script>alert('Berhasil Menambahkan Data');
                            document.location='../daftar-harga-print.php';
                        </script>";
        } else {
            echo "<script>alert('Gagal Menambahkan Data');
                            document.location='../daftar-harga-print.php';
                        </script>";
        }
    }
} else if (isset($_POST['edit'])) {
    if ($_POST['tjenis'] == "") {
        echo "<script>alert('Nama Harus diisi');
                    document.location='../daftar-harga-print.php';
                </script>";
    } else  if ($_POST['tharga'] == "") {
        echo "<script>alert('Email Harus diisi');
                        document.location='../daftar-harga-print.php';
                    </script>";
    } else {
        $edit = mysqli_query($koneksi, "UPDATE list_harga_print SET jenis_print = '$_POST[tjenis]', harga = '$_POST[tharga]' WHERE id_print ='$_POST[tidjenis]'");
    
    
        if ($edit) {
            echo "<script>alert('Berhasil Mengedit Data');
                        document.location='../daftar-harga-print.php';
                    </script>";
        } else {
            echo "<script>alert('Gagal Mengedit Data');
                        document.location='../daftar-harga-print.php';
                    </script>";
        }

    }
} else if (isset($_POST['hapus'])) {
   
        $hapus = mysqli_query($koneksi, "DELETE FROM list_harga_print WHERE id_print ='$_POST[tidjenis]'");
    
    
        if ($hapus) {
            echo "<script>alert('Berhasil Menghapus Data');
                        document.location='../daftar-harga-print.php';
                    </script>";
        } else {
            echo "<script>alert('Gagal Menghapus Data');
                        document.location='../daftar-harga-print.php';
                    </script>";
        }

    
}
