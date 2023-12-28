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

include 'conn.php';

$Student_name = $_GET["Student_name"];
echo $Student_name;
$status=$_GET['status'];
$student_query = "Update student_creation set status = '$status' WHERE  Student_name= '$Student_name'"; 
if($conn->query($student_query)){
    header("refresh:3;url=Admission_info.php");
    echo $status;
}
else{
    $error = $conn->error;
    echo "not deleted".$error;
}
?>
</body>
</div>
</div>
</html>