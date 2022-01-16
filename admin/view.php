<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/allstyle.css">
    <link rel="stylesheet" href="../style/orderproductstyle.css">
    <link rel="icon" href="../img/aaalogo2.png">
    <title>AAA - View Products</title>
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
    </div>
    <form method=POST action="view.php">
    <div class=search-div>
        <input type="search" name=search placeholder="Search item" class=search-tab>
        <input type="submit" name="searchsub" value="Search">
        <button><a href='products.php'>ADD PRODUCT</a></button>
    </div>
    </form>

<?php
include "db_connect.php";

if(isset($_POST['searchsub'])){
    $search = $_POST['search'];

    if($search != NULL){
		$sql = "SELECT * FROM tbl_aaaproducts WHERE P_NAME LIKE '%$search%' or ID LIKE '%$search%'";
	}else{
		$sql = "SELECT * FROM tbl_aaaproducts";
	}
}else{
    $sql = "SELECT * FROM tbl_aaaproducts";
}

$result=$conn->query($sql);
$total = 0;

if($result->num_rows > 0){
    echo "<div class=order-div>";
	echo "<table class=table>";
	echo "<tr>";
    echo "<tH colspan=9 class=title-table> INVENTORY";
	echo "<tr>";
	echo "<th class=info-table-inven> PRODUCT ID";
	echo "<th class=info-table-inven> PRODUCT NAME";
	echo "<th class=info-table-inven> PRODUCT CATEGORY";
	echo "<th class=info-table-inven> PRICE";
	echo "<th class=info-table-inven> QUANTITY";
	echo "<th class=info-table-inven> EXPIRATION DATE";
	echo "<th class=info-table-inven> TOTAL PRICE";
	echo "<th colspan=2 class=info-table-inven> ACTION";

    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td class=info-table-inven>".$row['ID'];
		echo "<td class=info-table-inven>".$row['P_NAME'];
		echo "<td class=info-table-inven>".$row['P_CATEGORY'];
		echo "<td class=info-table-inven>".$row['P_PRICE'];

        if($row['P_QTY']<=5){
            echo "<td class=info-table-inven>".$row['P_QTY'];
        }else{
            echo "<td class=info-table-inven>".$row['P_QTY'];
        }
        echo "<td class=info-table-inven>".$row['EXPR_DATE'];
		echo "<td class=info-table-inven>".$row['P_TOTAL'];
		$total = $total + $row['P_TOTAL'];

		echo "<td class=info-table-inven> <a href='update.php?id=".$row['ID']."'>Edit</a>
        <td class=info-table-inven><a href='delete.php?id=".$row['ID']."'>Delete</a>";
        
    }
    echo "<tr>";
	echo "<th colspan=9 class=info-table-inven-total>Total Product Price: ".$total;
}else{
	echo "<br><center><p>No Records Found</p></center>";
}
    echo "</div>";
    echo "</table>";
?>

</body>
</html>