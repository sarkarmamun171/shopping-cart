<?php 
session_start();
require_once("./db_conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD update</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="cart-header">
                        <h4>Student Details
                            <a href="./index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                        <div class="card-body">
                            <?php
                            $student_id = mysqli_real_escape_string($conn,$_GET["id"]);
                            $query = "SELECT *FROM students WHERE id =$student_id";
                            $query_run = mysqli_query($conn,$query);
                            if (mysqli_num_rows( $query_run)>0) {
                               $student = mysqli_fetch_array($query_run) ;
                               ?>
                            <form action="./create.php" method="post">
                                <input type="hidden" name="student_id" value="<?=$student["id"]?>">
                                <div class="mb-3">
                                    <label for="">Student Name</label>
                                    <input type="name" class="form-control" name="name" value="<?=$student["name"]?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Student Email</label>
                                    <input type="email" class="form-control" name="email" value="<?=$student["email"]?>"">
                                </div>
                                <div class="mb-3">
                                    <label for="">Student Phone</label>
                                    <input type="phone" class="form-control" name="phone" value="<?=$student["phone"]?>"">
                                </div>
                                <div class="mb-3">
                                    <label for="">Student Course</label>
                                    <input type="text" class="form-control" name="course" value="<?=$student["course"]?>">
                                </div>
                            </form>

                               <?php
                            }else
                            {
                                echo "No such id found";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
