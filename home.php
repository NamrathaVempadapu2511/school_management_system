<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="dropdown.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: lavender;
}

li {
  float: left;
}

li a {
  display: block;
  color: purple;
  text-align:center;
  padding: 14px 40px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: seashell;
  height: 63px;
}

.active {
  background-color: lavenderblush;
  height: 63px;
}
.fa-carpet {
    font-size: 24px; /* Adjust the size of the icon */
    color: black;
}
.animated-text {
  font-size: 40px;
  display: inline-block;
}

.word {
  display: inline-block;
  animation: slideIn 1s ease-in-out infinite;
}

@keyframes slideIn {
  0%, 100% {
    transform: translateX(0);
    opacity: 1;
  }
  50% {
    transform: translateX(-20px);
    opacity: 0.5;
  }
}
body{
    background-image: url("https://www.expenseanywhere.com/wp-content/uploads/2016/09/website-backgrounds-E280AB1E280AC-E280ABE280AC.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    
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
<div>
<ul>
  <li><a class="active" href="#home" style="font-size:20px;font-weight:bold">Home</a></li>
  <li><a href="#news" style="font-size:20px;font-weight:bold">About</a></li>
  <li><a href="#contact" style="font-size:20px;font-weight:bold">Contact</a></li>
  <li><a href="Admission_reg.php" style="font-size:20px;font-weight:bold">Admission</a></li>
  <li style="float:right"><a>
    <div class="select-contianer">
        <select class="select-box" id="linkSelected" style="text-align:center;font-weight:bold" onchange="goTosignup()">
            <option>Signup</option>
            <i class="fa fa-carpet"></i>
            <option value="Admin_reg.php">Admin_signup</option>
            <option value="Employee_reg.php">Employee_signup</option>
            <option value="Student_reg.php">Student_Signup</option>
        </select>
    </div></a>
  </li>
  <li style="float:right"><a><div class="select-contianer">
        <select class="select-box" id="linkSelect" style="text-align:center;font-weight:bold" onchange="goToLink()">
            <option>Login</option>
            <option value="Admin_Login.php">Admin_Login</option>
            <option value="Employee_Login.php">Employee_Login</option>
            <option value="Student_Login.php">Student_Login</option>
        </select>
    </div></a></li>
</ul>
</div>
<div class="animated-text" style="color:palevioletred;padding:290px 10px 10px 390px">
    <span class="word">Welcome</span>
    <span class="word">To</span>
    <span class="word">Our</span>
    <span class="word">Student Management System</span>
  </div>
  <div class ="footer">
    <p>Author: Namratha Vempadapu<br>
    <a href="https://www.youtube.com/">@for any query</a></p>
    </div>
  <script>
    function goTosignup() {
      var select = document.getElementById("linkSelected");
      var selectedValue = select.value;
      if (selectedValue) {
        window.location.href = selectedValue;
      }
    }
  </script>
  <script>
    function goToLink() {
      var select = document.getElementById("linkSelect");
      var selectedValue = select.value;
      if (selectedValue) {
        window.location.href = selectedValue;
      }
    }
  </script>
</body>
</html>


