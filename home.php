<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="dropdown.css">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: burlywood;
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
  background-color: darkgoldenrod;
  height: 63px;
}

.active {
  background-color: palevioletred;
  height: 63px;
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
    background-image: url("https://avante.biz/wp-content/uploads/Background-Images-For-Websites/Background-Images-For-Websites-001.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
</style>
</head>
<body>
<div>
<ul>
  <li><a class="active" href="#home" style="font-size:20px">Home</a></li>
  <li><a href="#news" style="font-size:20px">About</a></li>
  <li><a href="#contact" style="font-size:20px">Contact</a></li>
  <li><a href="#contact" style="font-size:20px">Admission</a></li>
  <li style="float:right"><a>
    <div class="select-contianer">
        <select class="select-box" id="linkSelect" style="text-align:center" onchange="goToLink()">
            <option value="">Signup</option>
            <option value="Admin_reg.php">Admin_singup</option>
            <option value="Employee_reg.php">Employee_singup</option>
            <option value="Student_reg.php">Student_Singup</option>
        </select>
    </div></a>
  </li>
  <li style="float:right"><a><div class="select-contianer">
        <select class="select-box" id="linkSelect" style="text-align:center" onchange="goToLink()">
            <option value="">Login</option>
            <option value="Admin_Login.php">Admin_Login</option>
            <option value="Employee_Login.php">Employee_Login</option>
            <option value="Student_Login.php">Student_Login</option>
        </select>
    </div></a></li>
</ul>
</div>
<div class="animated-text" style="color:orangered;padding:290px 10px 10px 390px">
    <span class="word">Welcome</span>
    <span class="word">To</span>
    <span class="word">Our</span>
    <span class="word">Student Management System</span>
  </div>
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


