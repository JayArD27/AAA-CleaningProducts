<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link rel="icon" href="img/aaalogo2.png">
    <link rel="stylesheet" href="../style/allstyle.css">
    <link rel="stylesheet" href="../style/orderproductstyle.css">
    <title>AAA - Products</title>
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
    <form method=POST action="products.php">
        <table class="table">
            <tr>
                <th colspan=2 class="title-table">ADD PRODUCT</th>
            </tr>
            <tr>
                <td  class="info-table">PRODUCT NAME: </td>
                <td><input type="text" name="prodname"></td>
            </tr>
            <tr>
                <td  class="info-table">PRODUCT CATEGORY: </td>
                <td>
                    <select name="prodcategory" id="">
                        <option value="NONE">-----------</option>
                        <option value="DISHWASHING">DISHWASHING</option>
                        <option value="FABRIC CONDITIONER">FABRIC CONDITIONER</option>
                        <option value="OTHERS">OtdERS</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td  class="info-table">PRICE: </td>
                <td><input type="number" name=prodprice></td>
            </tr>
            <tr>
                <td class="info-table">QUANTITY</td>
                <td><input type="number" name="prodquant"></td>
            </tr>
            <tr>
                <td  class="info-table">EXPIRATION DATE: </td>
                <td><input type="date" name="prodexpdate"></td>
            </tr>
            <tr>
                <th colspan=2><input type="submit" name="submitprod" value="ADD PRODUCT" class="submit-button"></td>
            </tr>
        </table>
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
// if($conn->connect_error){
//     echo $conn->connect_error;
// }else{
//     echo "<br>Connected";
// }

if(isset($_POST['submitprod'])){
    $pname = $_POST['prodname'];
    $pcat = $_POST['prodcategory'];
    $pprice = $_POST['prodprice'];
    $pquan = $_POST['prodquant'];
    $pexpdate = $_POST['prodexpdate'];
    $total = $pprice * $pquan;

    $sql = "INSERT INTO tbl_aaaproducts (P_NAME,P_CATEGORY,P_PRICE,P_QTY,EXPR_DATE,P_TOTAL) VALUES
    ('$pname','$pcat',$pprice,$pquan,'$pexpdate',$total)";
    
    $insert = $conn->query($sql);

    if($insert == true){
    ?>
    <script>
        alert ("Successfully added record")
    </script>
    <?php
    }else{
        echo $conn->error;
        }
}
?>