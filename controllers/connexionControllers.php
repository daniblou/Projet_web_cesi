<?php 
require 'functions.php';
init_session_user();
require '../public/functions.php';
require '../Database/database.php'; // On inclus le fichier de connexion 
$pdo = Database::connect(); //on se connecte à la base
$_SESSION['connexion'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $login = $_POST['login'];
     $passaword = $_POST['password'];

  if (isset($login) && !empty($login) && isset($passaword)  && !empty($passaword) ){
      $query = $pdo->prepare('SELECT email_user, password_user FROM utlisateur INNER JOIN type_utilisateur 
      ON utlisateur.id_users = type_utilisateur.id_type_utilisateur
       WHERE email_user=:user_login AND password_user=:user_pwd');
      $query->execute([
          'user_login' =>test_input( $login),
          'user_pwd' => test_input($passaword)
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
     
  }
}

?>