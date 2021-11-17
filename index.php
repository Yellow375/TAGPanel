<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<?php

if(isset($_SESSION['ligne']) && isset($_SESSION['destination'])){
    


$arretsuivant = 0;

if($_SESSION['destination'] == "taillees"){
    $stops=array("Étienne Grappe", "Parc Jo Blanchon", "Édouard Vaillant", "Maison Communale", "Neyrpic - Belledonne", "Les Taillées - Universités");
} elseif($_SESSION['destination'] == "etiennegrappe"){
    $stops=array("Les Taillées - Universités", "Neyrpic - Belledonne", "Maison Communale", "Édouard Vaillant", "Parc Jo Blanchon", "Étienne Grappe");
} else {
    $stops=array("", "Pas de destination définie...");
}
if(isset($_SESSION['arretactuel'])){
    $arretsuivant1 = $arretsuivant + $_SESSION['arretactuel'];
    $arretsuivant2 = $arretsuivant + $_SESSION['arretactuel'] + 1;
    $arretsuivant3 = $arretsuivant + $_SESSION['arretactuel'] + 2;
} else {
    $_SESSION['arretactuel'] = 0;
    header('Location: stop.php');
}

} else {
    header('Location: choix.php');
}

$heure = date('H:i');

if($arretsuivant1==5){
    $classbody = "\"trajetfin\"";
    $classheure = "\"heure3\"";
} elseif($arretsuivant2==5) {
    $classbody = "\"trajetpf\"";
    $classheure = "\"heure2\"";
} else {
    $classbody = "\"trajet\"";
    $classheure = "\"heure1\"";
}



?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ligne <?php echo "".$_SESSION['ligne'].""; ?></title>
</head>
<body class=<?php echo $classbody; ?>>
    <p class="direction"><?php echo $stops[5];?></p>
    <p class="stop1"><a href="stop.php" class="stoplien"><?php echo $stops[$arretsuivant1]; ?></a></p>
    <?php include("correspondances.php"); ?>
    <?php if($arretsuivant2<=5) { ?>
    <p class="stop2"><?php echo $stops[$arretsuivant2]; ?></p>
    <?php }
    if($arretsuivant3 <= 5){ ?>
    <div class="stop3"><?php echo $stops[$arretsuivant3]; ?></div>
    <?php } ?>
    <p class=<?php echo $classheure; ?>><?php echo $heure; ?></p>
</body>
</html>