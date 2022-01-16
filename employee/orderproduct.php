<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/allstyle.css">
    <link rel="stylesheet" href="../style/orderproductstyle.css">
    <link rel="icon" href="../img/aaalogo2.png">
    <title>AAA - Order Product</title>
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
    <div class="order-div">
    <form method=POST action="orderproduct.php">
        <table class="table">
            <tr>
                <th colspan=8 class="title-table">ORDER PRODUCT</th>
            </tr>
            <tr>
                <td class="info-table">FIRST NAME: </td>
                <td><input type="text" name="fname"></td>
                <td class="info-table">MIDDLE NAME: </td>
                <td><input type="text" name="mname"></td>
                <td class="info-table">LAST NAME: </td>
                <td ><input type="text" name="lname"></td>
                <td class="info-table">DATE: </td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td class="info-table">ADDRESS: </td>
                <td><input type="text" name="address"></td>
                <td class="info-table">SHIPPING ADDRESS: </td>
                <td><input type="text" name="shipadd"></td>
            </tr>
            <tr>
                <td class="info-table">PRODUCT CATEGORY: </td>
                <td>
                    <select name="prodcat" id="">
                        <option value="------------">------------</option>
                        <option value="DISHWASHING">DISHWASHING</option>
                        <option value="FABRIC CONDITIONER">FABRIC CONDITIONER</option>
                        <option value="OTHERS">OTHERS</option>
                    </select>
                </td>
                <td class="info-table">PRODUCT ID: </td>
                <td><input type="name" name="prodid"></td>
                <td class="info-table">ORDER QTY: </td>
                <td><input type="text" name="prodqty"></td>
                <td class="info-table">PRODUCT NAME: </td>
                <td><input type="text" name="prodname"></td>
            </tr>
            <tr>
                <th colspan=8 class="info-table">MESSAGE</th>
            </tr>
            <tr>
                <td colspan=8><textarea name="message" id="" cols="200" rows="10" placeholder="Add message....."></textarea></td>
            </tr>
            <tr>
                <th colspan=8><input type="submit" value="ORDER" name="submitorder" class="submit-button"></th>
            </tr>
        </table>
    </form>
    </div>
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

if(isset($_POST['submitorder'])){
    $firstname = $_POST['fname'];
    $midname = $_POST['mname'];
    $lastname = $_POST['lname'];
    $address = $_POST['address'];
    $shippadd = $_POST['shipadd'];
    $prodcat = $_POST['prodcat'];
    $prod_id = $_POST['prodid'];
    $order_qty = $_POST['prodqty'];
    $prod_name = $_POST['prodname'];
    $message = $_POST['message'];
    $order_date = $_POST['date'];



    $sql = "INSERT INTO tbl_order (F_NAME,M_NAME,L_NAME,ADDRESS,SHIP_ADDRESS,PROD_ID,P_QTY,PROD_NAME,MESSAGE,DATE) VALUES
                                  ('$firstname','$midname','$lastname','$address','$shippadd',$prod_id,$order_qty,'$prod_name','$message','$order_date')";
    
    $insert = $conn->query($sql);
    $sqlupdate = "UPDATE tbl_aaaproducts SET P_QTY = P_QTY-$order_qty WHERE ID = $prod_id";
    $result = $conn->query($sqlupdate);


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