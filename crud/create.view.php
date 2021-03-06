<?php
    require '../Database/database.php';
    require '../public/functions.php';
    $pdo = Database::connect();
    require '../front/header.php';   
?>



    <h1>Formulaire d'inscription</h1>
    <header>
        <link rel="stylesheet" href="../asset/vendors/css/form_create.css">
        <link rel="stylesheet" href="../asset/vendors/css/bootstrap.min.css">
    </header><br>


    <div class="mx-auto" style="width: 1000px;">
       
    
 <form  method= "POST" action ="<?=  $router->generate ('createControllers');?>" class="needs-validation" novalidate>


            <div class="col-md-4 mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
                <div class="valid-feedback">Ok !</div>
                <div class="invalid-feedback">Valeur incorrecte</div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prenom" required>
                <div class="valid-feedback">Ok !</div>
                <div class="invalid-feedback">Valeur incorrecte</div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="Email" class="form-label">Email</label>
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
                  <option value="Saint Nazaire">Saint Nazaire</option>
                  <option value="Lyon">Lyon</option>
                  <option value="Nice">Nice</option>
                  <option value="Toulouse">Toulouse</option>
                  <option value="Reims">Reims</option>
                  <option value="Nante">Nante</option>
             </select>
            </div>
          <div class="col-md-4 mb-3">
            <label for="phone" class="form-label">Telephone</label>
            <input type="phone" class="form-control" id="phone" placeholder="Tel" name= "phone"   pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required>
            <div class="valid-feedback">Ok !</div>
            <div class="invalid-feedback">Valeur incorrecte</div>
        
        </div>
        <div class="col-md-4 mb-3">
          <label for="mdp" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" name="mdp" id="mdp" placeholder="" required>
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
      </div><br>
        <div  class="col-md-4 mb-3">
        <span class="form-label">Promotion</span>
          <select class="form-select " name="promotion" aria-label="Default select example">
            <?php 
                   $promotion = test_input($_POST['promotion']);
                   $sql = $pdo->prepare( 'SELECT * FROM promotion ');
                   $sql->execute();
                   foreach($sql as $item){
                   echo "<option value='".$item['id_promotion']."'>".$item['nom_promotion']."</option>";
                   }     
            ?>
          </select>
         </div>
          <div class="form-check">
          <?php 
                   $role = test_input($_POST['roles']);
                   $sql = $pdo->prepare( 'SELECT * FROM type_utilisateur');
                   $sql->execute();
                   foreach($sql as $item){ 
                  echo '  <input class="form-check-input" type="checkbox" name="roles" value="'.$item['id_type_user'].'" id="flexCheckChecked" >
                  <label class="form-check-label" for="flexCheckChecked">
                  '.$item['role_user'].'
                  </label> 
                  </div>';
                    
                   }   
                  
              ?>
           </div> 
       
       <div class="col-md-4 mb-3">
       <button class="btn btn-primary" type="submit" name="envoyer" style="margin-left:3cm;">Envoyer</button>
       </div>
</form>
</div>

        <script src="../asset/vendors/js/bootstrap.min.js"></script>  
        <script src="../asset/vendors/js/form_create.js"></script>
        <?php   require '../front/foot.php';  ?>