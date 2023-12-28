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
        <form method="POST" action="Admission_validation.php" enctype="multipart/form-data" onsubmit="return form_validation();">
    <div class="top">
        <header>
            Admission Form
        </header>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter student_name" name="student_name" id="student_name">
        <i class='bx bx-user-circle' style="padding:10px;top:-40px;color:plum"></i>
        <j id="student_name_error"></j>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter class" name="class" id="class">
        <i class='bx bx-child' style="padding:10px;top:-40px;color:plum"></i>
        <j id="class_error"></j>
    </div>
    <div class="input-field">
        <input type="phonenumber" class="input" placeholder="Enter Mobilenumber" name="Mobilenumber" id="Mobilenumber">
        <i class='bx bx-building' style="padding:10px;top:-40px;color:plum"></i>
        <j id="mobilenumber_error"></j>
    </div>
    <div class="input-field">
        <input type="email" class="input" placeholder="Enter Email" name="Email" id="Email">
        <i class='bx bx-user' style="padding:10px;top:-40px;color:plum"></i>
        <j id="email_error"></j>
    </div>
    <div class="input-field" >
        <label style="color:azure">Image:</label>
      <input type="file" class="form" name="Image" id="Image" accept=".jpg, .jpeg, .png" value="">
        <j id="image_error"></j>
    </div>
    <br><br>
    <div class="submit">
    <input type="submit" class="submit" value="submit" name="submit" id="submit">
    </div>
    </form>
    </div>
    </div>
    <script>
function form_validation() {
    var go_to_next_page = true;
    var student_name = document.getElementById('student_name').value;
    var class_name = document.getElementById('class').value;
    var Mobilenumber = document.getElementById('Mobilenumber').value;
    var Email = document.getElementById('Email').value;
    var Image = document.getElementById('Image').value;

    if (student_name.trim() === "") {
        document.getElementById('student_name_error').innerHTML = "Student name is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('student_name_error').innerHTML = "";
    }

    if (class_name.trim() === "") {
        document.getElementById('class_error').innerHTML = "Class is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('class_error').innerHTML = "";
    }

    if (Mobilenumber.trim() === "") {
        document.getElementById('mobilenumber_error').innerHTML = "Mobilenumber is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('mobilenumber_error').innerHTML = "";
    }

    if (Email.trim() === "") {
        document.getElementById('email_error').innerHTML = "Email is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('email_error').innerHTML = "";
    }

    if (Image.trim() === "") {
        document.getElementById('image_error').innerHTML = "Image is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('image_error').innerHTML = "";
    }

    return go_to_next_page;
}
</script>
</body>
</html>
