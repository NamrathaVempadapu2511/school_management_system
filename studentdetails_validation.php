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
$Roll_no = $_POST["Roll_no"];
$Fathername = $_POST["Fathername"];
$Mothername = $_POST["Mothername"];
$Mobilenumber = $_POST["Mobilenumber"];
$query = "SELECT * FROM student_creation where Roll_no='$Roll_no'";
if($conn->query($query)){
    $query = "INSERT INTO studentdetails(Roll_no,Fathername,Mothername,Mobilenumber) values('$Roll_no','$Fathername','$Mothername','$Mobilenumber')";
    if($conn->query($query)){
        header("refresh:3;url=student.php");
        echo "Register successful!";
    }
    else{
        $error = $conn->error;
        echo "Details not submitted".$error;
    }
}
else{
    echo "no such Roll_no exists";
}
?>
</div>
</div>
</body>
</html>