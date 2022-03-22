<?php 
require '../vendor/autoload.php';

$page = $_GET['page'] ?? '404';
//require '../front/header.php';
    if($page === 'connexion'){
        require 'connexion.php';
    } else if($page === 'passoublier'){
        require 'passoublier.php';
    }
  //  require '../front/footer.php';
?>

