<?php
header('Content-Type: application/json; charset=utf8');
require_once('../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['username']) && $_GET['username'] != "" && isset($_GET['password']) && $_GET['password'] != "" ) {
        $username = $_GET['username'];
        $password = $_GET['password'];
        $query = "SELECT * FROM user WHERE username='$username' AND password ='$password'";
        $cek = mysqli_query($kon, $query);
        $count = mysqli_num_rows($cek);
        $res=$kon->query($query);
        $reuslt = [];

        if($res->num_rows>0){
        $row=$res->fetch_assoc();
        $reuslt['loginStatus']=true;
        $reuslt['message']="Login Berhasil";

        $reuslt["userInfo"]=$row;
        } else {
            $reuslt['loginStatus']=false;
            $reuslt['message']="invalid Login Detail";
        };

        $json_data=json_encode($reuslt);

        echo $json_data;

        // if($count == 1){
        //     echo json_encode("berhasil");
        // } else {
        //     echo json_encode("gagal");
        // }

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