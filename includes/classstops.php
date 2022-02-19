<?php 
if(($arretsuivant2 == $nbstops) && (strlen($stops[$arretsuivant1]) >= 22) && (strlen($stops[$arretsuivant2]) >= 22)) {
    $classstop1 = "\"stop1ovf\"";
    $classstop2 = "\"stop2ovf\"";
}elseif(($arretsuivant2 == $nbstops) && (strlen($stops[$arretsuivant2]) >= 22)) {
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2ovf\"";
} elseif(($arretsuivant2 == $nbstops) && (strlen($stops[$arretsuivant1]) >= 22)) {
    $classstop1 = "\"stop1ovf\"";
    $classstop2 = "\"stop2\"";
} elseif($arretsuivant2 == $nbstops) {
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
}elseif($arretsuivant1 == $nbstops && (strlen($stops[$arretsuivant1]) >= 22)) {
    $classstop1 = "\"stop1ovf\"";
}elseif($arretsuivant1 == $nbstops) {
    $classstop1 = "\"stop1\"";
} elseif($stops[$arretsuivant1] == "Hubert Dubedout - Maison du Tourisme"){
    $classstop1 = "\"stop1hd\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
} elseif($stops[$arretsuivant2] == "Hubert Dubedout - Maison du Tourisme"){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2hd\"";
    $classstop3 = "\"stop3\"";
} elseif($stops[$arretsuivant3] == "Hubert Dubedout - Maison du Tourisme"){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3hd\"";
} elseif($stops[$arretsuivant1] == "Fontaine Hôtel de Ville La Source"){
    $classstop1 = "\"stop1fhdv\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
} elseif($stops[$arretsuivant2] == "Fontaine Hôtel de Ville La Source"){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2fhdv\"";
    $classstop3 = "\"stop3\"";
} elseif($stops[$arretsuivant3] == "Fontaine Hôtel de Ville La Source"){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3fhdv\"";
} elseif($stops[$arretsuivant1] == "Saint-Martin-le-Vinoux Hôtel de Ville"){
    $classstop1 = "\"stop1smlvhdv\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
} elseif($stops[$arretsuivant2] == "Saint-Martin-le-Vinoux Hôtel de Ville"){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2smlvhdv\"";
    $classstop3 = "\"stop3\"";
} elseif($stops[$arretsuivant3] == "Saint-Martin-le-Vinoux Hôtel de Ville"){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3smlvhdv\"";
} elseif($stops[$arretsuivant1] == "Seyssinet-Pariset Hôtel de Ville" || $stops[$arretsuivant1] == "La Bruyère - Parc Jean Verlhac"){
    $classstop1 = "\"stop1sp\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
} elseif($stops[$arretsuivant2] == "Seyssinet-Pariset Hôtel de Ville" || $stops[$arretsuivant2] == "La Bruyère - Parc Jean Verlhac"){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2sp\"";
    $classstop3 = "\"stop3\"";
} elseif($stops[$arretsuivant3] == "Seyssinet-Pariset Hôtel de Ville" || $stops[$arretsuivant3] == "La Bruyère - Parc Jean Verlhac"){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3sp\"";
} elseif((strlen($stops[$arretsuivant1]) >= 22) && (strlen($stops[$arretsuivant2]) >= 22) && (strlen($stops[$arretsuivant3]) >= 22)){
    $classstop1 = "\"stop1ovf\"";
    $classstop2 = "\"stop2ovf\"";
    $classstop3 = "\"stop3ovf\"";
} elseif((strlen($stops[$arretsuivant2]) >= 22) && (strlen($stops[$arretsuivant3]) >= 22)){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2ovf\"";
    $classstop3 = "\"stop3ovf\"";
} elseif((strlen($stops[$arretsuivant1]) >= 22) && (strlen($stops[$arretsuivant3]) >= 22)){
    $classstop1 = "\"stop1ovf\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3ovf\"";
} elseif((strlen($stops[$arretsuivant1]) >= 22) && (strlen($stops[$arretsuivant2]) >= 22)){
    $classstop1 = "\"stop1ovf\"";
    $classstop2 = "\"stop2ovf\"";
    $classstop3 = "\"stop3\"";
} elseif(strlen($stops[$arretsuivant1]) >= 22){
    $classstop1 = "\"stop1ovf\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
} elseif(strlen($stops[$arretsuivant2]) >= 22){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2ovf\"";
    $classstop3 = "\"stop3\"";
} elseif(strlen($stops[$arretsuivant3]) >= 22){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3ovf\"";
} elseif($arretsuivant3 <= $nbstops) {
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
}
?>