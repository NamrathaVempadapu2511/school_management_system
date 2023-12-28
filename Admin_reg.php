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
        <form method="POST" action="Admin_reg_validation.php">
            <div class="top">
                <header>
                    Signup
                </header>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Username" name="username" id="username">
                <i class='bx bx-user'></i>
                <j id="username_error"></j>
            </div>
            <div class="input-field">
                <input type="email" class="input" placeholder="Enter email" name="email" id="email" onchange="check_email_exists();">
                <i class='bx bx-envelope'></i>
                <j id="email_error"></j>
            </div>
            <div class="input-field">
                <input type="password" class="input" placeholder="Password" name="password" id="password">
                <i class='bx bx-lock-alt'></i>
                <j id="password_error"></j>
            </div>
            <div class="input-field">
                <input type="password" class="input" placeholder="Confirm password" name="confirmpassword" id="confirmpassword">
                <i class='bx bx-lock-alt'></i>
                <j id="confirmpassword_error"></j>
            </div>
            <div class="input-field">
                <input type="tel" class="input" placeholder="Mobilenumber" name="mobilenumber" id="mobilenumber">
                <i class='bx bx-phone'></i>
                <j id="mobilenumber_error"></j>
            </div>
            <div class="submit">
                <input type="submit" class="submit" value="Submit" name="submit" id="submit" onclick="return form_validation();">
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
            data: {"email": email},
            success: function(response) {
                response = response.trim();
                if (response === "email already exists") {
                    document.getElementById('email_error').innerHTML = response;
                } else {
                    alert(response);
                }
            }
        });
    }

    function form_validation() {
        var go_to_next_page = true;
        var Username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirmpassword = document.getElementById('confirmpassword').value;
        var mobilenumber = document.getElementById('mobilenumber').value;

        if (Username === "") {
            document.getElementById('username_error').innerHTML = "Username is empty";
            go_to_next_page = false;
        } else {
            document.getElementById('username_error').innerHTML = "";
        }

        if (email === "") {
            document.getElementById('email_error').innerHTML = "Email is empty";
            go_to_next_page = false;
        } else {
            document.getElementById('email_error').innerHTML = "";
        }

        if (password === "") {
            document.getElementById('password_error').innerHTML = "Password is empty";
            go_to_next_page = false;
        } else {
            document.getElementById('password_error').innerHTML = "";
        }

        if (confirmpassword === "") {
            document.getElementById('confirmpassword_error').innerHTML = "Confirm password is empty";
            go_to_next_page = false;
        } else if (confirmpassword !== password) {
            document.getElementById('confirmpassword_error').innerHTML = "Passwords do not match";
            go_to_next_page = false;
        } else {
            document.getElementById('confirmpassword_error').innerHTML = "";
        }

        if (mobilenumber === "") {
            document.getElementById('mobilenumber_error').innerHTML = "Mobilenumber is empty";
            go_to_next_page = false;
        } else {
            document.getElementById('mobilenumber_error').innerHTML = "";
        }

        return go_to_next_page;
    }
</script>
</body>
</html>
