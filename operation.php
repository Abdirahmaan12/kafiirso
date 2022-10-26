<?php



include 'conn.php';
  
   
if(isset($_POST['insert'])){

    $studentid= $_POST['student_id'];
    $studentname= $_POST['student_name'];
    $studentclass= $_POST['student_class'];

//   preparing the query
    $query= "INSERT INTO student(id,name,class) VALUES('$studentid','$studentname', '$studentclass')";


    // excute query

    $result= $conn->query($query);

    if($result){
        echo "successfully Registered";
    }else{
         echo $conn->error;

         
    }}else if(isset($_POST['update'])){


    $studentid= $_POST['student_id'];
    $studentname= $_POST['student_name'];
    $studentclass= $_POST['student_class'];

//   preparing the query
    $query= "UPDATE student set name ='$studentname', class='$studentclass' where id='$studentid'";


    // excute query

    $result= $conn->query($query);

    if($result){
        echo "successfully updated";
        header("location: list.php");
    }else{
         echo $conn->error;
    }

}


if(isset($_GET['id'])){
    $studentid= $_GET['id'];
 

//   preparing the query
    $query= "DELETE FROM student  where id='$studentid'";


    // excute query

    $result= $conn->query($query);

    if($result){
        echo "successfully Deleted";
        header("location: list.php");
    }else{
         echo $conn->error;
    }
}

    
 






?>