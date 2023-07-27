<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
    <style>
    j {
    color : red;
    }
</style>
<style>
        /* Optional: Apply general styling to the entire form */
        form {
            max-width: 400px;
            margin: 0 auto;
        }

        /* Style for the label element */
        .input-field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Style for the input[type="file"] element */
        .input-field input[type="file"] {
            display: block;
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<div class="box">
    <div class="container">
        <form method="POST" action="student_creation_validation.php" enctype="multipart/form-data">
    <div class="top">
        <span>
            <a style="color:pink" href="login.php">Have an account?Login</a>
        </span>
    <br>
        <header>
            Signup
        </header>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter roll_no" name="Roll_no" id="Roll_no" onchange="check_email_exists();">
        <i class='bx bx-user-circle' style="padding:10px;top:-40px;color:yellow"></i>
        <j id="username_error"></j>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter student_name" name="Student_name" id="Student_name">
        <i class='bx bx-child' style="padding:10px;top:-40px;color:yellow"></i>
        <j id="email_error"></j>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter class" name="Class" id="Class">
        <i class='bx bx-building' style="padding:10px;top:-40px;color:yellow"></i>
        <j id="email_error"></j>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Created_by" name="Created_by" id="Created_by">
        <i class='bx bx-user' style="padding:10px;top:-40px;color:yellow"></i>
        <j id="password_error"></j>
    </div>
    <div class="input-field" >
        <label style="color:azure">Image:</label>
      <input type="file" class="form" name="Image" id="Image" accept=".jpg, .jpeg, .png" value="">
    </div>
    <br><br>
    <div class="submit">
    <input type="submit" class="submit" value="submit" name="submit" id="submit" onclick="return form_validation();">
    </div>
    </form>
    </div>
    </div>
    <script>
        function check_email_exists() {
          var email = document.getElementById('email').value;
          $.ajax({
            url: "email_already_exists.php",
            type: "POST",
            data:{"email":email},
            success :function(response){
              response = response.trim();
              if(response == "email already exists"){
                document.getElementById('email_error').innerHTML = response;
              }
              else{
                alert(response);
              }
            }
          })
        }
    </script>
    <script>

  function form_validation(){

    var go_to_next_page = "granted";
    var Roll_no = document.getElementById('Roll_no').value;
    var Student_name = document.getElementById('Student_name').value;
    var Class = document.getElementById('Class').value;
    var Created_by = document.getElementById('Created_by').value;



    if(Roll_no == ""){
      document.getElementById('Roll_no_error').innerHTML= "Roll_no is empty";
      go_to_next_page = "not granted";
    }
    else {
      document.getElementById('Roll_no_error').innerHTML= "";
    }
    if(email == ""){
      document.getElementById('email_error').innerHTML= "email is empty";

    }
    else {
      document.getElementById('email_error').innerHTML= "";
    }
    if(DOB == ""){
      document.getElementById('DOB_error').innerHTML= "dob is empty";

    }
    else {
      document.getElementById('DOB_error').innerHTML= "";
    }
    if(password == ""){
      document.getElementById('password_error').innerHTML= "password is empty";
      go_to_next_page = "not granted";
    }
    else {
      document.getElementById('password_error').innerHTML= "";
    }
    if(confirmpassword == ""){
      document.getElementById('confirmpassword_error').innerHTML= "confirmpassword is empty";
      go_to_next_page = "not granted";
    }
    else if(confirmpassword != password){
      document.getElementById('confirmpassword_error').innerHTML= "cpwd and pwd not same";
      go_to_next_page = "not granted";

    }
    else {
      document.getElementById('confirmpassword_error').innerHTML= "";
    }
    if(mobilenumber == ""){
      document.getElementById('mobilenumber_error').innerHTML= "mobilenumber is empty";

    }
    else {
      document.getElementById('mobilenumber_error').innerHTML= "";
    }
    


    if(go_to_next_page == "granted"){
      return true;
    }
    else{
      return false;
    }
  }

</script>
</body>
</html>