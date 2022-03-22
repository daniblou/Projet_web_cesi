<?php 
require '../vendor/autoload.php';
$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();
$router->map('GET','/','home');
$router->map('GET','/nous-contacter',function(){
    echo 'contact';
});
$router->map('GET','/article/[*:slug]-[i:id]',function($slug , $id){
    echo 'bon voyage';
});
$match = $router->match();

<<<<<<< HEAD
$page = $_GET['page'] ?? '404';
require '../front/header.php';
    if($page === 'connexion'){
        require 'connexion.php';
    } else if($page === 404){
        require 'error/404.php';
    }
    require '../front/footer.php';
=======
if ($match != null){
    if(is_callable($match['target'])){
        call_user_func_array($match['target'], $match['params']); 
        
    }
  
}
>>>>>>> 5f1c1b1380f087f920c286d3eb9cb21051d34c39
?>


