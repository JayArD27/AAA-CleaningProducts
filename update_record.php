<?php
include "view.php";


if(isset($_POST['sub'])){
    $ID = $_POST['prod_id'];
    $Pname = $_POST['prod_name'];
    $Pcat = $_POST['prod_cat'];
    $Pprice = $_POST['prod_price'];
    $Pquan = $_POST['prod_quan'];

    $Ptotal = $Pprice * $Pquan;
    $sql = "UPDATE tbl_aaaproducts SET P_NAME = '$Pname', P_CATEGORY = '$Pcat',P_PRICE = '$Pprice',P_QTY = '$Pquan', P_TOTAL = '$Ptotal' WHERE ID = '$ID'";
    $result = $conn->query($sql);

    if($result == true){
?>
<script>
    alert("Successfully Added");
</script>
<?php
    header("refresh:0;url=view.php");
    }else{
        echo $conn->error;
    }
}
?>
