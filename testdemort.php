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

$req="SELECT * FROM oxford";
$querymerde=$connexionlignes->query($req);
//$merde=$querymerde->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <p>
    <?php foreach($merde as $tonpere){
        echo $tonpere['station'];

    }?> </p>
</body>
</html>