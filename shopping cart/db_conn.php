<?php 
 $conn = mysqli_connect('localhost','root','','blog');
 if (!$conn) {
   die('Connected failed'.mysqli_connect_error());
 }
?>