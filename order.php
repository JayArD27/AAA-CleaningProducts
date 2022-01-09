<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allstyle.css">
    <link rel="stylesheet" href="orderstyle.css">
    <link rel="icon" href="img/aaalogo2.png">
    <title>AAA - Order Now</title>
</head>
<body>
<?php
if(isset($_POST['checkout'])){

    $qtyDishB = $_POST['qtyDB'];
    $qtyDishY = $_POST['qtyDY'];
    $qtyDishBs = $_POST['qtyDBs'];
    $qtyDishYs = $_POST['qtyDYs'];
    $qtyDishGs = $_POST['qtyDGs'];
    $qtyFB = $_POST['qtyFB'];
    $qtyFL = $_POST['qtyFL'];
    $qtyPOW = $_POST['qtyPOW'];
    $qtyToilet = $_POST['qtyToilet'];
    $qtySponge = $_POST['qtySponge'];
    $total = 0;
    
    

    if(isset($_POST['bigdishwashingblue'])){
        $bigDishwashingBlue = 38.00;
        $bigDishBlueT = $bigDishwashingBlue * $qtyDishB;
        $bigDishBlue = "<br>All Mighty - 970ml Dishwashing Liquid - Antibacterial --  PHP. ".$bigDishwashingBlue.".00"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$qtyDishB."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$bigDishBlueT.".00";
        $total = $total + $bigDishBlueT; 
    }else{
        $qtyDishB = NULL;
        $bigDishBlue = NULL;
        $bigDishBlueT = NULL;
        $total = $total;
    }

    if(isset($_POST['bigdishwashingyellow'])){
        $bigDishwashingYellow = 38.00;
        $bigDishYellowT = $bigDishwashingYellow * $qtyDishY;
        $bigDishYellow= "<br>All Mighty - 970ml Dishwashing Liquid - Lemon Scent --  PHP. ".$bigDishwashingYellow.".00"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$qtyDishY."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$bigDishYellowT.".00";
        $total = $total +  $bigDishYellowT; 
    }else{
        $qtyDishY  = NULL;
        $bigDishYellow = NULL;
        $bigDishYellowT = NULL;
        $total = $total;
    }

    if(isset($_POST['dishwashingblue'])){
        $dishwashingBlue = 25.00;
        $smallDishBlueT = $dishwashingBlue * $qtyDishBs;
        $dishBlue= "<br>All Mighty - 400ml Dishwashing Liquid - Antibacterial --  PHP. ".$dishwashingBlue.".00"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$qtyDishBs."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$smallDishBlueT.".00";
        $total = $total + $smallDishBlueT; 
    }else{
        $dishBlue = NULL;
        $qtyDishBs = NULL;
        $smallDishBlueT  = NULL;
        $total = $total;
    }

    if(isset($_POST['dishwashingyellow'])){
        $dishwashingYellow = 25.00;
        $smallDishYellowT = $dishwashingYellow * $qtyDishYs;
        $dishYellow= "<br>All Mighty - 400ml Dishwashing Liquid -  Lemon scent --  PHP. ".$dishwashingYellow.".00"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$qtyDishYs."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$smallDishYellowT.".00";
        $total = $total +  $smallDishYellowT; 
    }else{
        $dishYellow = NULL;
        $qtyDishYs = NULL;
        $smallDishYellowT  = NULL;
        $total = $total;
    }

    if(isset($_POST['dishwashinggreen'])){
        $dishwashingGreen = 25.00;
        $smallDishGreenT = $dishwashingGreen * $qtyDishGs;
        $dishGreen= "<br>All Mighty - 400ml Dishwashing Liquid -  Calamansi scent -- PHP. ".$dishwashingGreen.".00"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$qtyDishGs."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$smallDishGreenT.".00";
        $total = $total +  $smallDishGreenT; 
    }else{
        $dishGreen = NULL;
        $qtyDishGs  = NULL;
        $smallDishGreenT  = NULL;
        $total = $total;
    }

    if(isset($_POST['fabriconblue'])){
        $fabriconBlueLarge = 38.00;
        $fabriconBlueT = $fabriconBlueLarge * $qtyFB;
        $fabriconBlueL= "<br>All Mighty - 970ml Fabric Softener - Ocean fresh --  PHP. ".$fabriconBlueLarge.".00"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$qtyFB."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$fabriconBlueT.".00";
        $total = $total + $fabriconBlueT; 
    }else{
        $fabriconBlueL = NULL;
        $fabriconBlueT = NULL;
        $qtyFB = NULL;
        $total = $total;
    }

    if(isset($_POST['fabriconlavender'])){
        $fabriconLavLarge = 38.00;
        $fabriconLavT = $fabriconLavLarge * $qtyFL;
        $fabriconLavL= "<br>All Mighty - 970ml Fabric Softener - Lavender scent -- PHP. ".$fabriconLavLarge.".00"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$qtyFL."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$fabriconLavT.".00";
        $total = $total + $fabriconLavT; 
    }else{
        $fabriconLavL = NULL;
        $fabriconLavT = NULL;
        $qtyFL = NULL;
        $total = $total;
    }

    if(isset($_POST['powder'])){
        $powderL = 38.00;
        $powderT = $powderL * $qtypowder;
        $powder= "<br>Ultramatic Powder - 1000 grams --  PHP. ".$powderL.".00"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$qtypowder."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$powderT.".00";
        $total = $total + $powderT ; 
    }else{
        $powder = NULL;
        $powderT = NULL;
        $qtypowder = NULL;
        $total = $total;
    }

    if(isset($_POST['bowlcleaner'])){
        $bowlcleanerL = 38.00;
        $bowlcleanerT = $bowlcleanerL * $qtyToilet;
        $bowlcleaner= "<br>Exel - Toilet Bowl Cleaner --  PHP. ".$bowlcleanerL.".00"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$qtyToilet."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$bowlcleanerT.".00";
        $total = $total + $bowlcleanerT ; 
    }else{
        $bowlcleaner = NULL;
        $bowlcleanerT  = NULL;
        $qtyToilet  = NULL;
        $total = $total;
    }

    if(isset($_POST['sponge'])){
        $spongeS = 15.00;
        $spongeT = $spongeS * $qtySponge;
        $sponge = "<br>Scotch Brite - Sponge --  PHP. ".$spongeS.".00"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". $qtySponge."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$spongeT.".00";
        $total = $total + $spongeT ; 
    }else{
        $sponge = NULL;
        $spongeT = NULL;
        $qtySponge = NULL;
        $total = $total;
    }
    
    

    echo "<center>";
    echo "<table border=1>";
    echo "<tr>
            <th colspan=3>
            <h1>CHECKOUT</h1>
            </th>
          </tr>";
    echo "<tr>";
        echo "<td>".$bigDishBlue.$bigDishYellow.$dishBlue.$dishYellow.$dishGreen.$fabriconBlueL.$fabriconLavL.$powder.$bowlcleaner.$sponge;
    echo "</tr>";
    echo "<tr>";
        echo "<br><th>Total Item Price:  PHP.".$total.".00";
    echo "</tr>";
        echo "</table>";
    echo "</center>";
    
}
?>


    <center>
        <a href="order.html"><input type="submit" value="Order More" class="checkout-button"></a>
    </center>
</body>
</html>