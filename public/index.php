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


if ($match != null){
    if(is_callable($match['target'])){
        call_user_func_array($match['target'], $match['params']); 
        

    }

}
?>

dfgdfg
