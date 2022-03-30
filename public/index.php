<?php 
    // Autoloader de symfony 
    require '../vendor/autoload.php';
  
    // Classe altorouter pour gérer les url 
   $router = new AltoRouter();
   $router->map('GET', '/connexion', 'connexion', 'login');
   $router->map('POST', '/connexion', 'connexion', 'ok');
   $router->map('GET', '/create', '../crud/create.view', 'create');
   $router->map('GET', '/', 'home');
   $router->map('POST', '/', 'home', 'home');
   $router->map('POST', '/valid', '../controllers/createControllers', 'createControllers');
  // $router->map('POST', '/ok', '../controllers/connexionControllers', 'connexionControllers');
   $match = $router->match();
   if($match != null){
       require '../front/header.php';   
       if( is_callable($match['target'])){
           call_user_func_array( $match['target'], $match['params']);
       }else{
           $params = $match['params'];
           require "{$match['target']}.php";
       }
       require '../front/footer.php';   
   }else{
       require ''; 
   }

?>
