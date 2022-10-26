 <?php

 include 'conn.php';

 ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>list</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

 </head>

 <body>
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-sm-8">
                 <table class="table">
                     <thead>
                         <tr>
                             <th>Id</th>
                             <th>Name</th>
                             <th>Class</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>


                         <?php

                    $query  ="SELECT * FROM student";
                    $result = $conn->query($query);
                    $htmlTable= "";

                    if($result){
                        $htmlTable .= "<tr>";

                        while($row = $result->fetch_assoc()){
                            $htmlTable .= "<td>" . $row['id'] . "</td>";
                            $htmlTable .= "<td>" . $row['name'] . "</td>";
                            $htmlTable .= "<td>" . $row['class'] . "</td>";

                       $link = "form.php?" . "id=" . $row['id'] . "&name=" . $row['name'] . "&class=" . $row['class'];
                       $delete_link = "operation.php?" .  "id=" . $row['id'];
                            $htmlTable .= "<td>" . '<a href="'.$link.'" class="btn btn-success p-1">Update</a>' . "</td>";
                            $htmlTable .= "<td>" . '<a href="'.$delete_link.'" class="btn btn-danger p-1 ">Delete</a>' . "</td>";
                            $htmlTable .= "</tr>";
                        }
                        echo $htmlTable;

                    }else{
                        echo $conn->error;
                    }
                    
                     ?>
                     </tbody>
                 </table>
             </div>

         </div>
     </div>



     <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
     </script>
 </body>

 </html>