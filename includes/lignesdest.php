<?php
if($_SESSION['ligne'] == "D"){
    $dest1 = '<option value="taillees">Les Taillées - Universitées</option>';
    $dest2 = '<option value="etiennegrappe">Étienne Grappe</option>';
} elseif($_SESSION['ligne'] == "B"){
    $dest1 = '<option value="oxford">GRENOBLE Oxford</option>';
    $dest2 = '<option value="pds">GIÈRES Plaine des Sports</option>';
}