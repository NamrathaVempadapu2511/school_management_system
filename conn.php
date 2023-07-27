<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'studentmanagement_admin';
$conn = new mysqli($server,$username,$password,$database);
 if($conn->connect_error){
  $error=$conn->connect_error;
  echo "Not connected due to:".$error;
 }
 ?>