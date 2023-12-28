<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="box">
    <div class="container">
    <form method="post" action="Admin_Login_validation.php" onsubmit="return formValidation()">
    <div class="top">
    <div class="input-field">
        <input type="email" class="input" placeholder="Enter email" name="email" id="email">
        <i class='bx bx-user'></i>
        <j id="email_error" style="color: red;"></j>
    </div>
    <div class="input-field">
        <input type="password" class="input" placeholder="password" name="password" id="password">
        <i class='bx bx-lock-alt'></i>
        <j id="password_error" style="color: red;"></j>
    </div>
    <div>
    <input type="submit" class="submit" name="submit" id="submit">
    </div>
    </form>
</div>
</div>
</div>
<script>
function formValidation() {
    var go_to_next_page = true;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

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

    return go_to_next_page;
}
</script>
</body>
</html>
