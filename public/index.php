<?php 
    require '../vendor/autoload.php';
   /* var_dump($_SERVER);
    $uri = $_SERVER['REQUEST_URI'];
   if($uri === '/connexion'){
       require 'connexion.php';
   }
*/
   $router = new AltoRouter();
   $router->map('GET', '/connexion', function(){
        require 'connexion.php';
   });
   $match = $router->match();
   if($match != null){
       require '../front/header.php';   
       $match['target']();
       require '../front/footer.php';   
   }
?>
