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
</head>
<body>
<div class="box">
    <div class="container">
        <form method="POST" action="marks_validation.php">
    <div class="top">
    <br>
        <header>
            Marks
        </header>
    </div>
    <?php
        include 'conn.php';
        $Roll_no = $_GET["Roll_no"];
        // $query = "select * from studentcreation where Roll_no = '$Roll_no'";
        // $output = $conn->query($query);
        // while ($row = $output->fetch_assoc()){
        // $Roll_no = $_row["Roll_no"];
        // }
        ?>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter Roll_no" name="Roll_no" id="Roll_no" value = <?php echo $Roll_no; ?>> 
        <i class='bx bx-user-circle'></i>
        <j id="username_error"></j>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter English_marks" name="English_marks" id="English_marks" onchange="check_email_exists();">
        <i class='bx bx-book'></i>
        <j id="username_error"></j>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter Maths_marks" name="Maths_marks" id="Maths_marks">
        <i class='bx bx-book'></i>
        <j id="email_error"></j>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter Science_marks" name="Science_marks" id="Science_marks">
        <i class='bx bx-book'></i>
        <j id="email_error"></j>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter Social_marks" name="Social_marks" id="Social_marks">
        <i class='bx bx-book'></i>
        <j id="password_error"></j>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter Total_marks" name="Total_marks" id="Total_marks">
        <i class='bx bx-table'></i>
        <j id="password_error"></j>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter Total_Percentage" name="Total_Percentage" id="Total_Percentage">
        <i class='bx bx-table'></i>
        <j id="password_error"></j>
    </div>
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
