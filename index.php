<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allstyle.css">
    <link rel="icon" href="img/aaalogo2.png">
    <title>LOG IN</title>
</head>
<body class="login-page">
    <form method="POST" action="login.php">
        <div id="main-logindiv">
            <div class="login">

            <div class="regform-div">
                    <h1>LOG IN</h1>
                </div>
                <div class="regform-div">
                    <p>AAA - Cleaning Products</p>
                </div>

                <div class="login-div1">
                    <input type="text" name="username" placeholder="E-MAIL OR USERNAME" class="login-input" name="uname">
                </div>
                <div class="login-div2">
                    <input type="password" name="password" placeholder="PASSWORD"  class="login-input" name="password">
                </div>
                <div class="login-button"><button class="loginbutton" type="submit" name="submit">LOG IN</button></div>
                <div class="signup-button">
                    <p>Can't Log-in? <a href="regform.html">Sign Up Now</a></p>
                </div>
            </div>
        </div>
    </form>
</body>
<?php
include "db_connect.php";

// if($conn->connect_error){
//     echo $conn->connect_error;
// }else{
//     echo "<br>Connected";
// }

if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_login WHERE USER = '$username' AND PASSWORD = '$password'";
    $logs = "INSERT INTO tbl_userlogs (USERNAME,ACTION,DATE) VALUES ('$username','LOGGED IN',NOW())";

    $result = $conn->query($sql);
    $result1 = $conn->query($logs);

    if($username == true){
        header("refresh:0;url=home.html");
    }else{
        ?>
        <script>
            alert("Invalid Account");
        </script>
        <?php
                echo "Invalid Account";
            }
        }
        
        ?>