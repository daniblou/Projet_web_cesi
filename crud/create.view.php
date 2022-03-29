<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      echo '</pre>';
      print_r($_POST);
      echo '</pre>';
    }
 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Formulaire d'inscription</h1>
    <header>
        <link rel="stylesheet" href="../asset/vendors/css/form_create.css">
        <link rel="stylesheet" href="../asset/vendors/css/bootstrap.min.css">
    </header><br>


    <div class="mx-auto" style="width: 1000px;">
       
    
 <form  method= "POST" action ="<?=  $router->generate ('createControllers');?>" class="needs-validation" novalidate>


            <div class="col-md-4 mb-3">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
                <div class="valid-feedback">Ok !</div>
                <div class="invalid-feedback">Valeur incorrecte</div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prenom" required>
                <div class="valid-feedback">Ok !</div>
                <div class="invalid-feedback">Valeur incorrecte</div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="Email" name="email" placeholder="ex : roma@gmailcom" required>
                <div class="valid-feedback">Ok !</div>
                <div class="invalid-feedback">Valeur incorrecte</div>
            </div>
 
            <div class="col-md-4 mb-3">
              <select class="form-select " name="centre" aria-label="Default select example">
                  <option selected>Centre</option>
                  <option value="la_rochelle">La Rochelle</option>
                  <option value="angouleme">Angouleme</option>
                  <option value="nanterre">Nanterre</option>
             </select>
            </div>
          <div class="col-md-4 mb-3">
            <label for="phone">Telephone</label>
            <input type="tel" class="form-control" id="phone" placeholder="Tel" name= "phone"   pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required>
            <div class="valid-feedback">Ok !</div>
            <div class="invalid-feedback">Valeur incorrecte</div>
        
        </div>
        <div class="col-md-4 mb-3">
          <label for="mdp">Mot de passe</label>
          <input type="password" class="form-control" name="mdp" id="mdp" placeholder="" required>
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
      </div><br>
        <div  class="col-md-4 mb-3">
          <select class="form-select " name="promotion" aria-label="Default select example">
            <option selected>Sélectionner une promotion</option>
            <option value="info">A2 Info</option>
            <option value="generaliste">A2 Généraliste</option>
            <option value="btp">A2 BTP</option>
          </select>
         </div>
         <!--  <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="administrateur" value="administrateur" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                   Administrateur 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="delegue" value="delegue" id="flexCheckChecked" checked>
                  <label class="form-check-label" for="flexCheckChecked">
                  Délégué 
                  </label>
            </div> -->
             <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="roles" id="inlineRadio1" value="pilote">
          <label class="form-check-label" for="inlineRadio1">Pilote</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="roles" id="inlineRadio2" value="etudiant">
          <label class="form-check-label" for="inlineRadio2">Etudiant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="role" id="inlineRadio3" value="delegue">
          <label class="form-check-label" for="inlineRadio3">Délégué</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="roles" id="inlineRadio3" value="administrateur">
          <label class="form-check-label" for="inlineRadio3">Administrateur</label>
        </div> 
       
       <div class="col-md-4 mb-3">
       <button class="btn btn-primary" type="submit" name="envoyer" style="margin-left:3cm;">Envoyer</button>
       </div>
</form>
</div>

        <script src="../asset/vendors/js/bootstrap.min.js"></script>  
        <script src="../asset/vendors/js/form_create.js"></script>
</body>
</html>