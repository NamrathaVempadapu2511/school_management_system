<html>
<head>
<link rel="stylesheet" href="new.css">
<style>
.form-group{
color:red;
}
   </style> 
</head>
<body>
<div class="new">
<div class="form-group">
<?php

include "conn.php";
session_start();
 $email = $_POST["email"];
 $Roll_no = $_POST["Roll_no"];
 $password = $_POST["password"];
 $password=md5($password);
 
 $query = "SELECT Email,Roll_no,Password FROM student_reg where Email='$email' and Roll_no='$Roll_no'";
 $output = $conn->query($query);
 $output_of_rows = $output->fetch_assoc();
if ($output->num_rows==1){
    header("refresh:3;url=student.php");
    echo "login successful";
    $_SESSION["student_Roll_no"] = $Roll_no;
}
else{
    header("refresh:3;url=student_login.php");
    echo "User not found";
}
?>
</div>
</div>
</body>
</html>