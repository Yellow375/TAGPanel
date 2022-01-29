<?php
session_start();

if(isset($_SESSION['ligne']) && isset($_SESSION['destination'])){
$arret = $_SESSION['arretactuel'];
include("includes/lignes.php");
}else{
    header('Location: choix.php');
}

if($arret > $nbstops){
    header('Location: finligne.php');
}

$arretsuivant1 = $_SESSION['stopnum1'];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ligne <?php echo $_SESSION['ligne']; ?></title>
</head>
<body class="stop">
    <?php if($_SESSION['arretactuel']<$nbstops){ 
        ?>
            <p class="arret"><a class="arretlien" href="index.php"><?php echo $stops[$arret]; ?></a></p>
    <?php
    if($_SESSION['destination'] == "oxford"){
    include("includes/correspondances_LB_oxford_stop.php");
    }if($_SESSION['destination'] == "pds"){
        include("includes/correspondances_LB_pds_stop.php");
    } elseif($_SESSION['ligne'] == "D"){
        include("includes/correspondances_LD.php");
    }
    $_SESSION['arretactuel'] = $_SESSION['arretactuel'] + 1; 
    $renvoikeypress = "\"index.php\"";  
    $arretsuivant1 = $arretsuivant1 + 1;
    } else { ?>
       <p class="arret"><a class="arretlien" href="finligne.php"><?php echo $stops[$arret]; ?></a></p>
       <?php if($_SESSION['destination'] == "oxford"){
    include("includes/correspondances_LB_oxford_stop.php");
    }if($_SESSION['destination'] == "pds"){
        include("includes/correspondances_LB_pds_stop.php");
    } elseif($_SESSION['ligne'] == "D"){
        include("includes/correspondances_LD.php");
    }
       $_SESSION['arretactuel'] = $_SESSION['arretactuel'] + 1;
        $renvoikeypress = "\"finligne.php\"";  
        $arretsuivant1 = $arretsuivant1 + 1;
    } ?> 

    <script>
        document.addEventListener('keypress', logKey);
        function logKey(e) {
            window.location.replace(<?php echo $renvoikeypress; ?>);
        }
    </script>

</body>
</html>