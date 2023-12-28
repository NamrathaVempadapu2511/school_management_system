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
            <th>First_term</th>
            <th>Second_term</th>
            <th>Third_term</th>
            <th>Created_time</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $Roll_no = $_GET["Roll_no"];
        include "conn.php";
        $query = "SELECT * from fee_details where Roll_no='$Roll_no'";
        $query_output= $conn->query($query);
        while($row = $query_output->fetch_assoc()){
            $Roll_no = $row['Roll_no'];
            $First_term = $row['First_term'];
            $Second_term = $row['Second_term'];
            $Third_term = $row['Third_term'];    
            $Created_time = $row['Created_time'];
            echo "<tr style='background:seashell;color:purple'>
                <td>$Roll_no</td>
                <td>$First_term</td>
                <td>$Second_term</td>
                <td>$Third_term</td>
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
