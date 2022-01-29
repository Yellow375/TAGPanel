<?php if($_SESSION['ligne'] == "B" && $_SESSION['destination'] == "oxford"){
if($arretsuivant1 == 4){
    $classstop1 = "\"stop1overflow\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
}elseif ($arretsuivant1 == 2 && $arretsuivant3 == 4) {
    $classstop1 = "\"stop1overflow\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3overflow\"";
}elseif($arretsuivant1 == 13){
    $classstop1 = "\"stop1hd\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
}elseif($arretsuivant2 == 13){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2hd\"";
    $classstop3 = "\"stop3\"";
}elseif($arretsuivant3 == 13){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3hd\"";
}elseif ($arretsuivant2 == 2) {
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2overflow\"";
    $classstop3 = "\"stop3\"";
}elseif ($arretsuivant2 == 4) {
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2overflow\"";
    $classstop3 = "\"stop3\"";
}else{
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
}
}elseif($_SESSION['ligne'] == "B" && $_SESSION['destination'] == "pds"){
if ($arretsuivant1 == 19) {
    $classstop1 = "\"stop1overflow\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
}elseif($arretsuivant1 == 17 && $arretsuivant3 == 19){
    $classstop1 = "\"stop1overflow\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3overflow\"";
}elseif($arretsuivant1 == 8){
    $classstop1 = "\"stop1hd\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
}elseif($arretsuivant2 == 8){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2hd\"";
    $classstop3 = "\"stop3\"";
}elseif($arretsuivant3 == 8){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3hd\"";
}elseif ($arretsuivant2 == 19) {
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2overflow\"";
    $classstop3 = "\"stop3\"";
}elseif ($arretsuivant2 == 17) {
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2overflow\"";
    $classstop3 = "\"stop3\"";
}elseif ($arretsuivant3 == 17) {
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3overflow\"";
}else{
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
}
}elseif($_SESSION ['ligne'] == "D"){
    $classstop1 = "\"stop1\"";
    $classstop2 = "\"stop2\"";
    $classstop3 = "\"stop3\"";
}

?>