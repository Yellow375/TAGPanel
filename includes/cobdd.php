<?php

$dbuser = 'phpsgbd';
$dbpwd = 'o9zpyiDEVoSQs9qVYdZa';
$dbinfos = 'mysql:localhost;dbname=lignes;charset=utf8';
try{
$connexionlignes = new PDO ($dbinfos,$dbuser,$dbpwd);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
/*elseif($bdd == 1) {
try{
    $connexionlignes = new PDO (
    
        'mysql:localhost;dbname=correspondances','phpsgbd','o9zpyiDEVoSQs9qVYdZa' );
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}else{
    echo 'Erreur';
}*/
?>