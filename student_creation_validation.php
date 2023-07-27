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
$Roll_no = $_POST['Roll_no'];
$Student_name = $_POST['Student_name'];
$Class = $_POST['Class'];
$Created_time = generate_time_id();    
$Created_by = $_POST['Created_by'];
$Image=$_FILES['Image']['name'];
$Roll_no_image = $Roll_no.'.png';
$query = "SELECT * FROM student_creation where Roll_no = '$Roll_no'";
$output = $conn->query($query);
if ($row=$output->num_rows == 1){
    echo "Roll_no already exists";
}
else{
    $student_query = "INSERT INTO student_creation(Roll_no,Student_name,Class,Created_time,Created_by,Image) values('$Roll_no','$Student_name','$Class','$Created_time','$Created_by','$Image')";
    if($conn->query($student_query)){
        move_uploaded_file($_FILES['Image']['tmp_name'],"C:/xampp/htdocs/school_management_system/Image/$Roll_no_image");
        echo "<script>alert('Image has been uploaded in the Folder')</script>";
        header("refresh:2;url=marks.php?Roll_no=$Roll_no");
        echo "Register successful!";
    }
    else{
        $error = $conn->error;
        echo "Registration failed".$error;
    }
}
?>
</div>
</div>
</body>
</html>