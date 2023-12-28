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
    <form method="post" action="student_login_validation.php">
    <div class="top">
    <div class="input-field">
        <input type="email" class="input" placeholder="Enter email" name="email" id="email">
        <i class='bx bx-user'></i>
    </div>
    <div class="input-field">
                <input type="text" class="input" placeholder="Roll_no" name="Roll_no" id="Roll_no">
                <i class='bx bx-user'></i>
    </div>
    <div class="input-field">
        <input type="password" class="input" placeholder="password" name="password" id="password">
        <i class='bx bx-lock-alt'></i>
    </div>
    <div>
    <input type="submit" class="submit" name="submit" id="submit">
    </div>
    </form>
</div>
</div>
</div>
</body>
</html>