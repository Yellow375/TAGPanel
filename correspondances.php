<?php
if(isset($arretsuivant1)){

if(($arretsuivant1 == 1 && $_SESSION['destination'] == "etiennegrappe") || ($arretsuivant1 == 4 && $_SESSION['destination']=="taillees")){?>
    <div class="corresp0">
        <img src="correspondances/Ligne_C.png" alt="Ligne C" class="imagecorresp" width="7%">
        <img src="correspondances/Ligne_C5.png" alt="Ligne C5" class="imagecorresp" width="7%">
        <img src="correspondances/Ligne_15.png" alt="Ligne 15" class="imagecorresp" width="7%">
</div>
<?php } elseif(($arretsuivant1 == 2 && $_SESSION['destination'] == "etiennegrappe") || ($arretsuivant1 == 3 && $_SESSION['destination']=="taillees")){?>
    <div class="corresp0">
    <img src="correspondances/Ligne_14.png" alt="Ligne 14" class="imagecorresp" width="7%">
</div>
<?php }elseif(($arretsuivant1 == 3 && $_SESSION['destination'] == "etiennegrappe") || ($arretsuivant1 == 2 && $_SESSION['destination']=="taillees")){?>
    <div class="corresp0">
    <img src="correspondances/Ligne_C5.png" alt="Ligne C5" class="imagecorresp" width="7%">
</div>
<?php }elseif($arretsuivant1 == 5 && $_SESSION['destination'] == "etiennegrappe"){?>
    <div class="corresp0">
    <img src="correspondances/Ligne_C6.png" alt="Ligne C6" class="imagecorresp" width="7%">
    <img src="correspondances/Ligne_C7.png" alt="Ligne C7" class="imagecorresp" width="7%">
    <img src="correspondances/Ligne_12.png" alt="Ligne 12" class="imagecorresp" width="7%">
</div>
<?php }elseif($arretsuivant1 == 5 && $_SESSION['destination'] == "taillees"){?>
    <div class="corresp0">
    <img src="correspondances/Ligne_B.png" alt="Ligne B" width="7%">
</div>
<?php }else{ ?>

<div class="nocorresp"></div>

<?php }}

if(isset($arret)){
if(($arret == 1 && $_SESSION['destination'] == "etiennegrappe") || ($arret == 4 && $_SESSION['destination']=="taillees")){?>
    <div class="corresp1">
        <img src="correspondances/Ligne_C.png" alt="Ligne C" class="imagecorrespstop" width="6%">
        <img src="correspondances/Ligne_C5.png" alt="Ligne C5" class="imagecorrespstop" width="6%">
        <img src="correspondances/Ligne_15.png" alt="Ligne 15" class="imagecorrespstop" width="6%">
</div>
<?php }elseif(($arret == 2 && $_SESSION['destination'] == "etiennegrappe") || ($arret == 3 && $_SESSION['destination']=="taillees")){?>
    <div class="corresp1">
    <img src="correspondances/Ligne_14.png" alt="Ligne 14" class="imagecorrespstop" width="6%">
</div>
<?php }elseif(($arret == 3 && $_SESSION['destination'] == "etiennegrappe") || ($arret == 2 && $_SESSION['destination']=="taillees")){?>
    <div class="corresp1">
    <img src="correspondances/Ligne_C5.png" alt="Ligne C5" class="imagecorrespstop" width="6%">
</div>
<?php }elseif($arret == 5 && $_SESSION['destination'] == "etiennegrappe" || $arret == 0 && $_SESSION['destination'] == "taillees"){?>
    <div class="corresp1">
    <img src="correspondances/Ligne_C6.png" alt="Ligne C6" class="imagecorrespstop" width="6%">
    <img src="correspondances/Ligne_C7.png" alt="Ligne C7" class="imagecorrespstop" width="6%">
    <img src="correspondances/Ligne_12.png" alt="Ligne 12" class="imagecorrespstop" width="6%">
</div>
<?php }elseif(($arret == 5 && $_SESSION['destination'] == "taillees") || ($arret == 0 && $_SESSION['destination'] == "etiennegrappe")){?>
    <div class="corresp1">
    <img src="correspondances/Ligne_B.png" alt="Ligne B" class="imagecorrespstop" width="6%">
</div>
<?php }} ?>