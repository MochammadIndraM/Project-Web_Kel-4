    

<?php

$connection = new mysqli("localhost","root","","pron");

//get image name
$image = $_FILES['image']['name']; 

//create date now
$date = date('Y-m-d');

//make image path
$imagePath = 'images/'.$image; 

$tmp_name = $_FILES['image']['tmp_name']; 

//move image to images folder   
move_uploaded_file($tmp_name, $imagePath);

$result = mysqli_query($connection, "INSERT INTO file_upload (image,date)VALUES ('$image','$date')");

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