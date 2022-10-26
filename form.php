<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <?php

   if(isset($_GET['id'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    $class = $_GET['class'];

   }else{
     
    $id = "";
    $name = "";
    $class = "";

   }




   ?>



    <div class="container">


        <div class="row justify-content-center mt-4">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <form action="operation.php" method="POST">
                            <div class="form-group m-2">
                                <label for="" class="form-label">student-id</label>
                                <input type="text" name="student_id" class="form-control" placeholder=""
                                    value="<?php echo $id ?>">
                            </div>
                            <div class="form-group m-2">
                                <label for="" class="form-label">student name</label>
                                <input type="text" name="student_name" class="form-control" placeholder=""
                                    value="<?php echo $name ?>">

                                <div class="form-group m-2">
                                    <label for="" class="form-label">student class</label>
                                    <input type="text" name="student_class" class="form-control" placeholder=""
                                        value="<?php echo $class ?>">
                                </div>
                                <button type="submit" name="insert" class="btn btn-success m-2">save info</button>
                                <button type="submit" name="update" class="btn btn-info m-2">update info</button>
                                <button type="submit" name="Delete" class="btn btn-warning m-2">Delete info</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>