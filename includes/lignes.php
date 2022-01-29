<?php if($_SESSION['destination'] == "oxford"){
    $stops = array("Plaine des Sports", "Gières Gare - Universités", "Mayencin - Champ Roman", "Condillac - Universités", "Bibliothèques Universitaires", "Gabriel Fauré", "Les Taillées - Universités", "Grand Sablon", "Michallon", "La Tronche Hôpital", "Ile Verte", "Notre-Dame - Musée", "Sainte-Claire - Les Halles", "Hubert Dubedout - Maison du Tourisme", "Victor Hugo", "Alsace-Lorraine", "Gares", "Saint-Bruno", "Palais de Justice - Gare", "Cité Internationale", "Marie-Louise Paris - CEA", "Oxford");
    $direction = "GRENOBLE Oxford";
    $nbstops = 21;
} elseif($_SESSION['destination'] == "pds"){
    $stops = array("Oxford", "Marie-Louise Paris – CEA", "Cité Internationale", "Palais de Justice - Gare", "Saint-Bruno", "Gares", "Alsace-Lorraine", "Victor Hugo", "Hubert Dubedout - Maison du Tourisme", "Sainte-Claire – Les Halles", "Notre-Dame Musée", "Ile Verte", "La Tronche Hôpital", "Michallon", "Grand Sablon", "Les Taillées - Universités", "Gabriel Fauré", "Bibliothèques Universitaires", "Condillac – Universités", "Mayencin – Champ Roman", "Gières Gare – Universités", "Plaine des Sports");
    $direction = "GIÈRES Plaine des Sports";
    $nbstops = 21;
} elseif($_SESSION['destination'] == "taillees"){
    $stops=array("Etienne Grappe", "Parc Jo Blanchon", "Edouard Vaillant", "Maison Communale", "Neyrpic - Belledonne", "Les Taillées - Universités");
    $direction = "Les Taillées - Universités";
    $nbstops = 5;
} elseif($_SESSION['destination'] == "etiennegrappe"){
    $stops = array("Les Taillées - Universités", "Neyrpic - Belledonne", "Maison Communale", "Edouard Vaillant", "Parc Jo Blanchon", "Etienne Grappe");
    $direction = "Etienne Grappe";
    $nbstops = 5;
}

// ATTENTION ! Ici le nombre d'arrêt correspond au nombre d'arrêts dans la réalité en retirant 1 car le premier dans l'array commence à 0 !