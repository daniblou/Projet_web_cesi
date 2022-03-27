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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="asset/vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/vendors/css/connexion.css">
    <title>page de connexion</title>
</head>
<body>
<section class="vh-100">
<div class="container py-5 h-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0"><img src="image/logo.png" alt=""></span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form  method="POST" action="" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="email" id="form2Example18" name="login" class="form-control form-control-lg" />
              <label class="form-label"  for="form2Example18">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password"   name="password" id="form2Example28" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" name="send" type="submit">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>

          </form>
          
        </div>

</div>
<div class="col-sm-6 px-0 d-none d-sm-block">

</div>
</div>
</div>
</div>
</section>


        </div>

      </div>
<script src="asset/vendors/js/bootstrap.min.js"></script>
</body>
</html>  
