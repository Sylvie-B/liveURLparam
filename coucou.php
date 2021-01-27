<?php

//print_r($_GET);
//
//if(isset($_GET['tab'])){
//    $tab = json_decode(base64_decode($_GET['$tab']));
//    foreach ($tab as $value){
//        echo "<span>$value</span>&nbsp;";
//    }
//}

// on regarde si les variable existent
if(!isset($_GET['nom'], $_GET['prenom'], $_GET['age'])){
    header('location: index.php?error=1');
}

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$age = intval($_GET['age']);

if($age > 1000){
    $age = 1000;
}
elseif ($age <= 0){
    $age = 1;
}

for($i=0; $i < $age; $i++){
    echo "Bonjour $prenom $nom, valeur de \$i : $i".'<br>';
}

