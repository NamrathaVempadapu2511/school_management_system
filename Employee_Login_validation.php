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

 $email = $_POST["email"];
 $password = $_POST["password"];
 $password=md5($password);
 
 $query = "SELECT Email,Password FROM Employee_reg where Email='$email' and Password='$password'";
 $output = $conn->query($query);
 $output_of_rows = $output->fetch_assoc();
if ($output->num_rows==1){
    header("refresh:3;url=Employee.php");
    echo "login successful";
}
else{
    header("refresh:3;url=Employee_Login.php");
    echo "User not found";
}
 
?>
</div>
</div>
</body>
</html>