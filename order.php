<?php
if(isset($_POST['checkout'])){
    $total = 0;
    $qtyDishB = $_POST['qtyDB'];
    


    echo "<h1>CHECKOUT</h1>";

    if(isset($_POST['bigdishwashingblue'])){
        $bigDishwashingBlue = 38;
        $bigDishBlue = "dishwashing -".$bigDishwashingBlue * $qtyDishB;
        $total = $total + $bigDishwashingBlue; 
    }else{
        // $bigDishwashingBlue = 0;
        $qtyDishB = NULL;
        $bigDishBlue = NULL;
        $total = $total;
    }

    if(isset($_POST['bigdishwashingyellow'])){
        $bigDishwashingYellow = 38;
        $bigDishYellow= "<br>Yellow dishwashing -".$bigDishwashingYellow;
        $total = $total + $bigDishwashingYellow; 
    }else{
        // $bigDishwashingYellow = 0;
        $bigDishYellow = NULL;
        $total = $total;
    }

    if(isset($_POST['dishwashingblue'])){
        $diswashingBlue = 25;
        $dishBlue= "<br>Blue dishwashing -".$diswashingBlue;
        $total = $total + $diswashingBlue; 
    }else{
        // $diswashingBlue = 0;
        $dishBlue = NULL;
        $total = $total;
    }

    if(isset($_POST['dishwashingyellow'])){
        $diswashingYellow = 25;
        $dishYellow= "<br>Yellow dishwashing -".$diswashingYellow;
        $total = $total + $diswashingYellow; 
    }else{
        // $diswashingYellow = 0;
        $dishYellow = NULL;
        $total = $total;
    }

    if(isset($_POST['dishwashinggreen'])){
        $diswashingGreen = 25;
        $dishGreen= "<br>Green dishwashing -".$diswashingGreen;
        $total = $total + $diswashingGreen; 
    }else{
        // $diswashingGreen = 0;
        $dishGreen = NULL;
        $total = $total;
    }

    if(isset($_POST['fabriconblue'])){
        $fabriconBlueLarge = 38;
        $fabriconBlueL= "<br>Fabricon Blue -".$fabriconBlueLarge;
        $total = $total + $fabriconBlueLarge; 
    }else{
        // $diswashingGreen = 0;
        $fabriconBlueL = NULL;
        $total = $total;
    }

    if(isset($_POST['fabriconlavender'])){
        $fabriconLavLarge = 38;
        $fabriconLavL= "<br>Fabricon lavender-".$fabriconLavLarge;
        $total = $total + $fabriconLavLarge; 
    }else{
        // $diswashingGreen = 0;
        $fabriconLavL = NULL;
        $total = $total;
    }

    if(isset($_POST['powder'])){
        $powderL = 38;
        $powder= "<br>Fabricon Blue -".$powderL ;
        $total = $total + $powderL ; 
    }else{
        // $diswashingGreen = 0;
        $powder = NULL;
        $total = $total;
    }

    if(isset($_POST['powder'])){
        $powderL = 38;
        $powder= "<br>Powder -".$powderL ;
        $total = $total + $powderL ; 
    }else{
        // $diswashingGreen = 0;
        $powder = NULL;
        $total = $total;
    }

    if(isset($_POST['bowlcleaner'])){
        $bowlcleanerL = 38;
        $bowlcleaner= "<br>Powder -".$bowlcleanerL ;
        $total = $total +$bowlcleanerL ; 
    }else{
        // $diswashingGreen = 0;
        $bowlcleaner = NULL;
        $total = $total;
    }

    if(isset($_POST['sponge'])){
        $spongeS = 38;
        $sponge = "<br>Powder -".$spongeS ;
        $total = $total +$spongeS ; 
    }else{
        // $diswashingGreen = 0;
        $sponge = NULL;
        $total = $total;
    }
    
   
    echo "item <br>".$bigDishBlue.$bigDishYellow.$dishGreen.$dishBlue.$dishYellow
    .$fabriconBlueL.$fabriconLavL.$powder.$bowlcleaner.$sponge;
    echo "<br>total:".$total;
}


?>
