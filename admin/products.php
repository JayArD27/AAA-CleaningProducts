<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/aaalogo2.png">
    <title>AAA - Products</title>
</head>
<body>
    <form method=POST action="products.php">
        <table border=1>
            <tr>
                <th colspan=2>ADD PRODUCT</th>
            </tr>
            <tr>
                <th>PRODUCT NAME: </th>
                <td><input type="text" name="prodname"></td>
            </tr>
            <tr>
                <th>PRODUCT CATEGORY: </th>
                <td>
                    <select name="prodcategory" id="">
                        <option value="NONE">-----------</option>
                        <option value="DISHWASHING">DISHWASHING</option>
                        <option value="FABRIC CONDITIONER">FABRIC CONDITIONER</option>
                        <option value="OTHERS">OTHERS</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>PRICE: </th>
                <td><input type="number" name=prodprice></td>
            </tr>
            <tr>
                <th>QUANTITY</th>
                <td><input type="number" name="prodquant"></td>
            </tr>
            <tr>
                <th>EXPIRATION DATE: </th>
                <td><input type="date" name="prodexpdate"></td>
            </tr>
            <tr>
                <th colspan=2><input type="submit" name="submitprod" value="ADD PRODUCT"></td>
            </tr>
        </table>
    </form>
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