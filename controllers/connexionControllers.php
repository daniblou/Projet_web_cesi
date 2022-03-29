<?php 
require 'functions.php';
init_session_user();
require '../Database/database.php'; // On inclus le fichier de connexion 
$pdo = Database::connect(); //on se connecte à la base
$_SESSION['connexion'];

  
  if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password'])  && !empty($_POST['password']) ){
     echo '<pre>'; 
     var_dump($_POST) ;
      echo '<pre>'; 
     /* $query = $pdo->prepare('SELECT email_user, password_user FROM utlisateur INNER JOIN type_utilisateur 
      ON utlisateur.id_users = type_utilisateur.id_type_utilisateur
       WHERE email_user=:user_login AND password_user=:user_pwd');
      $query->execute([
          'user_login' =>htmlentities( $_POST['login']), 
          'user_pwd' => $_POST['password']
      ]);
      $confirm = $query->fetch();
      if($confirm){
        session_name('connexion');
        $_SESSION['login'] = $confirm->email_user;
        $_SESSION['password'] = $confirm->password_user;
        $_SESSION['connexion'] = true;
       

        header('Location: home.php');
        
      }
    
      //etudiant 
     */
  }

?>