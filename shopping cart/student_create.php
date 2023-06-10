<?php 
session_start();
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
       include_once("./message.php");
       ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="cart-header">
                        <h4>Student add
                            <a href="./index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                        <div class="card-body">
                            <form action="./create.php" method="post">
                                <div class="mb-3">
                                    <label for="">Student Name</label>
                                    <input type="name" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="">Student Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="">Student Phone</label>
                                    <input type="phone" class="form-control" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="">Student Course</label>
                                    <input type="text" class="form-control" name="course">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
