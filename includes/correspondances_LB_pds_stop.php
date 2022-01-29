<?php
if(isset($arretsuivant1)){
    /*if($arretsuivant1 == "Marie-Louise Paris – CEA" || $arretsuivant1 == "Cité Internationale"){?>
        <img src="correspondances/Ligne_CR.png" alt="Cars Régions" class="imagecorresp" width="7%">
    <?php }*/
    if($arretsuivant1 == 0){ ?>
        <div class="imagecorrespstop">
            <img src="correspondances/Ligne_C6.png" alt="Ligne C6" class="imagecorresp" width="7%">
            <img src="correspondances/Ligne_22.png" alt="Ligne 22" class="imagecorresp" width="7%">
            <img src="correspondances/Ligne_54.png" alt="Ligne 54" class="imagecorresp" width="7%">
        </div>
        <?php }elseif($arretsuivant1 == 3){ ?>
    <div class="imagecorrespstop">
        <img src="correspondances/Ligne_C5.png" alt="Ligne C5" class="imagecorresp" width="7%"> </div>
    <?php } elseif($arretsuivant1 == 4){ ?>
        <div class="imagecorrespstop">
        <img src="correspondances/Ligne_A.png" alt="Ligne A" class="imagecorresp" width="7%"> </div>
    <?php }elseif($arretsuivant1 == 5){ ?>
        <div class="imagecorrespstop">
        <img src="correspondances/Ligne_A.png" alt="Ligne A" class="imagecorresp" width="7%"> 
        <img src="correspondances/Ligne_C1.png" alt="Ligne C1" class="imagecorresp" width="7%"> 
        <img src="correspondances/Ligne_26.png" alt="Ligne 26" class="imagecorresp" width="7%">
    </div>
    <?php }elseif($arretsuivant1 == 6){ ?>
        <div class="imagecorrespstop">
            <img src="correspondances/Ligne_A.png" alt="Ligne A" class="imagecorresp" width="7%"> 
            <img src="correspondances/Ligne_E.png" alt="Ligne E" class="imagecorresp" width="7%"> 
            <img src="correspondances/AM.png" alt="Agence de Mobilité" class="imagecorresp" width="7%"> 
        </div>
    <?php }elseif($arretsuivant1 == 7){ ?>
        <div class="imagecorrespstop">
            <img src="correspondances/Ligne_A.png" alt="Ligne A" class="imagecorresp" width="7%"> 
            <img src="correspondances/Ligne_C1.png" alt="Ligne C1" class="imagecorresp" width="7%"> 
            <img src="correspondances/Ligne_C3.png" alt="Ligne C3" class="imagecorresp" width="7%"> 
            <img src="correspondances/Ligne_C4.png" alt="Ligne C4" class="imagecorresp" width="7%">
            <img src="correspondances/Ligne_40.png" alt="Ligne 40" class="imagecorresp" width="7%"> 
        </div>
    <?php }elseif($arretsuivant1 == 8){ ?>
        <div class="imagecorrespstop">
        <img src="correspondances/Ligne_A.png" alt="Ligne A" class="imagecorresp" width="7%"> </div>
    <?php }elseif($arretsuivant1 == 10){ ?>
        <div class="imagecorrespstop">
            <img src="correspondances/Ligne_16.png" alt="Ligne 16" class="imagecorresp" width="7%"> 
            <img src="correspondances/Ligne_62.png" alt="Ligne 62" class="imagecorresp" width="7%">
        </div>
    <?php }elseif($arretsuivant1 == 12){ ?>
        <div class="imagecorrespstop">
            <img src="correspondances/Ligne_13.png" alt="Ligne 13" class="imagecorresp" width="7%">
        </div>
    <?php }elseif($arretsuivant1 == 14){ ?>
        <div class="imagecorrespstop">
            <img src="correspondances/Ligne_41.png" alt="Ligne 41" class="imagecorresp" width="7%"> 
            <img src="correspondances/Ligne_42.png" alt="Ligne 42" class="imagecorresp" width="7%">
        </div>
    <?php }elseif($arretsuivant1 == 15){ ?>
        <div class="imagecorrespstop">
            <img src="correspondances/Ligne_D.png" alt="Ligne D" class="imagecorresp" width="7%">
        </div>
    <?php }elseif($arretsuivant1 == 16){ ?>
        <div class="imagecorrespstop">
            <img src="correspondances/Ligne_C.png" alt="Ligne C" class="imagecorresp" width="7%">
        </div>
    <?php }elseif($arretsuivant1 == 17){ ?>
        <div class="imagecorrespstop">
            <img src="correspondances/Ligne_C.png" alt="Ligne C" class="imagecorresp" width="7%">
            <img src="correspondances/Ligne_C5.png" alt="Ligne C5" class="imagecorresp" width="7%">
            <img src="correspondances/Ligne_C7.png" alt="Ligne C7" class="imagecorresp" width="7%">
            <img src="correspondances/Ligne_23.png" alt="Ligne 23" class="imagecorresp" width="7%">
        </div>
    <?php }elseif($arretsuivant1 == 18){ ?>
        <div class="imagecorrespstop">
            <img src="correspondances/Ligne_C.png" alt="Ligne C" class="imagecorresp" width="7%">
        </div>
    <?php }elseif($arretsuivant1 == 20){ ?>
        <div class="imagecorrespstop">
            <img src="correspondances/Ligne_14.png" alt="Ligne 14" class="imagecorresp" width="7%">
            <img src="correspondances/Ligne_23.png" alt="Ligne 23" class="imagecorresp" width="7%">
            <img src="correspondances/Ligne_43.png" alt="Ligne 43" class="imagecorresp" width="7%">
        </div>
    <?php } else { ?>
<div class="nocorresp"></div>
<?php }} ?>