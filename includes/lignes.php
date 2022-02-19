<?php if($_SESSION['destination'] == "poya"){
    $stops=array("L'Etoile", "Edmée Chandon", "Denis Papin", "Auguste Delaune", "Marie Curie", "La Rampe - Centre Ville", "Echirolles Gare", "Essarts - La Butte", "Surieux", "Les Granges", "Polesud - Alpexpo", "Grand'Place", "Arlequin", "La Bruyère - Parc Jean Verlhac", "Malherbe", "MC2 : Maison de la Culture", "Mounier", "Albert 1er de Belgique", "Chavant", "Verdun - Préfecture", "Hubert Dubedout - Maison du Tourisme", "Victor Hugo", "Alsace-Lorraine", "Gares", "Saint-Bruno", "Berriat - Le Magasin", "Les Fontainades - Le Vog", "Louis Maisonnat", "Fontaine Hôtel de Ville La Source", "Charles Michels", "La Poya");
    $direction = "FONTAINE La Poya";
    $nbstops = 30;
} elseif($_SESSION['destination'] == "etoile"){
    $stops = array("La Poya", "Charles Michels", "Fontaine Hôtel de Ville La Source", "Louis Maisonnat", "Les Fontainades - Le Vog", "Berriat - Le Magasin", "Saint-Bruno", "Gares", "Alsace-Lorraine", "Victor Hugo", "Hubert Dubedout - Maison du Tourisme", "Verdun - Préfecture", "Chavant", "Albert 1er de Belgique", "Mounier", "MC2 : Maison de la Culture", "Malherbe", "La Bruyère - Parc Jean Verlhac", "Arlequin", "Grand'Place", "Polesud - Alpexpo", "Les Granges", "Surieux", "Essarts - La Butte", "Echirolles Gare", "La Rampe - Centre Ville", "Marie Curie", "Auguste Delaune", "Denis Papin", "Edmée Chandon", "L'Etoile");
    $direction = "PONT-DE-CLAIX L'Etoile";
    $nbstops = 30;
} elseif($_SESSION['destination'] == "oxford"){
    $stops = array("Plaine des Sports", "Gières Gare - Universités", "Mayencin - Champ Roman", "Condillac - Universités", "Bibliothèques Universitaires", "Gabriel Fauré", "Les Taillées - Universités", "Grand Sablon", "Michallon", "La Tronche Hôpital", "Ile Verte", "Notre-Dame - Musée", "Sainte-Claire - Les Halles", "Hubert Dubedout - Maison du Tourisme", "Victor Hugo", "Alsace-Lorraine", "Gares", "Saint-Bruno", "Palais de Justice - Gare", "Cité Internationale", "Marie-Louise Paris - CEA", "Oxford");
    $direction = "GRENOBLE Oxford";
    $nbstops = 21;
} elseif($_SESSION['destination'] == "pds"){
    $stops = array("Oxford", "Marie-Louise Paris – CEA", "Cité Internationale", "Palais de Justice - Gare", "Saint-Bruno", "Gares", "Alsace-Lorraine", "Victor Hugo", "Hubert Dubedout - Maison du Tourisme", "Sainte-Claire – Les Halles", "Notre-Dame Musée", "Ile Verte", "La Tronche Hôpital", "Michallon", "Grand Sablon", "Les Taillées - Universités", "Gabriel Fauré", "Bibliothèques Universitaires", "Condillac – Universités", "Mayencin – Champ Roman", "Gières Gare – Universités", "Plaine des Sports");
    $direction = "GIÈRES Plaine des Sports";
    $nbstops = 21;
} elseif($_SESSION['destination'] == "prisme"){
    $stops = array("Condillac - Universités", "Bibliothèques Universitaires", "Gabriel Fauré", "Hector Berlioz - Universités", "Neyrpic - Belledone", "Péri - Brossolette", "Flandrin - Valmy", "Grenoble Hôtel de Ville", "Chavant", "Gustave Rivet", "Foch - Ferrié", "Vallier - Libération", "Vallier - Docteur Calmette", "Vallier - Catane", "Seyssinet-Pariset Hôtel de Ville", "Fauconnière", "Grand Pré", "Mas des Iles", "Le Prisme");
    $direction = "Le Prisme";
    $nbstops = 18;
} elseif($_SESSION['destination'] == "condillac"){
    $stops = array("Le Prisme", "Mas des Iles", "Grand Pré", "Fauconnière", "Seyssinet-Pariset Hôtel de Ville", "Vallier - Catane", "Vallier - Docteur Calmette", "Vallier - Libération", "Foch - Ferrié", "Gustave Rivet", "Chavant", "Grenonble Hôtel de Ville", "Flandrin - Valmy", "Péri - Brossolette", "Neyrpic - Belledonne", "Hector Berlioz - Universités", "Gabriel Fauré", "Bibliothèques Universitaires", "Condillac - Universités");
    $direction = "Condillac - Universités";
    $nbstops = 18;
} elseif($_SESSION['destination'] == "taillees"){
    $stops=array("Etienne Grappe", "Parc Jo Blanchon", "Edouard Vaillant", "Maison Communale", "Neyrpic - Belledonne", "Les Taillées - Universités");
    $direction = "Les Taillées - Universités";
    $nbstops = 5;
} elseif($_SESSION['destination'] == "etiennegrappe"){
    $stops = array("Les Taillées - Universités", "Neyrpic - Belledonne", "Maison Communale", "Edouard Vaillant", "Parc Jo Blanchon", "Etienne Grappe");
    $direction = "Etienne Grappe";
    $nbstops = 5;
} elseif($_SESSION['destination'] == "palluel"){
    $stops=array("Louise Michel", "Alliés", "Vallier - Libération", "Condorcet", "Alsace-Lorraine", "Annie Fratellini Esplanade", "Casamaures - Village", "Saint-Martin-le-Vinoux Hôtel de Ville", "Horloge", "Néron", "Fiancey - Prédieu", "Muret", "Pont de Vence", "La Pinéa - Saint-Robert", "Karben", "Rafour", "Palluel");
    $direction = "Palluel";
    $nbstops = 16;
} elseif($_SESSION['destination'] == "louisemichel"){
    $stops = array("Palluel", "Rafour", "Karben", "La Pinéa - Saint-Robert", "Pont de Vence", "Muret", "Fiancey - Prédieu", "Néron", "Horloge", "Saint-Martin-le-Vinoux Hôtel de Ville", "Casamaures - Village", "Annie Fratellini Esplanade", "Alsace-Lorraine", "Condorcet", "Vallier - Libération", "Alliés", "Louise Michel");
    $direction = "Louise Michel";
    $nbstops = 16;
}
