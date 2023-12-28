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
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];
$mobile = $_POST["mobilenumber"];
$query = "SELECT * FROM admin_reg where Email='$email'";
$output = $conn->query($query);
if ($row=$output->num_rows == 1){
    echo "Email already exists";
    header("refresh:3;url=Admin_reg.php");
}
else{
if($password == $confirmpassword){
    $password=md5($password);
    $query = "INSERT INTO admin_reg(Username,Email,Password,Mobilenumber) values('$username','$email','$password',$mobile)";
    if($conn->query($query)){
        header("refresh:3;url=Admin_login.php");
        echo "Register successful!";
    }
    else{
        $error = $conn->error;
        echo "login failed".$error;
    }
}
else{
    echo "password and confirm password are not matched";
    header("refresh:3;url=Employee_reg.php");
}
}
?>
</div>
</div>
</body>
</html>