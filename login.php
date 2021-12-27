<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allstyle.css">
    <title>LOG IN</title>
</head>
<body class="login-page">
    <form method="POST" action="login.php">
        <div id="main-logindiv">
            <div class="login">
                <div class="login-div1">
                    <input type="text" name="username" placeholder="E-MAIL OR USERNAME" class="login-input">
                </div>
                <div class="login-div2">
                    <input type="password" name="password" placeholder="PASSWORD"  class="login-input">
                </div>
                <div class="login-button"><button class="loginbutton"><a href="home.php" class="loginbutton">LOG IN</a></button></div>
                <div class="signup-button">
                    <p>Can't Log-in? <a href="">Sign Up Now</a></p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>