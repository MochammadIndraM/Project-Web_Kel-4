<?php

include '../koneksi.php';

if (isset($_POST['tambah'])) {
    if ($_POST['tnama'] == "") {
        echo "<script>alert('Nama Barang Harus diisi');
                    document.location='../data-barang.php';
                </script>";
    } else  if ($_POST['tharga'] == "") {
        echo "<script>alert('Harga Barang Harus diisi');
                        document.location='../data-barang.php';
                    </script>";
    } else {
        $tambah = mysqli_query($koneksi, "INSERT INTO barang (id_barang, nama_barang, harga_jual)
                                                  VALUES ('null',
                                                          '$_POST[tnama]',
                                                          '$_POST[tharga]')");


        if ($tambah) {
            echo "<script>alert('Berhasil Menambahkan Data');
                            document.location='../data-barang.php';
                        </script>";
        } else {
            echo "<script>alert('Gagal Menambahkan Data');
                            document.location='../data-barang.php';
                        </script>";
        }
    }
} else if (isset($_POST['edit'])) {
    if ($_POST['tnama'] == "") {
        echo "<script>alert('Nama Barang Harus diisi');
                    document.location='../data-barang.php';
                </script>";
    } else  if ($_POST['tharga'] == "") {
        echo "<script>alert('Harga Barang Harus diisi');
                        document.location='../data-barang.php';
                    </script>";
    } else {
        $edit = mysqli_query($koneksi, "UPDATE barang SET nama_barang = '$_POST[tnama]', harga_jual = '$_POST[tharga]' WHERE id_barang ='$_POST[tidbarang]'");
    
    
        if ($edit) {
            echo "<script>alert('Berhasil Mengedit Data');
                        document.location='../data-barang.php';
                    </script>";
        } else {
            echo "<script>alert('Gagal Mengedit Data');
                        document.location='../data-barang.php';
                    </script>";
        }

    }
} else if (isset($_POST['hapus'])) {
   
        $hapus = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang ='$_POST[tidbarang]'");
    
    
        if ($hapus) {
            echo "<script>alert('Berhasil Menghapus Data');
                        document.location='../data-barang.php';
                    </script>";
        } else {
            echo "<script>alert('Gagal Menghapus Data');
                        document.location='../data-barang.php';
                    </script>";
        }

    
}
