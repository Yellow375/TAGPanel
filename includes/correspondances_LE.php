<?php
if(isset($arretsuivant1)){
    if($stops[$arretsuivant1] == "Louise Michel"){ ?>
        <div class="corresp0">
            <img src="correspondances/Ligne_C2.png" alt="Ligne C2" class="imagecorresp"> 
            <img src="correspondances/Ligne_25.png" alt="Ligne 25" class="imagecorresp"> 
            <img src="correspondances/Ligne_CR.png" alt="Cars Région" class="imagecorresp">
        </div>
        <?php }elseif($stops[$arretsuivant1] == "Alliés"){ ?>
        <div class="corresp0">
            <img src="correspondances/Ligne_C5.png" alt="Ligne C5" class="imagecorresp"> 
            <img src="correspondances/Ligne_25.png" alt="Ligne 25" class="imagecorresp"> 
            <img src="correspondances/Ligne_CR.png" alt="Cars Région" class="imagecorresp">
        </div>
        <?php }elseif($stops[$arretsuivant1] == "Vallier - Libération"){ ?>
        <div class="corresp0">
            <img src="correspondances/Ligne_C.png" alt="Ligne C" class="imagecorresp"> 
            <img src="correspondances/Ligne_25.png" alt="Ligne 25" class="imagecorresp"> 
            <img src="correspondances/Ligne_26.png" alt="Ligne 26" class="imagecorresp"> 
            <img src="correspondances/Ligne_CR.png" alt="Cars Région" class="imagecorresp">
            <img src="correspondances/AM.png" alt="Agence de Mobilité" class="imagecorresp">
        </div>
    <?php }elseif($stops[$arretsuivant1] == "Condorcet"){ ?>
        <div class="corresp0">
            <img src="correspondances/Ligne_12.png" alt="Ligne 12" class="imagecorresp">
        </div>
        <?php } elseif($stops[$arretsuivant1] == "Alsace-Lorraine"){ ?>
        <div class="corresp0">
            <img src="correspondances/Ligne_A.png" alt="Ligne A" class="imagecorresp"> 
            <img src="correspondances/Ligne_B.png" alt="Ligne B" class="imagecorresp"> 
            <img src="correspondances/Ligne_26.png" alt="Ligne 26" class="imagecorresp">
            <img src="correspondances/Ligne_CR.png" alt="Cars Régions" class="imagecorresp">
            <img src="correspondances/AM.png" alt="Agence de Mobilité" class="imagecorresp"> 
        </div>
    <?php } elseif($stops[$arretsuivant1] == "Casamaures - Village"){ ?>
        <div class="corresp0">
            <img src="correspondances/Ligne_56.png" alt="Ligne 56" class="imagecorresp"> 
            <img src="correspondances/parkingrelais.png" alt="Parking Relais" class="imagecorresp"> 
        </div>
    <?php }elseif($stops[$arretsuivant1] == "Saint-Martin-le-Vinoux Hôtel de Ville"){ ?>
        <div class="corresp0">
        <img src="correspondances/Ligne_55.png" alt="Ligne 55" class="imagecorresp"> 
        <img src="correspondances/Ligne_56.png" alt="Ligne 56" class="imagecorresp"> 
    </div>
    <?php }elseif($stops[$arretsuivant1] == "Fiancey - Prédieu"){ ?>
        <div class="corresp0">
            <img src="correspondances/Ligne_22.png" alt="Ligne 22" class="imagecorresp">
        </div>
    <?php }elseif($stops[$arretsuivant1] == "Muret"){ ?>
        <div class="corresp0">
            <img src="correspondances/Ligne_22.png" alt="Ligne 22" class="imagecorresp">
            <img src="correspondances/Ligne_60.png" alt="Ligne 60" class="imagecorresp">
            <img src="correspondances/Ligne_61.png" alt="Ligne 61" class="imagecorresp">
        </div>
    <?php }elseif($stops[$arretsuivant1] == "Pont de Vence"){ ?>
        <div class="corresp0">
        <img src="correspondances/Ligne_22.png" alt="Ligne 22" class="imagecorresp">
        <img src="correspondances/Ligne_54.png" alt="Ligne 54" class="imagecorresp">
     </div>
    <?php }elseif($stops[$arretsuivant1] == "Karben"){ ?>
        <div class="corresp0">
            <img src="correspondances/Ligne_22.png" alt="Ligne 22" class="imagecorresp">
            <img src="correspondances/Ligne_51.png" alt="Ligne 51" class="imagecorresp">
            <img src="correspondances/Ligne_54.png" alt="Ligne 54" class="imagecorresp">
            <img src="correspondances/Ligne_63.png" alt="Ligne 63" class="imagecorresp">
            <img src="correspondances/parkingrelais.png" alt="Parking Relais" class="imagecorresp">
        </div>
    <?php }elseif($stops[$arretsuivant1] == "Rafour"){ ?>
        <div class="corresp0">
            <img src="correspondances/Ligne_63.png" alt="Ligne 63" class="imagecorresp">
            <img src="correspondances/Ligne_CR.png" alt="Cars Régions" class="imagecorresp">
        </div>
    <?php }elseif($stops[$arretsuivant1] == "Palluel"){ ?>
        <div class="corresp0">
        <img src="correspondances/Ligne_CR.png" alt="Cars Régions" class="imagecorresp">
        <img src="correspondances/parkingrelais.png" alt="Parking Relais" class="imagecorresp">
        </div>
    <?php } else { ?>
<div class="nocorresp"></div>
<?php }} ?>