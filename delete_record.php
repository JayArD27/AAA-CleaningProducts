<?php
include "view.php";


//  if($conn->connect_error){
//     echo $conn->connect_error;
// }else{
//     echo "<br>Connected";
// }

if(isset($_POST['sub'])){
    $ID = $_POST['prod_id'];
    // $Pname = $_POST['prod_name'];
    // $Pcat = $_POST['prod_cat'];
    // $Pprice = $_POST['prod_price'];
    // $Pquan = $_POST['prod_quan'];

    // $Ptotal = $Pprice * $Pquan;
    $sql = "DELETE FROM tbl_aaaproducts WHERE ID = '$ID'";
    $result = $conn->query($sql);

    if($result == true){
?>
<script>
    alert("Successfully Deleted");
</script>
<?php
    header("refresh:0;url=view.php");
    }else{
        echo $conn->error;
    }
}
?>