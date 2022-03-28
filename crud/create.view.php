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
       
    
      <form class="needs-validation" novalidate>
   
            <div class="col-md-4 mb-3">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" required>
                <div class="valid-feedback">Ok !</div>
                <div class="invalid-feedback">Valeur incorrecte</div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prenom" required>
                <div class="valid-feedback">Ok !</div>
                <div class="invalid-feedback">Valeur incorrecte</div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="ex : roma@gmailcom" required>
                <div class="valid-feedback">Ok !</div>
                <div class="invalid-feedback">Valeur incorrecte</div>
            </div>
 
            <div class="col-md-4 mb-3">
              <label for="centre">Centre</label>
              <input type="text" class="form-control" id="centre" placeholder="Votre centre" required>
              <div class="valid-feedback">Ok !</div>
              <div class="invalid-feedback">Valeur incorrecte</div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="phone">Telephone</label>
            <input type="tel" class="form-control" id="phone" placeholder="Tel" name= "phone"   pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required>
            <div class="valid-feedback">Ok !</div>
            <div class="invalid-feedback">Valeur incorrecte</div>
        
        </div>
        <div class="col-md-4 mb-3">
          <label for="mdp">Mot de passe</label>
          <input type="password" class="form-control" id="mdp" placeholder="" required>
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
      </div><br>
       
        <button class="btn btn-primary" type="submit" style="margin-left:3cm;">Envoyer</button>
    </form>
</div>

        <script src="../asset/vendors/js/bootstrap.min.js"></script>  
        <script src="../asset/vendors/js/form_create.js"></script>
</body>
</html>