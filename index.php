<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<?php

if(isset($_SESSION['ligne']) && isset($_SESSION['destination'])){
    



$arretsuivant = 0;

    $arretsuivant1 = $arretsuivant + $_SESSION['arretactuel'];
    $arretsuivant2 = $arretsuivant + $_SESSION['arretactuel'] + 1;
    $arretsuivant3 = $arretsuivant + $_SESSION['arretactuel'] + 2;


} else {
    header('Location: choix.php');
}

include("includes/lignes.php");

include("includes/classgest.php");

include("includes/classstops.php");

$_SESSION['stopnum1'] = $arretsuivant1;

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ligne <?php echo "".$_SESSION['ligne'].""; ?></title>
</head>
<body class=<?php echo $classbody; ?> onload="startTime()">
    <p class="direction"><?php echo $direction;?></p>
    <p class=<?php echo $classstop1; ?>><a href="stop.php" class="stoplien"><?php echo $stops[$arretsuivant1]; ?></a></p>
    <?php include("includes/correspgest.php"); 
    if($arretsuivant2<=$nbstops) { ?>
    <p class=<?php echo $classstop2; ?>><?php echo $stops[$arretsuivant2]; ?></p>
    <?php }
    if($arretsuivant3 <= $nbstops){ ?>
    <div class=<?php echo $classstop3; ?>><?php echo $stops[$arretsuivant3]; ?></div>
    <?php } ?>


<div id="txt" class="heure"></div>

<script>
function startTime() {
  const today = new Date();
  let h = today.getHours();
  if (h < 10) {h = "0"+h};
  let m = today.getMinutes();
  m = checkTime(m);
  document.getElementById('txt').innerHTML =  h + ":" + m;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

document.addEventListener('keypress', logKey);

function logKey(e) {
    window.location.replace("stop.php");
}
</script>

</body>
</html>