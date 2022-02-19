<?php if($_SESSION['ligne'] == "A"){
        include("includes/correspondances_LA.php");
    } elseif($_SESSION['destination'] == "oxford"){
        include("includes/correspondances_LB_oxford.php");
    } elseif($_SESSION['destination'] == "pds"){
        include("includes/correspondances_LB_pds.php");
    } elseif($_SESSION['destination'] == "condillac"){
        include("includes/correspondances_LC_condillac.php");
    } elseif($_SESSION['destination'] == "prisme"){
        include("includes/correspondances_LC_prisme.php");
    } elseif($_SESSION['ligne'] == "D"){
        include("includes/correspondances_LD.php");
    } elseif($_SESSION['ligne'] == "E"){
        include("includes/correspondances_LE.php");
    }
?>