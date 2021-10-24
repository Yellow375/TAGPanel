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
        header('Location: index.php');
    } else { ?>

    <h1>Bonjour !</h1>
    <h2>Choisissez ici une ligne et sa destination !</h2>
    <form method="post" action="">
        <label>Choisissez votre ligne : </label>
        <select name="ligne">
    	<option value="">--- Quelle ligne ? ---</option>
    	<option value="D">Ligne D</option>
	    </select>
        <input type="submit" value="Choisir une destination !">
    </form> <br> <br>

    <?php if(isset($_POST['ligne'])){ ?>
        <form method="post" action="">    
            <?php $_SESSION['ligne'] = $_POST['ligne']; ?>
            <label>Choisissez maintenant une destination : </label>
            <select name="destination">
                <option value="">--- Quelle destination ? ---</option>
    	        <option value="taillees">Les Taillées - Universitées</option>
    	        <option value="etiennegrappe">Étienne Grappe</option>
	        </select>
            <input type="submit" value="Valider !">
        </form>
    <?php } 
    }?>

    <p>Site réalisé par Yellow375 - Version 1 du 24/10/2021 - Code source disponible sur <a href="https://github.com/Yellow375/affichageTAG">Github</a></p>
</body>
</html>