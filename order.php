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
        $bigDishwashingBlue = 38;
        $bigDishBlue = "All Mighty - 970ml Dishwashing Liquid - Antibacterial --  PHP. ".$bigDishwashingBlue;
        $bigDishBlueT = $bigDishwashingBlue * $qtyDishB;
        $total = $total + $bigDishwashingBlue; 
    }else{
        $qtyDishB = NULL;
        $bigDishBlue = NULL;
        $bigDishBlueT = NULL;
        $total = $total;
    }

    if(isset($_POST['bigdishwashingyellow'])){
        $bigDishwashingYellow = 38;
        $bigDishYellow= "All Mighty - 970ml Dishwashing Liquid - Lemon Scent --  PHP. ".$bigDishwashingYellow;
        $bigDishYellowT = $bigDishwashingYellow * $qtyDishY;
        $total = $total + $bigDishwashingYellow; 
    }else{
        $qtyDishY  = NULL;
        $bigDishYellow = NULL;
        $bigDishYellowT = NULL;
        $total = $total;
    }

    if(isset($_POST['dishwashingblue'])){
        $dishwashingBlue = 25;
        $dishBlue= "All Mighty - 400ml Dishwashing Liquid - Antibacterial --  PHP. ".$dishwashingBlue;
        $smallDishBlueT = $dishwashingBlue * $qtyDishBs;
        $total = $total + $dishwashingBlue; 
    }else{
        $dishBlue = NULL;
        $qtyDishBs = NULL;
        $smallDishBlueT  = NULL;
        $total = $total;
    }

    if(isset($_POST['dishwashingyellow'])){
        $dishwashingYellow = 25;
        $dishYellow= "All Mighty - 400ml Dishwashing Liquid -  Lemon scent --  PHP. ".$dishwashingYellow;
        $smallDishYellowT = $dishwashingYellow * $qtyDishYs;
        $total = $total + $dishwashingYellow; 
    }else{
        $dishYellow = NULL;
        $qtyDishYs = NULL;
        $smallDishYellowT  = NULL;
        $total = $total;
    }

    if(isset($_POST['dishwashinggreen'])){
        $dishwashingGreen = 25;
        $dishGreen= "All Mighty - 400ml Dishwashing Liquid -  Calamansi scent -- PHP. ".$dishwashingGreen;
        $smallDishGreenT = $dishwashingGreen * $qtyDishGs;
        $total = $total + $dishwashingGreen; 
    }else{
        $dishGreen = NULL;
        $qtyDishGs  = NULL;
        $smallDishGreenT  = NULL;
        $total = $total;
    }

    if(isset($_POST['fabriconblue'])){
        $fabriconBlueLarge = 38;
        $fabriconBlueL= "All Mighty - 970ml Fabric Softener - Ocean fresh --  PHP. ".$fabriconBlueLarge;
        $fabriconBlueT = $fabriconBlueLarge * $qtyFB;
        $total = $total + $fabriconBlueLarge; 
    }else{
        $fabriconBlueL = NULL;
        $fabriconBlueT = NULL;
        $qtyFB = NULL;
        $total = $total;
    }

    if(isset($_POST['fabriconlavender'])){
        $fabriconLavLarge = 38;
        $fabriconLavL= "All Mighty - 970ml Fabric Softener - Lavender scent -- PHP. ".$fabriconLavLarge;
        $fabriconLavT = $fabriconLavLarge * $qtyFL;
        $total = $total + $fabriconLavLarge; 
    }else{
        $fabriconLavL = NULL;
        $fabriconLavT = NULL;
        $qtyFL = NULL;
        $total = $total;
    }

    if(isset($_POST['powder'])){
        $powderL = 38;
        $powder= "Ultramatic Powder - 1000 grams --  PHP. ".$powderL ;
        $powderT = $powderL * $qtypowder;
        $total = $total + $powderL ; 
    }else{
        $powder = NULL;
        $powderT = NULL;
        $qtypowder = NULL;
        $total = $total;
    }

    if(isset($_POST['bowlcleaner'])){
        $bowlcleanerL = 38;
        $bowlcleaner= "Exel - Toilet Bowl Cleaner --  PHP. ".$bowlcleanerL ;
        $bowlcleanerT = $bowlcleanerL * $qtyToilet;
        $total = $total +$bowlcleanerL ; 
    }else{
        $bowlcleaner = NULL;
        $bowlcleanerT  = NULL;
        $qtyToilet  = NULL;
        $total = $total;
    }

    if(isset($_POST['sponge'])){
        $spongeS = 38;
        $sponge = "Scotch Brite - Sponge --  PHP. ".$spongeS ;
        $spongeT = $spongeS * $qtySponge;
        $total = $total +$spongeS ; 
    }else{
        $sponge = NULL;
        $spongeT = NULL;
        $qtySponge = NULL;
        $total = $total;
    }
    
    // $totalprice = 

    echo "<table>";
    echo "<tr>
            <th colspan=3>
            <h1>CHECKOUT</h1>
            </th>
          </tr>";
    echo "<tr>";
        echo "<th>ITEMS</th>";
        echo "<th>QTY</th>";
        echo "<th>TOTAL</th>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$bigDishBlue;
        echo "<td>&nbsp &nbsp".$qtyDishB;
        echo "<td>".$bigDishBlueT;
    echo "</tr>";
    echo "<tr>"; 
        echo "<td>".$bigDishYellow;
        echo "<td>&nbsp &nbsp".$qtyDishY;
        echo "<td>".$bigDishYellowT;
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$dishBlue;
        echo "<td>&nbsp &nbsp".$qtyDishBs;
        echo "<td>".$smallDishBlueT;
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$dishYellow;
        echo "<td>&nbsp &nbsp".$qtyDishYs;
        echo "<td>".$smallDishYellowT;
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$dishGreen;
        echo "<td>&nbsp &nbsp".$qtyDishGs;
        echo "<td>".$smallDishGreenT;
    echo "</tr>";

    echo "<tr>";
        echo "<td>".$fabriconBlueL;
        echo "<td>&nbsp &nbsp".$qtyFB;
        echo "<td>".$fabriconBlueT;
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$fabriconLavL;
        echo "<td>&nbsp &nbsp".$qtyFL;
        echo "<td>".$fabriconLavT;
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$powder;
        echo "<td>&nbsp &nbsp".$qtyPOW;
        echo "<td>".$powderT;
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$bowlcleaner;
        echo "<td>&nbsp &nbsp".$qtyToilet;
        echo "<td>".$bowlcleanerT;
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$sponge;
        echo "<td>&nbsp &nbsp".$qtySponge;
        echo "<td>".$spongeT;
    echo "</tr>";
    echo "<tr>
            <th colspan=2>
                <h3>TOTAL ITEM PRICE</h2>
            </th>
            <td>
                
            </td>
          </tr>";
echo "</table>";
   
    // echo "item <br>".$bigDishBlue.$bigDishYellow.$dishGreen.$dishBlue.$dishYellow
    // .$fabriconBlueL.$fabriconLavL.$powder.$bowlcleaner.$sponge;
    // echo "total item".$bigDishBlueT;
    // echo "<br>total:".$total;
}
// echo "<tr>";
//         echo "<td>";
//         echo "</td>";
// echo "</tr>";

?>
