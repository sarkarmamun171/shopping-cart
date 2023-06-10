<?php 
session_start();
require_once("./db_conn.php");
// delete part code start
if (isset($_POST["delete"])) {
    $student_id = mysqli_real_escape_string($conn,$_POST["student_id"]);
  // $name = htmlspecialchars(trim($_POST["name"])); 
  // $email = htmlspecialchars(trim($_POST["email"])); 
  // $phone = htmlspecialchars(trim($_POST["phone"])); 
  // $course = htmlspecialchars(trim($_POST["course"])); 

  $query = "DELETE FROM `students` WHERE id ='$student_id'";
  $query_run = mysqli_query($conn,$query);

 if ($query_run) {
   $_SESSION["message"] = "Student Account Delete Succesfully";
   header("location:./index.php");
   exit(0);
 }else{
    $_SESSION["message"] = "Student Account Delete Unsuccesfully";
    header("location:./index.php");
    exit(0);
 }
}
//delete part code end


// update/editing code start
if (isset($_POST["update_student"])) {
  $student_id = mysqli_real_escape_string($conn,$_POST["student_id"]);
  $name = htmlspecialchars(trim($_POST["name"])); 
  $email = htmlspecialchars(trim($_POST["email"])); 
  $phone = htmlspecialchars(trim($_POST["phone"])); 
  $course = htmlspecialchars(trim($_POST["course"])); 

  $query = "UPDATE `students` SET `name`='$name',`email`='$email',`phone`='$phone',`course`='$course' WHERE id ='$student_id'";
  $query_run = mysqli_query($conn,$query);

 if ($query_run) {
   $_SESSION["message"] = "Student create update Succesfully";
   header("location:./index.php");
   exit(0);
 }else{
    $_SESSION["message"] = "Student not created update";
    header("location:./index.php");
    exit(0);
 }
}
// update/editing code end

// value insert table start
if (isset($_POST["save_student"])) {
 $name = htmlspecialchars(trim($_POST["name"])); 
 $email = htmlspecialchars(trim($_POST["email"])); 
 $phone = htmlspecialchars(trim($_POST["phone"])); 
 $course = htmlspecialchars(trim($_POST["course"])); 

 $query ="INSERT INTO `students`(`name`, `email`, `phone`, `course`) VALUES ('$name','$email','$phone','$course')";
 $query_run = mysqli_query($conn,$query);

 if ($query_run) {
   $_SESSION["message"] = "Student created Succesfully";
   header("location:./student_create.php");
   exit(0);
 }else{
    $_SESSION["message"] = "Student not created Succesfully";
    header("location:./student_create.php");
    exit(0);
 }
}
// value insert table end
// print_r($_POST);
?>