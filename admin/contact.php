<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/contactstyle.css">
    <link rel="icon" href="../img/aaalogo2.png">
    <title>CONTACT US</title>
</head>
<body>
    <div class="cont1">
        <div class="cont1-logo">
            <img  src="../img/aaalogo2.png" class="logo" alt="AAA logo" >
        </div>
         <div class="cont1-button">
               <ul class="cont1-ul">
                    <li><a href="home.html" class="list">HOME</a></li>
                    <li><a href="view.php" class="list">INVENTORY</a></li>
                    <li><a href="orderproduct.php" class="list">ORDER</a></li>
                    <li><a href="aboutus.html" class="list">ABOUT US</a></li>
                    <li><a href="contact.php" class="list">CONTACT</a></li>
                </ul> 
        </div>
    </div>

<center>
<div class="myDiv">
	<h2 class="contact-title"> CONTACT US </h2>
</div>

</center>
<form method=POST action=contact.php>
<div id=div1>
<p class=title>NAME</p> <input type=text name=name placeholder="Lastname, Firstname M.">
<p class=title>EMAIL</p> <input type=text name=email placeholder="juandelacruz@gmail.com">
<p class=title>PHONE/TEL. NO.</p> <input type=text name=phone placeholder="09--">

<p class=title>PRIORITY</p>
<select name=priority size=1>
<option value=click >-----------</option>
<option value=Low>Low</option>
<option value=Normal>Normal</option>
<option value=High>High</option>
<option value=Emergency>Emergency</option>
</select>
<br />

<p class=title>REASON FOR CONTACTING US</p>
<select name=type size=1>
<option value=click >-----------</option>
<option value=change>Change Item</option>
<option value=damage>Item Damage</option>
<option value=addition>Adding Item</option>
<option value=new>New Products</option>
<option value=other>Other Reason</option>
</select>
</br>

<p  class=title>MESSAGE</p>
<textarea name=message rows=6 cols=25 placeholder="Say anything...."></textarea></br>	
 <button type="submit" name='subm'>SUBMIT</button>
</button>


</div>
</form>
<div class="footer">
        <div>
            <p class="footer-text">est. 2021 - AAA-Cleaning Products</p>
            <p class="footer-text">CONTACT US: 09876543211 or <a href="regform.html">Sign in</a></p>
        </div>
</div>
</body>
</html>

<?php
include "db_connect.php";

if (isset ($_POST ['subm'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];

$sql = "INSERT INTO tbl_contact (NAME, EMAIL, NUMBER, PRIORITY, TYPE, MESSAGE) VALUES 
('$name','$email',$phone,'$priority','$type','$message')";

$insert = $conn->query($sql);

if($insert == true){
	?>
	<script>
		alert ("THANK YOU FOR YOUR FEEDBACK");
	</script>
	<?php
	}else{
		echo $conn->error;
		}
	}
	
	?>