<?php if($arretsuivant1==$nbstops && $_SESSION['ligne'] == "A"){
    $classbody = "\"trajetfinA\"";
} elseif($arretsuivant2==$nbstops && $_SESSION['ligne'] == "A") {
    $classbody = "\"trajetpfA\"";
} elseif($_SESSION['ligne'] == "A"){
    $classbody = "\"trajetA\"";
} elseif($arretsuivant1==$nbstops && $_SESSION['ligne'] == "B"){
    $classbody = "\"trajetfinB\"";
} elseif($arretsuivant2==$nbstops && $_SESSION['ligne'] == "B") {
    $classbody = "\"trajetpfB\"";
} elseif($_SESSION['ligne'] == "B"){
    $classbody = "\"trajetB\"";
} elseif($arretsuivant1==$nbstops && $_SESSION['ligne'] == "C"){
    $classbody = "\"trajetfinC\"";
} elseif($arretsuivant2==$nbstops && $_SESSION['ligne'] == "C") {
    $classbody = "\"trajetpfC\"";
} elseif($_SESSION['ligne'] == "C"){
    $classbody = "\"trajetC\"";
} elseif($arretsuivant1==$nbstops && $_SESSION['ligne'] == "D") {
    $classbody = "\"trajetfinD\"";
} elseif($arretsuivant2==$nbstops && $_SESSION['ligne'] == "D") {
    $classbody = "\"trajetpfD\"";
} elseif($_SESSION['ligne'] == "D"){
    $classbody = "\"trajetD\"";
}elseif($arretsuivant1==$nbstops && $_SESSION['ligne'] == "E") {
    $classbody = "\"trajetfinE\"";
} elseif($arretsuivant2==$nbstops && $_SESSION['ligne'] == "E") {
    $classbody = "\"trajetpfE\"";
} else{
    $classbody = "\"trajetE\"";
}
?>