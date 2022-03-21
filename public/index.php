<?php 
require '../vendor/autoload.php';

$page = $_GET['page'] ?? '404.php';
require '../front/header.php';
    if($page === 'contact.php'){
        require 'contact.php';
    } else if($page === 404){
        require 'error/404.php';
    }
    require '../front/footer.php';
?>

