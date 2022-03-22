<?php 
    require '../vendor/autoload.php';
   /* var_dump($_SERVER);
    $uri = $_SERVER['REQUEST_URI'];
   if($uri === '/connexion'){
       require 'connexion.php';
   }
*/
   $router = new AltoRouter();
   $router->map('GET', '/connexion', 'connexion', 'login');
   $router->map('GET', '/', 'home');
   $match = $router->match();
   if($match != null){
       require '../front/header.php';   
       if(is_callable($match['target'])){
           call_user_func_array( $match['target'], $match['params']);
       }else{
          // $params = $match['params'];
           require "{$match['target']}.php";
       }
       require '../front/footer.php';   
   }
?>
