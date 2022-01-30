<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Choix de la ligne et de la destination</title>
</head>
<body>
    <?php
    if(isset($_SESSION['ligne']) && isset($_POST['destination'])) {
        $_SESSION['destination'] = $_POST['destination'];
        $_SESSION['arretactuel'] = 0;
        $_SESSION['stopnum1'] = 0;
        header('Location: stop.php');
    } else { ?>

    <h1>Bonjour !</h1>
    <h2>Ceci est une sorte de reproduction des panneaux que l'on peux trouver dans les trams et bus de Grenoble !</h2>
    <h2 id="msgattention">Attention ! <br> <br>
        Ce panneau pourrait avoir quelques bugs si votre écran n'est pas en 16:9 ou en 1920x1080, cela est dû au fait que j'ai développé le site dans cette résolution ! <br></h2>
    <h2>Pour que le panneau fonctionne correctement, mettez votre navigateur en plein écran. </h2>
    <h2>Choisissez ici une ligne et sa destination !</h2>

    

    <?php if(isset($_POST['ligne'])){ ?>
        <form method="post" action="">    
            <?php $_SESSION['ligne'] = $_POST['ligne'];
            include("includes/lignesdest.php");
            ?>
            <label>Choisissez maintenant une destination : </label>
            <select name="destination">
                <option value="">--- Quelle destination ? ---</option>
    	        <?php echo $dest1;
                echo $dest2; ?>
	        </select>
            <input type="submit" value="Valider !">
        </form>
    <?php }else{ ?>
        <form method="post" action="">
        <label>Choisissez votre ligne : </label>
        <select name="ligne">
        <option value="">--- Quelle ligne ? ---</option>
        <option value="D">Ligne D</option>
        <option value="B">Ligne B</option>
        </select>
        <input type="submit" value="Choisir une destination !">
        </form>
    <?php }
    }?>

    <p>Site réalisé par Yellow375 - Design général du panneau par Yellow375 - Logos des lignes TAG et Parking Relais créés par la <a href="https://www.tag.fr" class="acredits"> TAG </a>, Logo Cars Région créé par <a href="https://carsisere.auvergnerhonealpes.fr/" class="acredits">Cars Région</a> et Logo M Vélo+ créé par le <a href="https://www.veloplus-m.fr/" class="acredits">SMMAG</a> - Version Beta 4 du 30/01/2022 - Code source disponible sur <a href="https://github.com/Yellow375/affichageTAG" class="acredits">Github</a></p>
</body>
</html>