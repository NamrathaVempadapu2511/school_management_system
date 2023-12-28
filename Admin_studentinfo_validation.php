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
            background-color: darkgrey;
        }

        .topnav a {
            float: left;
            color: khaki;
            text-align: center;
            padding: 15px 16px;
            font-size: 15px;
        }

        .topnav a:hover {
            background-color: papayawhip;
            color: black;
        }

        .arrow {
            border: solid black;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 3px;
        }

        .left {
            transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: papayawhip;
            color: Palevioletred;
            height: 40px;
        }

        tr:nth-child(even) {
            background-color: lavenderblush;
        }

        tr:hover {
            background-color: lavender;
        }

        td button {
            padding: 6px 12px;
            border: none;
            cursor: pointer;
            color: red;
            font-size: 14px;
            border-radius: 4px;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        td button:hover {
            background-color: #4CAF50;
        }

        td img {
            width: 150px;
            height: 150px;
        }
        .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: darkgrey;
   color: palevioletred;
   text-align: center;}
    </style>
</head>

<body>
    <div class="topnav" style="font-weight:bold">
        <a class="active" href="Admission_info.php">Home</a>
        <a href="https://www.eenadu.net/">News</a>
        <a href="#">Contact</a>
        <a href="#">About</a>
        <div>
        <form method="post" action="admission_info_validation.php" style="float:right;padding:10px" enctype="multipart/form-data">
        <input type="text" placeholder="Search data" name="search" id="search">
        <button class="btn btn-primary" name="submit">search</button>
        </form>
        </div>
    </div>
    <table border="1" cellspacing="1" cellpadding="1" width="100%">
        <tr>
            <th>Student_name</th>
            <th>Class</th>
            <th>Mobilenumber</th>
            <th>Email</th>
            <th>Created_time</th>
            <th>Accept</th>
            <th>Reject</th>
            <th>Pending</th>
            <th>Image</th>
        </tr>
        <?php
        include "conn.php";
        $search=$_POST['search'];
        $query = "SELECT * from student_creation";
        $query_output= $conn->query($query);
        while($row = $query_output->fetch_assoc()){
        $Roll_no = $row['Roll_no'];
        $Student_name = $row['Student_name'];
        $Class = $row['Class'];
        $Created_time = $row['Created_time'];
        $Created_by = $row['Created_by'];
        $Roll_no_image = $Roll_no.'.png';
        echo "<tr style='background:seashell;color:purple'>
                <td>$Roll_no</td>
                <td>$Class</td>
                <td>$Student_name</td>
                <td>$Created_time</td>
                <td>$Created_by</td>
                <td><a href='update_user.php?Roll_no=$Roll_no'>Check_fee</a></td>
                <td><a href='check_marks.php?Roll_no=$Roll_no'>Check_marks</a></td>
                <td><a href='delete.php?Roll_no=$Roll_no'>Delete</a></td>
                <td><img src='Image/$Roll_no_image' width='100' height='100' title='$Roll_no_image' alt=''></td>
                <tr>";
        }
        ?>
<div class ="footer">
    <p>Author: Namratha Vempadapu<br>
    <a href="https://www.youtube.com/">@for any query</a></p>
</div>

</body>

</html>
