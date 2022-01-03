<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allstyle.css">
    <link rel="icon" href="img/aaalogo2.png">
    <title>Registration Form</title>
</head>
<body class="login-page">
    <form method=POST action="form.php">
        <div id="regform-main">
            <div class="regform">
                <div class="regform-div">
                    <h1>SIGN UP</h1>
                </div>
                <div class="regform-div">
                    <p>AAA - Cleaning Products</p>
                </div>
                <div class="regform-div">
                    <input type="text" placeholder="FIRSTNAME" class="login-input" name="firstname">
                </div>
                <div class="regform-div">
                    <input type="text" placeholder="LASTNAME" class="login-input" name="lastname">
                </div>
                <div class="regform-div">
                    <input type="text" placeholder="USERNAME or E-MAIL" class="login-input" name="username">
                </div>
                <div class="regform-div">
                    <input type="password" placeholder="PASSWORD" class="login-input" name="password">
                </div>
                <div class="regform-div">
                    <input type="text" placeholder="ADDRESS" class="login-input" name="address">
                </div>
                <div class="regform-div">
                    <input type="text" placeholder="SHIPPING ADDRESS" class="login-input" name="shipAddress">
                </div>
                <div class="regform-div">
                    <input type="number" placeholder="CONTACT NUMBER" class="login-input" name="number">
                </div>
                <div class="regform-submit">
                    <input type="submit" class="regform-submit" name="sub" value="Sign Up">
                </div>
            </div>
        </div>
    </form>
</body>
</html>
<?php
include "db_connect.php";


// TEST IF CONNECTED TO THE SERVER
// if($conn->connect_error){
//     echo $conn->connect_error;
// }else{
//     echo "<br>Connected";
// }

if(isset($_POST['sub'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $shipAdd = $_POST['shipAddress'];
    $conNum = $_POST['number'];

    $sql = "INSERT INTO tbl_login (F_NAME,L_NAME,USER,PASSWORD,ADDRESS,SHIP_ADD,NUMBER) VALUES
    ('$fname', '$lname', '$username', '$password', '$address', '$shipAdd', $conNum)";

    $insert = $conn->query($sql);

if($insert == true){
?>
<script>
    alert ("REGISTERED");
</script>
<?php
}else{
    echo $conn->error;
    }
}

?>