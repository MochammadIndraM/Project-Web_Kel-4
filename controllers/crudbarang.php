<?php

include '../koneksi.php';

if (isset($_POST['tambah'])) {
    $limit = 10 * 1024 * 1024;
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
    $namafile = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
    $ukuran = $_FILES['foto']['size'];

    if ($_POST['tnama'] == "") {
        echo "<script>alert('Nama Barang Harus diisi');
                    document.location='../data-barang.php';
                </script>";
    } else  if ($_POST['tharga'] == "") {
        echo "<script>alert('Harga Barang Harus diisi');
                        document.location='../data-barang.php';
                    </script>";
    } else {
        if ($ukuran > $limit) {
            echo "<script>alert('Ukuran Melebihi Batas');
                        document.location='../data-barang.php';
                    </script>";
        } else {
            if (!in_array($tipe_file, $ekstensi)) {
                echo "<script>alert('Ekstensi File Tidak Sesuai');
                        document.location='../data-barang.php';
                    </script>";
            } else {
                $konto = date('d-m-Y-h-i-sa') . '-' . $namafile;
                move_uploaded_file($tmp, '../upload/' . date('d-m-Y-h-i-sa') . '-' . $namafile);

                $tambah = mysqli_query($koneksi, "INSERT INTO barang (id_barang, foto_barang, nama_barang, kategori, harga)
                                                  VALUES ('null',
                                                          '$konto',
                                                          '$_POST[tnama]',
                                                          '$_POST[tkategori]',
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
        if ($_FILES['foto']['size'] == 0) {
            $limit = 10 * 1024 * 1024;
            $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
            $namafile = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];
            $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
            $ukuran = $_FILES['foto']['size'];

            $edit = mysqli_query($koneksi, "UPDATE barang SET nama_barang = '$_POST[tnama]', kategori = '$_POST[tkategori]', harga = '$_POST[tharga]' WHERE id_barang ='$_POST[tidbarang]'");


            if ($edit) {
                echo "<script>alert('Berhasil Mengedit Data');
                        document.location='../data-barang.php';
                    </script>";
            } else {
                echo "<script>alert('Gagal Mengedit Data');
                        document.location='../data-barang.php';
                    </script>";
            }
        } else {
            $limit = 10 * 1024 * 1024;
            $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
            $namafile = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];
            $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
            $ukuran = $_FILES['foto']['size'];
            if ($ukuran > $limit) {
                echo "<script>alert('Ukuran Melebihi Batas');
                            document.location='../data-barang.php';
                        </script>";
            } else {
                if (!in_array($tipe_file, $ekstensi)) {
                    echo "<script>alert('Ekstensi File Tidak Sesuai');
                            document.location='../data-barang.php';
                        </script>";
                } else {
                    $konto = date('d-m-Y-h-i-sa') . '-' . $namafile;

                    $query = mysqli_query($koneksi, "SELECT foto_barang FROM barang WHERE id_barang ='$_POST[tidbarang]'");
                    while ($row = mysqli_fetch_array($query)) {
                        $foto = $row['foto_barang'];
                    }
                    unlink('../upload/' . $foto);
                    move_uploaded_file($tmp, '../upload/' . date('d-m-Y-h-i-sa') . '-' . $namafile);


                    $edit = mysqli_query($koneksi, "UPDATE barang SET foto_barang = '$konto', nama_barang = '$_POST[tnama]', kategori = '$_POST[tkategori]', harga = '$_POST[tharga]' WHERE id_barang ='$_POST[tidbarang]'");


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
            }
        }
    }
} else if (isset($_POST['hapus'])) {
    $query = mysqli_query($koneksi, "SELECT foto_barang FROM barang WHERE id_barang ='$_POST[tidbarang]'");
    while ($row = mysqli_fetch_array($query)) {
        $foto = $row['foto_barang'];
    }
    unlink('../upload/' . $foto);
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
