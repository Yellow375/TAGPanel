<?php if($arretsuivant1==$nbstops && $_SESSION['ligne'] == "B"){
    $classbody = "\"trajetfinB\"";
} elseif($arretsuivant2==$nbstops && $_SESSION['ligne'] == "B") {
    $classbody = "\"trajetpfB\"";
} elseif($_SESSION['ligne'] == "B" && $_SESSION['destination'] == "oxford"){
    $classbody = "\"trajetB\"";
} elseif($_SESSION['ligne'] == "B" && $_SESSION['destination'] == "pds"){
    $classbody = "\"trajetB\"";
} elseif($arretsuivant1==$nbstops && $_SESSION['ligne'] == "D") {
    $classbody = "\"trajetfinD\"";
} elseif($arretsuivant2==$nbstops && $_SESSION['ligne'] == "D") {
    $classbody = "\"trajetfinD\"";
} else{
    $classbody = "\"trajetD\"";
}
?>