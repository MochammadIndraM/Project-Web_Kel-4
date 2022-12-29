    

<?php

$connection = new mysqli("localhost","root","","pron");

//get image name
$file = $_FILES['file']['name']; 

//create date now
$date = date('Y-m-d');

//make image path
$filePath = 'images/'.$file; 

$tmp_name = $_FILES['file']['tmp_name']; 

//move image to images folder   
move_uploaded_file($tmp_name, $filePath);

$result = mysqli_query($connection, "UPDATE transaksi SET file = '$file'");

if($result){
    echo json_encode([
        'message' => 'Data input successfully'
    ]);
}else{
    echo json_encode([
        'message' => 'Data Failed to input'
    ]);
}
?>