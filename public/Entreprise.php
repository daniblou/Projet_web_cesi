<?php  require '../front/header.php'  ?>
       
        <link rel="stylesheet" href="asset/vendors/css/entreprise.css">
    </header>
    <div class="container">
        <h1>Formulaire d'entreprise</h1><br>

        <main>
        <form class="needs-validation" novalidate>
            
                  <div class="form-group">
                    <label for="nom">Nom entreprise</label>
                    <input type="text" class="form-control" id="nom" placeholder="" name="nom">
                  </div>
                  
                  <div class="form-group">
                    <label for="Secteur">Secteur d'activité</label>
                    <input type="text" class="form-control" id="Secteur" placeholder="" name="Secteur d'activité">
                  </div>
                  
                  <div class="form-group">
                    <label for="Ville">Ville</label>
                    <input type="text" class="form-control" id="Ville" placeholder="" name="Ville">
                  </div>
                  <div class="form-group">
                    <label for="Rue">Rue</label>
                    <input type="text" class="form-control" id="Rue" placeholder="" name="Rue">
                  </div>

                  <div class="form-group">
                    <label for="cp">Code postal</label>
                    <input type="text" class="form-control" id="cp" placeholder="" name="cp" >
                  </div>
                  

                  
                  <div class="form-group">
                    <label for="nombre">Nombre de stagiaire acceptés</label>
                    <input type="number " class="form-control" id="nombre" placeholder="" name="Nombre de stagiaire acceptés">
                  </div>
                  
 

                <div class="form-group">
                    <label for="bio">Description</label>
                    <textarea class="form-control" id="bio" rows="3"></textarea>
                  </div>
        
              <div>
                <div>Confiance du pilote </div>  
             <div class="rating"><!--
                --><a href="#5" title="Donner 5 étoiles">☆</a><!--
                --><a href="#4" title="Donner 4 étoiles">☆</a><!--
                --><a href="#3" title="Donner 3 étoiles">☆</a><!--
                --><a href="#2" title="Donner 2 étoiles">☆</a><!--
                --><a href="#1" title="Donner 1 étoile">☆</a>
             </div>
             </div>
          
            <button class="btn btn-primary" type="submit">Envoyer</button>
            
        </form>
        <a href="<?=  $router->generate('gestion')?>" class="btn btn-success">Retour</a>
      </main>
      <?php  require '../front/foot.php'  ?>