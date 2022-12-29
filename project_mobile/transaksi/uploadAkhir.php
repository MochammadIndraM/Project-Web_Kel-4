<?php
header('Content-Type: application/json; charset=utf8');
require_once('../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['data']) && $_POST['data'] != ""  ) {
        $file = $_POST['data'];
        $query = "SELECT * FROM file";
        $cek = mysqli_query($kon, $query);
        $count = mysqli_num_rows($cek);

        

        if($count == 1){
            echo json_encode("gagal");
            
        } else {
            // $path = "upload/$file";
            $insert = "INSERT INTO file (data) VALUES ('$file')";
            // file_put_contents($path,base64_decode($file));
            $cek = mysqli_query($kon,$insert);
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