<?php

require '../app/Autoloader.php';
App\Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}

// Initialisation des données
$db = new \App\Database('website');

ob_start();
if($p === 'home'){
    require '../pages/home.php';
}elseif($p === 'article'){
    require '../pages/single.php';
}   
$content = ob_get_clean();

require '../pages/templates/default.php';