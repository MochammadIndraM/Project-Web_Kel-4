<?php
require('../koneksi.php');
$idUser = $_POST['id_user'];
$result = $kon->query("SELECT transaksi.tanggal,transaksi.id_transaksi,detail_transaksi.id_user,transaksi.total_harga,transaksi.status FROM transaksi INNER JOIN detail_transaksi ON transaksi.id_transaksi=detail_transaksi.id_transaksi WHERE detail_transaksi.id_user='$idUser' AND transaksi.status='siap diambil'");
$list = array();
if($result){
    while($row= $result->fetch_assoc()){
        $list[]= $row;
    }
    echo json_encode($list);
}
?>