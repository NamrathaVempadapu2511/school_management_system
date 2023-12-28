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
    color: red;
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
            ?>
            <div class="input-field">
                <input type="text" class="input" placeholder="Enter Roll_no" name="Roll_no" id="Roll_no" value=<?php echo $Roll_no; ?>> 
                <i class='bx bx-user-circle'></i>
                <j id="Roll_no_error"></j>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Enter English_marks" name="English_marks" id="English_marks">
                <i class='bx bx-book'></i>
                <j id="English_marks_error"></j>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Enter Maths_marks" name="Maths_marks" id="Maths_marks">
                <i class='bx bx-book'></i>
                <j id="Maths_marks_error"></j>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Enter Science_marks" name="Science_marks" id="Science_marks">
                <i class='bx bx-book'></i>
                <j id="Science_marks_error"></j>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Enter Social_marks" name="Social_marks" id="Social_marks">
                <i class='bx bx-book'></i>
                <j id="Social_marks_error"></j>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Enter Total_marks" name="Total_marks" id="Total_marks">
                <i class='bx bx-table'></i>
                <j id="Total_marks_error"></j>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Enter Total_Percentage" name="Total_Percentage" id="Total_Percentage">
                <i class='bx bx-table'></i>
                <j id="Total_Percentage_error"></j>
            </div>
            <br>
            <div class="submit">
                <input type="submit" class="submit" value="submit" name="submit" id="submit" onclick="return form_validation();">
            </div>
        </form>
    </div>
</div>
<script>
function form_validation() {
    var go_to_next_page = true;
    var Roll_no = document.getElementById('Roll_no').value;
    var English_marks = document.getElementById('English_marks').value;
    var Maths_marks = document.getElementById('Maths_marks').value;
    var Science_marks = document.getElementById('Science_marks').value;
    var Social_marks = document.getElementById('Social_marks').value;
    var Total_marks = document.getElementById('Total_marks').value;
    var Total_Percentage = document.getElementById('Total_Percentage').value;

    if (Roll_no === "") {
        document.getElementById('Roll_no_error').innerHTML = "Roll_no is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('Roll_no_error').innerHTML = "";
    }
    if (English_marks === "") {
        document.getElementById('English_marks_error').innerHTML = "English marks is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('English_marks_error').innerHTML = "";
    }
    if (Maths_marks === "") {
        document.getElementById('Maths_marks_error').innerHTML = "Maths marks is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('Maths_marks_error').innerHTML = "";
    }
    if (Science_marks === "") {
        document.getElementById('Science_marks_error').innerHTML = "Science marks is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('Science_marks_error').innerHTML = "";
    }
    if (Social_marks === "") {
        document.getElementById('Social_marks_error').innerHTML = "Social marks is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('Social_marks_error').innerHTML = "";
    }
    if (Total_marks === "") {
        document.getElementById('Total_marks_error').innerHTML = "Total marks is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('Total_marks_error').innerHTML = "";
    }
    if (Total_Percentage === "") {
        document.getElementById('Total_Percentage_error').innerHTML = "Total_Percentage marks is empty";
        go_to_next_page = false;
    } else {
        document.getElementById('Total_Percentage_error').innerHTML = "";
    }
    return go_to_next_page;}
</script>
</body>
</html>
