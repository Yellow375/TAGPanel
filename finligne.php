<?php
session_start();
if(isset($_SESSION['ligne']) && isset($_SESSION['destination'])){
if($_SESSION['destination']=="etiennegrappe"){
    $dest = "Étienne Grappe";
} elseif($_SESSION['destination']=="taillees"){
    $dest = "Les Taillées - Universités";
} else {
    $dest = "on a un problème là...";
}
} else {
    header('Location: choix.php');
}

$_SESSION['arretactuel'] = 0;

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
    <p>Site réalisé par Yellow375 - Design général du panneau par Yellow375 - Logos des lignes faits par la <a href="https://www.tag.fr" class="acredits"> TAG </a> - Version Beta 3 du 20/11/2021 - Code source disponible sur <a href="https://github.com/Yellow375/affichageTAG" class="acredits">Github</a></p>

</body>
</html>