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
$First_term = $_POST['first_term'];
$Second_term = $_POST['second_term'];
$Third_term = $_POST['third_term'];    
$Created_time = generate_time_id();
$query = "SELECT * FROM student_creation where Roll_no = '$Roll_no'";
$output = $conn->query($query);
if ($row=$output->num_rows==1){
    $student_query = "INSERT INTO fee_details(Roll_no,First_term,Second_term,Third_term,Created_time) values('$Roll_no','$First_term','$Second_term','$Third_term','$Created_time')";
    if($conn->query($student_query)){
        header("refresh:3;url=Employee.php");
        echo "Fee_details got registered successfully!";
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