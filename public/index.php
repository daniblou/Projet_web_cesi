<?php 
require '../vendor/autoload.php';

$page = $_GET['page'] ?? '404';
require '../front/header.php';
    if($page === 'connexion'){
        require 'connexion.php';
    } else if($page === 404){
        require 'error/404.php';
    }
    require '../front/footer.php';
?>

