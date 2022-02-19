<?php
session_start();
if(isset($_SESSION['ligne']) && isset($_SESSION['destination'])){
if($_SESSION['destination']=="etiennegrappe"){
    $dest = "Étienne Grappe";
} elseif($_SESSION['destination']=="taillees"){
    $dest = "Les Taillées - Universités";
} elseif($_SESSION['destination']=="oxford"){
    $dest = "GRENOBLE Oxford";
} elseif($_SESSION['destination']=="pds"){
    $dest = "GIÈRES Plaine des Sports";
} elseif($_SESSION['destination']=="condillac"){
    $dest = "Condillac - Universités";
} elseif($_SESSION['destination']=="pds"){
    $dest = "Le Prisme";
} elseif($_SESSION['destination']=="poya"){
    $dest = "FONTAINE La Poya";
} elseif($_SESSION['destination']=="etoile"){
    $dest = "PONT-DE-CLAIX L'Étoile";
} elseif($_SESSION['destination']=="louisemichel"){
    $dest = "Louise Michel";
} elseif($_SESSION['destination']=="palluel"){
    $dest = "Palluel";
} else {
    $dest = "on a un problème là...";
}
} else {
    header('Location: choix.php');
}

$_SESSION['arretactuel'] = 0;
$_SESSION['stopnum1'] = 0;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fin de la ligne !</title>
</head>
<body>
    <h1>Oulah ! Pas si vite voyons !</h1>
    <h2>Vous avez déjà fini la ligne <?php echo $_SESSION['ligne']; ?> en direction de <?php echo $dest; ?> !</h2>
    <?php
    if($_SESSION['destination'] == "etiennegrappe"){
        $_SESSION['destination'] = "taillees";
        
    } elseif($_SESSION['destination'] == "taillees") {
        $_SESSION['destination'] = "etiennegrappe";
    } elseif($_SESSION['destination'] == "oxford") {
        $_SESSION['destination'] = "pds";
    } elseif($_SESSION['destination'] == "pds") {
        $_SESSION['destination'] = "oxford";
    } elseif($_SESSION['destination'] == "prisme") {
        $_SESSION['destination'] = "condillac";
    } elseif($_SESSION['destination'] == "condillac") {
        $_SESSION['destination'] = "prisme";
    } elseif($_SESSION['destination'] == "poya") {
        $_SESSION['destination'] = "etoile";
    } elseif($_SESSION['destination'] == "etoile") {
        $_SESSION['destination'] = "poya";
    } elseif($_SESSION['destination'] == "palluel") {
        $_SESSION['destination'] = "louisemichel";
    } elseif($_SESSION['destination'] == "louisemichel") {
        $_SESSION['destination'] = "palluel";
    } else {
        $_SESSION['destination'] = "oups";
    } 
    ?>

    <p>
        <?php
        if($_SESSION['destination'] == "oups"){
            echo "Vous aurez remarqué que la destination n'est pas trop... Bonne ouais... C'est parce qu'il y a eu un problème dans le PHP... <br>";
            echo "Revenir à <a href=\"logout.php\">la page de sélection de ligne et de sa direction </a> ?";
        } else {
            echo "Souhaitez-vous <a href=\"stop.php\"> changer de direction </a> ? <br>";
            echo "Ou souhaitez-vous <a href=\"logout.php\"> revenir à la page de choix </a> ? <br>";
        }
        ?>
    </p>
    <p>Site réalisé par Yellow375 - Design général du panneau par Yellow375 - Logos des lignes TAG et Parking Relais créés par la <a href="https://www.tag.fr" class="acredits"> TAG </a>, Logo Cars Région créé par <a href="https://carsisere.auvergnerhonealpes.fr/" class="acredits">Cars Région</a> et Logo M Vélo+ créé par le <a href="https://www.veloplus-m.fr/" class="acredits">SMMAG</a> - Version Beta 4 du 30/01/2022 - Code source disponible sur <a href="https://github.com/Yellow375/affichageTAG" class="acredits">Github</a></p>

</body>
</html>