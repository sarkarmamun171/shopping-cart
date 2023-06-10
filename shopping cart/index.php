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
        <?php 
        require_once("./message.php");
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Students Details
                            <a href="./student_create.php" class="btn btn-primary float-end">Add Student</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Student Email</th>
                                    <th>Student Phone</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                 $query = "SELECT * FROM students";
                                 $query_run = mysqli_query($conn, $query);
                                 if (mysqli_num_rows($query_run)>0) {
                                   foreach($query_run as $student){
                                    ?>
                                        <tr>
                                            <td><?=$student["id"]?></td>
                                            <td><?=$student["name"]?></td>
                                            <td><?=$student["email"]?></td>
                                            <td><?=$student["phone"]?></td>
                                            <td><?=$student["course"]?></td>
                                            <td>
                                                <a href="./student_view.php?id=<?=$student["id"]?>" class="btn btn-primary btn-sm">View</a>
                                                <a href="./student_edit.php?id=<?=$student["id"]?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="./create.php" method="post" class="d-inline">
                                                <input type="hidden" name="student_id" value="<?=$student["id"]?>">
                                                   <button type="submit" name="delete" value="<?=$student["id"]?>" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                   }
                                 }else {
                                    echo "<h5>No Record Found</h5>";
                                 }
                                ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>