<?php
require('koneksi.php');

$result = $kon->query("SELECT * FROM list_harga_print");
$list = array();
if($result){
    while($row= mysqli_fetch_assoc($result)){
        $list[]= $row;
    }
    echo json_encode($list);
}
?>