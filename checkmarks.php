<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .topnav {
  overflow: hidden;
  background-color:darkcyan;
  }
  .topnav a {
  float: left;
  color:white;
  text-align: center;
  padding: 15px 16px;
  font-size: 15px;
  }
  .topnav a:hover {
  background-color: darkolivegreen;
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
  <table class="table border=2 cellpadding=10 cellspacing=10">
    <thead>
      <tr style='background:darkgoldenrod;color:white;border:2'>
            <th>Roll_no</th>
            <th>English_marks</th>
            <th>Maths_marks</th>
            <th>Science_marks</th>
            <th>Social_marks</th>
            <th>Total_marks</th>
            <th>Total_percentage</th>
            <th>Created_time</th>
      </tr>
    </thead>
    <tbody>
    <?php
        include "conn.php";
        $query = "SELECT * from marks";
        $query_output= $conn->query($query);
        while($row = $query_output->fetch_assoc()){
        $Roll_no = $row['Roll_no'];
        $English_marks = $row['English'];
        $Maths_marks = $row['Maths'];
        $Science_marks = $row['Science'];    
        $Social_marks = $row['Social'];
        $Total_marks = $row['Total_marks'];
        $Total_percentage = $row['Total_percentage'];
        $Created_time = $row['Created_time'];
        echo "<tr style='background:seashell;color:purple'>
                <td>$Roll_no</td>
                <td>$English_marks</td>
                <td>$Maths_marks</td>
                <td>$Science_marks</td>
                <td>$Social_marks</td>
                <td>$Total_marks</td>
                <td>$Total_percentage</td>
                <td>$Created_time</td>
                <tr>";
        }
    ?>
    </tbody>
  </table>
    <footer>
        <p>Author: Namratha Vempadapu<br>
        <a href="https://www.youtube.com/">@example.com</a></p>
    </footer>
</body>
</html>
