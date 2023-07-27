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

$Roll_no = $_GET["Roll_no"];
echo $Roll_no;
echo "<br>";
$query = "delete from createdtable where user_id='$User_id'";
if($conn->query($query)){
    header("refresh:3;url=Admin_Table.php");
    echo "deleted successfully";
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