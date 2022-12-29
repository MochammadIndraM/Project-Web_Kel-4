<?php
require_once('../koneksi.php');

$result = $kon->query("SELECT * FROM barang WHERE kategori='alat ukur'");
$list = array();
if($result){
    while($row= mysqli_fetch_assoc($result)){
        $list[]= $row;
    }
    echo json_encode($list);
}
?>