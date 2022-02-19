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
    <?php include("includes/correspgeststop.php"); ?>

    <script>
        document.addEventListener('keypress', logKey);
        function logKey(e) {
            window.location.replace(<?php echo $renvoikeypress; ?>);
        }
    </script>

</body>
</html>