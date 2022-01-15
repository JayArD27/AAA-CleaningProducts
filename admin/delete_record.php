<?php
include "view.php";

if(isset($_POST['sub'])){
    $ID = $_POST['prod_id'];

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