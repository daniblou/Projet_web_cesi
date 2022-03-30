<?php 
require 'functions.php';
init_session_user();
require '../public/functions.php';
require '../Database/database.php'; // On inclus le fichier de connexion 
$pdo = Database::connect(); //on se connecte à la base
$_SESSION['connexion'];

if(isset($_POST['send'])){
    
   // $login = $_POST['login'];
  //   $passaword = $_POST['password'];

  if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) 
         && !empty($_POST['password']) ){

    var_dump($_POST);
  
    /*  $query = $pdo->prepare('SELECT E.id_type_user FROM etre E , utlisateur U , type_utilisateur T
       WHERE E.id_type_user = T.id_type_user AND E.id_users = U.id_users AND U.email_user=:user_login AND U.password_user=:user_pwd');
      $query->execute([
          'user_login' =>test_input($login),
          'user_pwd' => test_input($passaword)
      ]);
      $confirm = $query->fetch();
      var_dump($confirm);

      if(password_verify($passaword, $confirm->password_user)){
                echo 'OK';
      }
      else{
          echo 'non';
      }
      if($confirm){
        session_name('connexion');
        $_SESSION['login'] = $confirm->email_user;
        $_SESSION['password'] = $confirm->password_user;
        $_SESSION['connexion'] = true;
       
            echo 'OK';

       // header('Location: home.php');
        
      } */
    
      //etudiant 
     
  }
}

?>