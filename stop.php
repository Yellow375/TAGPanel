<?php
session_start();

if(isset($_SESSION['ligne']) && isset($_SESSION['destination'])){
$arret = $_SESSION['arretactuel'];
if($_SESSION['destination'] == "taillees"){
    $stops=array("Étienne Grappe", "Parc Jo Blanchon", "Édouard Vaillant", "Maison Communale", "Neyrpic - Belledonne", "Les Taillées - Universités");
} elseif($_SESSION['destination'] == "etiennegrappe"){
    $stops=array("Les Taillées - Universités", "Neyrpic - Belledonne", "Maison Communale", "Édouard Vaillant", "Parc Jo Blanchon", "Étienne Grappe");
} else {
    $stops=array("", "Pas de destination définie...");
}
}else{
    header('Location: choix.php');
}

if($arret >= 6){
    header('Location: finligne.php');
}

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
    <?php if($_SESSION['arretactuel']<5){ ?>
    <p class="arret"><a class="arretlien" href="index.php"><?php echo $stops[$arret]; ?></a></p>
    <?php include("correspondances.php");
    $_SESSION['arretactuel'] = $_SESSION['arretactuel'] + 1; 
    $renvoikeypress = "\"index.php\"";  
    } else { ?>
       <p class="arret"><a class="arretlien" href="finligne.php"><?php echo $stops[$arret]; ?></a></p>
       <?php include("correspondances.php");
       $_SESSION['arretactuel'] = $_SESSION['arretactuel'] + 1;
        $renvoikeypress = "\"finligne.php\"";  
    } ?> 

    <script>
        document.addEventListener('keypress', logKey);
        function logKey(e) {
            window.location.replace(<?php echo $renvoikeypress; ?>);
        }
    </script>

</body>
</html>