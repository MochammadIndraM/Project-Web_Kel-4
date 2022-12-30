<?php
header('Content-Type: application/json; charset=utf8');
require_once('../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['tanggal']) && $_POST['tanggal'] != ""  && isset($_POST['file']) && $_POST['file'] != "" && isset($_POST['id_print']) && $_POST['id_print'] != "" && isset($_POST['berapa_kali_print']) && $_POST['berapa_kali_print'] != "" && isset($_POST['jumlah_kertas']) && $_POST['jumlah_kertas'] != "" && isset($_POST['total_harga']) && $_POST['total_harga'] != ""  && isset($_POST['status']) && $_POST['status'] != "" && isset($_POST['id_user']) && $_POST['id_user'] != "" && isset($_POST['bukti_pembayaran']) && $_POST['bukti_pembayaran'] != "" ) {
        $tanggal = $_POST['tanggal'];
        $file = $_POST['file'];
        $id_print = $_POST['id_print'];
        $berapa_kali_print = $_POST['berapa_kali_print'];
        $jumlah_kertas = $_POST['jumlah_kertas'];
        $total_harga = $_POST['total_harga'];
        $status = $_POST['status'];
        $id_user = $_POST['id_user'];
        $bukti_pembayaran = $_POST['bukti_pembayaran'];
        $query = "SELECT * FROM transaksi";
        $cek = mysqli_query($kon, $query);
        $count = mysqli_num_rows($cek);

        if($count == 0){
            echo json_encode("gagal");
            
        } else {
            $sql2 = mysqli_query($kon, "SELECT max(id_transaksi) as kodeTerbesar FROM transaksi");
            $data = mysqli_fetch_array($sql2);
            $id_transaksi = $data['kodeTerbesar'];
            $urutan = (int) substr($id_transaksi, 5,5);
            $urutan++;
            $huruf = "TRAN";
            $id_transaksi = $huruf . sprintf("%03s",$urutan);

            $insert = "INSERT INTO transaksi(id_transaksi,tanggal,file,id_print,berapa_kali_print,jumlah_kertas,total_harga,status) VALUES ('".$id_transaksi."','".$tanggal."','".$file."','".$id_print."','".$berapa_kali_print."','".$jumlah_kertas."','".$total_harga."','".$status."')";
            $insert2 = "INSERT INTO detail_transaksi(id_transaksi,id_user,total_harga,jenis_pembayaran,bukti_pembayaran) VALUES ('$id_transaksi','$id_user','$total_harga','e-wallet','$bukti_pembayaran')";
            $cek = mysqli_query($kon,$insert);
            $cek2 = mysqli_query($kon,$insert2);
            if($cek){
                echo json_encode("berhasil");
            }
        }

        // $id_user = "";
        // while ($hasilRow = mysqli_fetch_row($cek)) {
        //     $id_user = $hasilRow[0];
        //     $username = $hasilRow[1];
        //     $role = $hasilRow[5];
        // }
        // if ($cek->num_rows > 0) {
        //     $data = [
        //         'type' => true,
        //         'code' => 1,
        //         'status' => 'berhasil login',
        //         'id_user' => $id_user,
        //         'username' => $username,
        //         'role' => $role

        //     ];
        //     echo json_encode([$data]);
        // } else {
        //     $data = [
        //         'type' => false,
        //         'code' => 0,
        //         'status' => 'gagal login',
        //         'id_user' => null,
        //         'username' => null,
        //         'role' => null,
        //     ];
        //     echo json_encode([$data]);
        // }
    }
} else {
    echo json_encode(
        array(
            'code' => 400,
            'status' => 'REQUEST METHOD GAGAL!!!',
        )
    );
}
?>