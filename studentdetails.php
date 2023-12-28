<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="reg.css">
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
        <form method="POST" action="studentdetails_validation.php">
            <div class="top">
                <header>
                    Signup
                </header>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Enter Roll_no" name="Roll_no" id="Roll_no">
                <i class='bx bx-user'></i>
                <j id="Roll_no_error"></j>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Enter Fathername" name="Fathername" id="Fathername" onchange="check_email_exists();">
                <i class='bx bx-envelope'></i>
                <j id="Fathername_error"></j>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Enter Mothername" name="Mothername" id="Mothername">
                <i class='bx bx-lock-alt'></i>
                <j id="Mothername_error"></j>
            </div>
            <div class="input-field">
                <input type="tel" class="input" placeholder="Enter Mobilenumber" name="Mobilenumber" id="Mobilenumber">
                <i class='bx bx-phone'></i>
                <j id="Mobilenumber_error"></j>
            </div>
            <div class="submit">
                <input type="submit" class="submit" value="submit" name="submit" id="submit" onclick="return form_validation();">
            </div>
        </form>
    </div>
</div>
<!--<script>
    function check_email_exists() {
        var email = document.getElementById('email').value;
        $.ajax({
            url: "email_already_exists.php",
            type: "POST",
            data: {"email": email},
            success: function (response) {
                response = response.trim();
                if (response === "email already exists") {
                    document.getElementById('email_error').innerHTML = response;
                } else {
                    alert(response);
                }
            }
        })
    }
</script>-->
<script>
    function form_validation() {
        var go_to_next_page = true;
        var Roll_no = document.getElementById('Roll_no').value;
        var Fathername = document.getElementById('Fathername').value;
        var Mothername = document.getElementById('Mothername').value;
        var Mobilenumber = document.getElementById('Mobilenumber').value;

        if (Roll_no === "") {
            document.getElementById('Roll_no_error').innerHTML = "Roll_no is empty";
            go_to_next_page = false;
        } else {
            document.getElementById('Roll_no_error').innerHTML = "";
        }

        if (Fathername === "") {
            document.getElementById('Fathername_error').innerHTML = "Fathername is empty";
            go_to_next_page = false;
        } else {
            document.getElementById('Fathername_error').innerHTML = "";
        }

        if (Mothername === "") {
            document.getElementById('Mothername_error').innerHTML = "Mothername is empty";
            go_to_next_page = false;
        } else {
            document.getElementById('Mothername_error').innerHTML = "";
        }

        if (Mobilenumber === "") {
            document.getElementById('Mobilenumber_error').innerHTML = "Mobilenumber is empty";
            go_to_next_page = false;
        } else {
            document.getElementById('Mobilenumber_error').innerHTML = "";
        }

        return go_to_next_page;
    }
</script>
</body>
</html>
