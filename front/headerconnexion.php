<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/vendors/css/bootstrap.min.css">
    <link rel= "stylesheet" href="asset/vendors/css/connexion.css">
    <link rel="stylesheet" href="asset/vendors/fontawesome-free-6.0.0-web/css/all.min.css">
    <title>Document</title>
</head>
<body>
   
    

<body> 


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="image/logo.png" alt="" width="60" height="60" class="d-inline-block align-text-top">
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto md-flex">
        <a class="nav-link text-body " aria-current="page" href="#"><i class="fa-solid fa-magnifying-glass"></i> Accueil</a>
        <a class="nav-link text-body" href="#"><i class="fa-solid fa-phone"></i> Nous contacter</a>
        <a class="nav-link text-body" href="#"><i class="fa-solid fa-book-open"></i> A propos<a>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="<?=  $router->generate ('login');?>" role="button">Deconnexion</a>
 
        </div>
      </div>
    </div>
  </div>
</nav>
