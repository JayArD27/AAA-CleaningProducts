<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/aaalogo2.png">
    <title>AAA - View Products</title>
</head>
<body>
    <form method=POST action="view.php">
    <input type="search" name=search placeholder="Search item">
    <input type="submit" name="searchsub" value="Search">
    </form>
</body>
</html>
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
	echo "<table border=1>";
	echo "<tr>";
	echo "<th> PRODUCT ID";
	echo "<th> PRODUCT NAME";
	echo "<th> PRODUCT CATEGORY";
	echo "<th> PRICE";
	echo "<th> QUANTITY";
	echo "<th> EXPIRATION DATE";
	echo "<th> TOTAL PRICE";
	echo "<th> ACTION";

    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['ID'];
		echo "<td>".$row['P_NAME'];
		echo "<td>".$row['P_CATEGORY'];
		echo "<td>".$row['P_PRICE'];

        if($row['P_QTY']<=5){
            echo "<td>".$row['P_QTY'];
        }else{
            echo "<td>".$row['P_QTY'];
        }
        echo "<td>".$row['EXPR_DATE'];
		echo "<td>".$row['P_TOTAL'];
		$total = $total + $row['P_TOTAL'];

		echo "<td> <a href='update.php?id=".$row['ID']."'>Edit</a>";
    }
    echo "<tr>";
	echo "<th colspan=8>Total Product Price: ".$total;
}else{
	echo "<br>No Records Found";
}
?>