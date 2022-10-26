<?php




$conn = new mysqli("localhost","root","", "mydb");

if($conn->connect_error){
    echo $conn->connect_error;
}else{
    // echo "success";
}




?>