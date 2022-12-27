<?php
include '../koneksi.php';

if (isset($_GET['complete'])) {
    $complete = mysqli_query($koneksi, "UPDATE transaksi SET status = 'selesai' WHERE id_transaksi ='".$_GET['complete']."'");
    
    
        if ($complete) {
            echo "<script>alert('Berhasil Mengedit Data');
                        document.location='../transaksi-invoice.php';
                    </script>";
        } else {
            echo "<script>alert('Gagal Mengedit Data');
                        document.location='../daftar-harga-print.php';
                    </script>";
        }
} else if (isset($_GET['siapdiambil'])) {
    $ready = mysqli_query($koneksi, "UPDATE transaksi SET status = 'siap diambil' WHERE id_transaksi ='".$_GET['siapdiambil']."'");
    
    
        if ($ready) {
            echo "<script>alert('Berhasil Mengedit Data');
                        document.location='../transaksi-invoice.php';
                    </script>";
        } else {
            echo "<script>alert('Gagal Mengedit Data');
                        document.location='../daftar-harga-print.php';
                    </script>";
        }
} else if (isset($_GET['onproses'])) {
    $ready = mysqli_query($koneksi, "UPDATE transaksi SET status = 'on proses' WHERE id_transaksi ='".$_GET['onproses']."'");
    
    
        if ($ready) {
            echo "<script>alert('Berhasil Mengedit Data');
                        document.location='../transaksi-invoice.php';
                    </script>";
        } else {
            echo "<script>alert('Gagal Mengedit Data');
                        document.location='../daftar-harga-print.php';
                    </script>";
        }
} else if (isset($_GET['pending'])) {
    $ready = mysqli_query($koneksi, "UPDATE transaksi SET status = 'pending' WHERE id_transaksi ='".$_GET['pending']."'");
    
    
        if ($ready) {
            echo "<script>alert('Berhasil Mengedit Data');
                        document.location='../transaksi-invoice.php';
                    </script>";
        } else {
            echo "<script>alert('Gagal Mengedit Data');
                        document.location='../daftar-harga-print.php';
                    </script>";
        }
}
?>