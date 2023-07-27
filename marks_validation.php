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
$English_marks = $_POST['English_marks'];
$Maths_marks = $_POST['Maths_marks'];
$Science_marks = $_POST['Science_marks'];    
$Social_marks = $_POST['Social_marks'];
$Total_marks = $_POST['Total_marks'];
$Total_percentage = $_POST['Total_Percentage'];
$Created_time = generate_time_id();
$query = "SELECT * FROM student_creation where Roll_no = '$Roll_no'";
$output = $conn->query($query);
if ($row=$output->num_rows==1){
    $student_query = "INSERT INTO marks(Roll_no,English,Maths,Science,Social,Total_marks,Total_percentage,Created_time) values('$Roll_no','$English_marks','$Maths_marks','$Science_marks','$Social_marks','$Total_marks','$Total_percentage','$Created_time')";
    if($conn->query($student_query)){
        header("refresh:3;url=fee_details.php?Roll_no=$Roll_no");
        echo "Marks got registered successfully!";
    }
    else{
        $error = $conn->error;
        echo "Registration failed".$error;
    }
}
else{
    echo "No such Roll_no exists";
}
?>
</div>
</div>
</body>
</html>