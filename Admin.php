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
  background-color:whitesmoke;
  }
  .topnav a {
  float: left;
  color:plum;
  text-align: center;
  padding: 15px 20px;
  font-size: 15px;
  font-weight: bold;
  }
  .topnav a:hover {
  background-color: lavender;
  color: skyblue;
  }
  body{
    background-image: url("http://4.bp.blogspot.com/-Uk_KFP52APE/URd2jbxosPI/AAAAAAAAKwo/dPSSk-YE4MQ/s1600/plain+blue+cool+hd+images.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: palevioletred;
  background-color: lavenderblush;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: lightblue;
color:aliceblue}

.button:active {
  background-color: lightpink;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: lavender;
   color: palevioletred;
   text-align: center;
}
  </style>
</head>
<body>
    <div class="topnav">
    <a class="active" href="https://home.google.com/welcome/">Home</a>
    <a href="https://www.eenadu.net/">News</a>
    <a href="https://in.search.yahoo.com/search?fr=mcafee&type=E211IN885G0&p=gmail.com">Contact</a>
    <a href="https://www.ibm.com/about">About</a>
    <a href="home.php" style="float:right">Logout</a>
    </div>
    <div style="padding:250px 10px 10px 200px">
    <a href="Admission_info.php" class="button" style="padding:150px 10px 10px 100px">Admissions view</a>
    </div>
    <div style="padding:0px 10px 100px 1100px">
    <a href="Admin_studentinfo.php" class="button" style="padding:150px 10px 10px 100px">Student details view</a>
    </div>
    <div style="padding:80px 30px 10px 600px">
    <a href="#" class="button" style="padding:150px 10px 10px 100px">Permissions for leaves</a>
    </div>
    <div class ="footer">
    <p>Author: Namratha Vempadapu<br>
    <a href="https://www.youtube.com/">@for any query</a></p>
    </div>
</body>
</html>
