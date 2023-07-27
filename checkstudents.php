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
  background-color:Grey;
  }
  .topnav a {
  float: left;
  color:white;
  text-align: center;
  padding: 15px 16px;
  font-size: 15px;
  }
  .topnav a:hover {
  background-color: silver;
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
  <table class="table table-borderd">
    <thead>
      <tr style='background:skyblue;color:whitesmoke'>
            <th>Roll_no</th>
            <th>Student_name</th>
            <td>Class</td>
            <td>Created_time</td>
            <td>Created_by</td>
            <td>Image</td>
      </tr>
    </thead>
    <tbody>
    <?php
        include "conn.php";
        $query = "SELECT * from student_creation";
        $query_output= $conn->query($query);
        while($row = $query_output->fetch_assoc()){
        $Roll_no = $row['Roll_no'];
        $Student_name = $row['Student_name'];
        $Class = $row['Class'];
        $Created_time = $row['Created_time'];
        $Created_by = $row['Created_by'];
        $Image = $row['Image'];
        echo "<tr style='background:pink;color:green'>
                <td>$Roll_no</td>
                <td>$Class</td>
                <td>$Student_name</td>
                <td>$Created_time</td>
                <td>$Created_by</td>
                <td><img src='Image/$Image' width='200' title='$Image' alt='Image'></td>
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