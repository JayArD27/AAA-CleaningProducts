<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/allstyle.css">
    <link rel="icon" href="img/aaalogo2.png">
    <title>AAA - Order Product</title>
</head>
<body>
    <div class="cont1">
        <div class="cont1-logo">
            <img  src="./img/aaalogo2.png" class="logo" alt="AAA logo" >
        </div>
         <div class="cont1-button">
               <ul class="cont1-ul">
                    <li><a href="home.html" class="list">HOME</a></li>
                    <li><a href="products.html" class="list">SHOP</a></li>
                    <li><a href="order.html" class="list">ORDER NOW</a></li>
                    <li><a href="aboutus.html" class="list">ABOUT US</a></li>
                    <li><a href="contact.php" class="list">CONTACT</a></li>
                    <li><button class="list-button"><a href="../login.php" class="logout">LOG OUT</a></button></li>
                </ul> 
        </div>
    </div>
    <form method=POST action="orderproduct.php">
        <table>
            <tr>
                <th colspan=6>ORDER PRODUCT</th>
            </tr>
            <tr>
                <td>FIRST NAME: </td>
                <td><input type="text" name="fname"></td>
                <td>MIDDLE NAME: </td>
                <td><input type="text" name="mname"></td>
                <td>LAST NAME: </td>
                <td><input type="text" name="lname"></td>
                <td>DATE: </td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>PRODUCT ID: </td>
                <td><input type="name" name="prodid"></td>
                <td>ORDER QTY: </td>
                <td><input type="text" name="prodqty"></td>
                <td>PRODUCT NAME: </td>
                <td colspan=2><input type="text" name="prodname"></td>
            </tr>
            <tr>
                <th colspan=6><input type="submit" value="ORDER" name="submitorder"></th>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
include "db_connect.php";

if(isset($_POST['submitorder'])){
    $firstname = $_POST['fname'];
    $midname = $_POST['mname'];
    $lastname = $_POST['lname'];
    $prod_id = $_POST['prodid'];
    $order_qty = $_POST['prodqty'];
    $prod_name = $_POST['prodname'];
    $order_date = $_POST['date'];



    $sql = "INSERT INTO tbl_order (F_NAME,M_NAME,L_NAME,PROD_ID,PROD_NAME,DATE) VALUES
    ('$firstname','$midname','$lastname',$prod_id,'$prod_name','$order_date')";
    
    $insert = $conn->query($sql);
    $sqlupdate = "UPDATE tbl_aaaproducts SET P_QTY = P_QTY-$order_qty WHERE ID = $prod_id";
    // $result = $conn->query($sqlupdate);


    if($insert == true){
        ?>
        <script>
            alert ("ORDERED");
        </script>
        <?php
        }else{
            echo $conn->error;
            }
        }
        
        ?>