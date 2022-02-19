<?php if($_SESSION['arretactuel']<$nbstops){ 
        ?>
            <p class="arret"><a class="arretlien" href="index.php"><?php echo $stops[$arret]; ?></a></p>
    <?php
    if($_SESSION['ligne'] == "A"){
        include("includes/correspondances_LA_stop.php");
    } elseif($_SESSION['destination'] == "oxford"){
        include("includes/correspondances_LB_oxford_stop.php");
    } elseif($_SESSION['destination'] == "pds"){
        include("includes/correspondances_LB_pds_stop.php");
    } elseif($_SESSION['destination'] == "prisme"){
        include("includes/correspondances_LC_prisme_stop.php");
    } elseif($_SESSION['destination'] == "condillac"){
        include("includes/correspondances_LC_condillac_stop.php");
    } elseif($_SESSION['ligne'] == "D"){
        include("includes/correspondances_LD_stop.php");
    } elseif($_SESSION['ligne'] == "E"){
        include("includes/correspondances_LE_stop.php");
    }
    $_SESSION['arretactuel'] = $_SESSION['arretactuel'] + 1; 
    $renvoikeypress = "\"index.php\"";  
    $arretsuivant1 = $arretsuivant1 + 1;
    } else { ?>
       <p class="arret"><a class="arretlien" href="finligne.php"><?php echo $stops[$arret]; ?></a></p>
       <?php if($_SESSION['ligne'] == "A"){
        include("includes/correspondances_LA_stop.php");
    } elseif($_SESSION['destination'] == "oxford"){
        include("includes/correspondances_LB_oxford_stop.php");
    } elseif($_SESSION['destination'] == "pds"){
        include("includes/correspondances_LB_pds_stop.php");
    } elseif($_SESSION['destination'] == "prisme"){
        include("includes/correspondances_LC_prisme_stop.php");
    } elseif($_SESSION['destination'] == "condillac"){
        include("includes/correspondances_LC_condillac_stop.php");
    } elseif($_SESSION['ligne'] == "D"){
        include("includes/correspondances_LD_stop.php");
    } elseif($_SESSION['ligne'] == "E"){
        include("includes/correspondances_LE_stop.php");
    }
       $_SESSION['arretactuel'] = $_SESSION['arretactuel'] + 1;
        $renvoikeypress = "\"finligne.php\"";  
        $arretsuivant1 = $arretsuivant1 + 1;
    } ?> 