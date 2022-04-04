<?php  require '../front/header.php'  ?>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
        <div class="card" style="width: 18rem;">
           <a href=""> <img src="image/permission1.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">GESTION DES PERMISSIONS</p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card" style="width: 18rem;">
           <a href=""> <img src="image/pilote.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">GESTION DES PILOTES</p>
            </div>
            </div>
         </div>
            <div  class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="width: 18rem;">
           <a href="<?= $router->generate('entreprise_crud') ?>"> <img src="image/ent.jpeg" class="card-img-top" alt="..." disable></a>
            <div class="card-body">
                <p class="card-text">GESTION DES ENTREPRISES</p>
            </div>
            </div>
        </div>
        <div  class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="width: 18rem;">
            <a href="<?= $router->generate('read')?>"><img src="image/etudiant.webp" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">GESTION DES ETUDIANTS </p>
            </div>
            </div>
        </div>
        <div  class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="width: 18rem;">
           <a href=""> <img src="image/stage_1.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">GESTION DES STAGES</p>
            </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
        <div class="card" style="width: 18rem;">
        <img src="image/offre.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">GESTION DES OFFRES</p>
        </div>
        </div>
        </div>
        
    </div>

</div>

<?php  require '../front/foot.php'  ?>
















<?php  require '../front/fooot.php'  ?>