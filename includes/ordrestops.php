<?php
if($_SESSION['destination'] == "oxford" || $_SESSION['destination'] == "taillees"){
    $arretsuivant1 = $arretsuivant + $_SESSION['arretactuel'];
    $arretsuivant2 = $arretsuivant + $_SESSION['arretactuel'] + 1;
    $arretsuivant3 = $arretsuivant + $_SESSION['arretactuel'] + 2;
}else{
    $arretsuivant1 = $arretsuivant + $_SESSION['arretactuel'];
    $arretsuivant2 = $arretsuivant + $_SESSION['arretactuel'] - 1;
    $arretsuivant3 = $arretsuivant + $_SESSION['arretactuel'] - 2;
}