<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 orangered;
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
.card p {
  margin-bottom: 5px;
}

.card p.title {
  font-weight: bold;
  color:palevioletred;
}

.card img {
  border-radius: 50%;
  margin-top: 10px;
}
body{
    background-image: url("https://avante.biz/wp-content/uploads/Background-Images-For-Websites/Background-Images-For-Websites-029.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
</style>
</head>
<body>

<h2 style="text-align:center;color:palevioletred;padding:16px">Student Profile Card</h2>

<div class="card" style="padding:16px;">
  <?php
  session_start();
        include "conn.php";
        $Roll_no = $_SESSION["student_Roll_no"];
        if(isset($Roll_no)):?>
        <?php
        $query = "SELECT * from student_creation where Roll_no = '$Roll_no'";
        $query_output= $conn->query($query);
        while($row = $query_output->fetch_assoc()):?>
        <?php
        $Roll_no = $row['Roll_no'];
        $Student_name = $row['Student_name'];
        $Class = $row['Class'];
        $Created_time = $row['Created_time'];
        $Created_by = $row['Created_by'];
        $Roll_no_image = $Roll_no.'.png';
        ?>
        <?php echo "<img src='Image/$Roll_no_image' width='100' height='100' title='$Roll_no_image' alt=''>";?>
        <p class="title"><?php echo "$Student_name"; ?></p> 
        <p class="title"><?php echo "class-".$Class; ?></p>
        <p class="title"><?php echo "Created_time: ".$Created_time; ?></p>  
        <?php endwhile; ?>
        <?php endif; ?>
  <p>SCHOOLNAME</p>
  <div style="margin: 24px 0;"> 
    <a href="#"><i class="fa fa-google"></i></a>
    <a href="#"><i class="fa fa-dribbble"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-phone"></i></a> 
  </div>
  <p><button>Student</button></p>
</div>

</body>
</html>
