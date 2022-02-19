<?php
if($_SESSION['ligne'] == "D"){
    $dest1 = '<option value="taillees">Les Taillées - Universitées</option>';
    $dest2 = '<option value="etiennegrappe">Étienne Grappe</option>';
}elseif($_SESSION['ligne'] == "B"){
    $dest1 = '<option value="oxford">GRENOBLE Oxford</option>';
    $dest2 = '<option value="pds">GIÈRES Plaine des Sports</option>';
}elseif($_SESSION['ligne'] == "C"){
    $dest1 = '<option value="prisme">Le Prisme</option>';
    $dest2 = '<option value="condillac">Condillac - Universités</option>';
}elseif($_SESSION['ligne'] == "A"){
    $dest1 = '<option value="poya">FONTAINE La Poya</option>';
    $dest2 = '<option value="etoile">PONT-DE-CLAIX L\'Étoile</option>';
}elseif($_SESSION['ligne'] == "E"){
    $dest1 = '<option value="palluel">Palluel</option>';
    $dest2 = '<option value="louisemichel">Louise Michel</option>';
}