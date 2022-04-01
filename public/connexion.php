<?php
    require '../public/functions.php';
    init_session_user();
   $_SESSION['connexion'] == false ;
    require '../Database/database.php'; // On inclus le fichier de connexion 
    $pdo = Database::connect(); //on se connecte à la base
    if($_SERVER['REQUEST_METHOD']== 'POST'){
      if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) 
         && !empty($_POST['password']) ){
            $login = $_POST['login'];
            $passaword = $_POST['password'];
            $query = $pdo->prepare('SELECT E.id_type_user FROM etre E , utlisateur U , type_utilisateur T
            WHERE E.id_type_user = T.id_type_user AND E.id_users = U.id_users AND U.email_user=:user_login AND U.password_user=:user_pwd');
           $query->execute([
               'user_login' =>test_input($login),
               'user_pwd' => test_input(sha1($passaword))
           ]);
           $confirm = $query->fetch();
          
                      if($confirm){
                init_session_user();
                $_SESSION['login'] = $login;
                $_SESSION['password'] = $confirm->password_user;
                $_SESSION['role'] = $confirm ;
                $_SESSION['connexion'] == true ;
               
              your_rule($confirm[0]);
                       
            }
               else{
                $erreur = 'Identifiant ou mot de passe incorrect'; 
          }
    }
  }

  require '../front/header.php';   
?>
        <link rel="stylesheet" href="asset/vendors/css/sweetalert2.min.css">       
        <link rel="stylesheet" href="asset/vendors/css/connexion_copy.css">       
        <link rel="stylesheet" href="asset/vendors/css/demo.css">       
        <link rel="stylesheet" href="asset/vendors/css/material-design-iconic-font.min.css">       
        
<div class="container-login">
<?php if(is_logged()) : ?>
   <div>Bienvenue Monsieur <?= $_SESSION['login']  ?> vous êtes connecté</div>
            <?php else: ?>
        <div class="wrap-login">
        
            <form class="login-form validate-form" id="formLogin" action="<?=  $router->generate ('ok');?>" method="POST">
           
                <span class="login-form-title">LOGIN</span>
                
                <div class="wrap-input100" data-validate = "login incorrecto">
                    <input class="input100" type="text" id="login" name="login" placeholder="Idenifiant">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Mot de passe">
                    <span class="focus-efecto"></span>
                </div>
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="send" class="login-form-btn">Se connecter</button>
                        <?php  if(!empty($erreur)): ?>
                            <div class="alert alert-danger "><?= $erreur?> </div>
                            <?php endif ; ?>
                    </div>
                </div>
            </form>
        </div>
        <?php endif ; ?>
    </div>     

  <?php    ?>



 
