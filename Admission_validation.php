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
include "date_and_time.php";
$Student_name = $_POST['student_name'];
$Class = $_POST['class'];
$Mobilenumber = $_POST['Mobilenumber'];
$Email = $_POST['Email'];
$Created_time = generate_time_id();    
$Image=$_FILES['Image']['name'];
$Student_image = $Student_name.'.png';
 $student_query = "INSERT INTO Admission(Student_name,Class,Mobilenumber,Email,Created_time,Image) values('$Student_name','$Class','$Mobilenumber','$Email','$Created_time','$Image')";
if($conn->query($student_query)){
    move_uploaded_file($_FILES['Image']['tmp_name'],"C:/xampp/htdocs/school_management_system/Image/$Student_image");
    echo "<script>alert('Image has been uploaded in the Folder')</script>";
    header("refresh:2;url=home.php");
    echo "Register successful!";
}
else{
    $error = $conn->error;
    echo "Registration failed".$error;
}
?>
</div>
</div>
</body>
</html>