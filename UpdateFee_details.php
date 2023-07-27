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
    .custom-radio input[type="radio"] {
    transform: scale(1.5); 
    margin-right: 5px; 
    }

    .custom-radio label {
    font-size: 16px; 
    vertical-align: middle; 
    }
</style>
</head>
<body>
<div class="box">
    <div class="container">
        <form method="POST" action="UpdateFee_details_validation.php">
    <div class="top">
    <br>
        <header style="font-weight:bold">
            Fee_details
        </header>
    </div>
    <div class="input-field">
        <input type="text" class="input" placeholder="Enter Roll_no" name="Roll_no" id="Roll_no"> 
        <i class='bx bx-user-circle'></i>
        <j id="username_error"></j>
    </div>
    <div>
        <h3 style="color:pink;font-size:24px">Paid the first-term fee?</h3>
        <div class="custom-radio">
        <input type="radio" id="yes" name="first_term" value="yes">
        <label for="yes" style="font-size:22px;color:pink;padding:0px 15px">Yes</label>
        <input type="radio" id="no" name="first_term" value="no">
        <label for="no" style="font-size:22px;color:pink;padding:0px 15px">No</label>
        </div>
    </div>
    <div>
        <h3 style="color:pink;font-size:24px">Paid the second-term fee?</h3>
        <div class="custom-radio">
        <input type="radio" id="yes" name="second_term" value="yes">
        <label for="yes" style="font-size:22px;color:pink;padding:0px 15px">Yes</label>
        <input type="radio" id="no" name="second_term" value="no">
        <label for="no" style="font-size:22px;color:pink;padding:0px 15px">No</label>
        </div>
    </div>
    <div>
        <h3 style="color:pink;font-size:24px">Paid the third-term fee?</h3>
        <div class="custom-radio">
        <input type="radio" id="yes" name="third_term" value="yes">
        <label for="yes" style="font-size:22px;color:pink;padding:0px 15px">Yes</label>
        <input type="radio" id="no" name="third_term" value="no">
        <label for="no" style="font-size:22px;color:pink;padding:0px 15px">No</label>
        </div>
    </div>
    <BR>
    <BR>
    <div class="submit">
    <input type="submit" class="submit" value="submit" name="submit" id="submit">
    </div>
    </form>
    </div>
    </div>
</body>
</html>
