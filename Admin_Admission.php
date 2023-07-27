<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .topnav {
  overflow: hidden;
  background-color:salmon;
  }
  .topnav a {
  float: left;
  color:white;
  text-align: center;
  padding: 15px 16px;
  font-size: 15px;
  }
  .topnav a:hover {
  background-color: orange;
  color: black;
  }
  footer {
        text-align: center;
        padding: 10px;
        background-color: DarkSalmon;
        color: white;
        }
  </style>
</head>
<body>
  <div class="topnav">
  <a class="active" href="https://home.google.com/welcome/">Home</a>
  <a href="https://www.eenadu.net/">News</a>
  <a href="https://in.search.yahoo.com/search?fr=mcafee&type=E211IN885G0&p=gmail.com">Contact</a>
  <a href="https://www.ibm.com/about">About</a>
  </div>
    <table border=1 cellspacing=1 cellpadding=1 width=100%>
    <tr style='background:burlywood;color:Palevioletred;height:10px'>
    <th>Student_name</th>
    <th>Class</th>
    <th>Mobilenumber</th>
    <th>Email</th>
    <th>Created_time</th>
    <th>Image</th>
    <th>Accept</th>
    <th>Reject</th>
    </tr>
    <?php
        include "conn.php";
        $query = "SELECT * from admission";
        $query_output= $conn->query($query);
        while($row = $query_output->fetch_assoc()){
        $Student_name = $row['Student_name'];
        $Class = $row['Class'];
        $Mobilenumber = $row['Mobilenumber'];
        $Email = $row['Email'];
        $Created_time = $row['Created_time'];
        $student_image = $Student_name.'.png';
        echo "<tr style='background:pink;color:purple'>
                <td>$Student_name</td>
                <td>$Class</td>
                <td>$Mobilenumber</td>
                <td>$Email</td>
                <td>$Created_time</td>
                <td><img src='Image/$student_image' width='150' height='150' title='$student_image' alt=''></td>
                <td style='text-align:center;color:green'><button>Accept</button></td>
                <td style='text-align:center'><button>Reject</button></td>
                <tr>";
        }
    ?>

</body>
</html>