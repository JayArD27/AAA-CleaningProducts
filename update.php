<?php
include "db_connect.php";

$ID = $_GET['id'];

$sql = "SELECT * FROM tbl_aaaproducts WHERE ID ='$ID'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$pid = $row['ID'];
$pname = $row['P_NAME'];
$pcat = $row['P_CATEGORY'];
$pprice = $row['P_PRICE'];
$pquan = $row['P_QTY'];

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/aaalogo2.png">
    <title>AAA - Update Product</title>
</head>
<body>
    <form method=POST action="update_record.php">
        <table>
            <tr>
                <th colspan=2>UPDATE PRODUCT</th>
            </tr>
            <tr>
                <td>PRODUCT ID:</td>
                <td><input type="text" name=prod_id value="<?php echo $pid?>" readonly></td>
            </tr>

            <tr>
                <td>PRODUCT NAME:</td>
                <td><input type="text" name=prod_name value="<?php echo $pname?>"></td>
            </tr>

            <tr>
                <td>PRODUCT CATEGORY:</td>
                <td><input type="text" name=prod_cat value="<?php echo $pcat?>"></td>
            </tr>

            <tr>
                <td>QUANTITY:</td>
                <td><input type="text" name=prod_quan value="<?php echo $pquan?>"></td>
            </tr>

            <tr>
                <td>PRICE:</td>
                <td><input type="text" name=prod_price value="<?php echo $pprice?>"></td>
            </tr>

            <tr>
                <th colspan=2><input type="submit" name=sub value="UPDATE"></th>
            </tr>
        </table>
    </form>
</body>
</html>