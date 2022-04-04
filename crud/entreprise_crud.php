<?php  require '../front/header.php'  ;
  
          require '../public/functions.php';
            session_start();
        
          require '../Database/database.php';//on inclut notre fichier de connection 
          $pdo = Database::connect(); //on se connecte à la base
          $sql = 'SELECT  `nom_entreprise`, `secteur_act_entreprise`, `nbre_stagiaire_accepte`, `evaluation_stagiare`, `confiance_pilote`
           FROM `entreprise` '; //on formule notre requete 
          $cook = $pdo->query($sql, PDO::FETCH_ASSOC);
         $req = $cook->fetchAll(); 
        
?>

<div class="container">
<div class="row">
<h2>Gestion des entreprises</h2>

</div>
<div class="row">           
     <a href="<?=  $router->generate ('entreprise   ');?>" class="btn btn-primary">Ajouter une entreprise </a>
<div class="table-responsive">
<table class="table table-hover table-bordered">
    <thead>
<th>Nom de l'entreprise </th>
<th>Secteur d'activité</th>
<th>Ville</th>
<th>Rue</th>
<th>Code Postal</th>
<th>Nombre de stagiares acceptés</th>
<th>Description</th>
<th>Confiance du pilote</th>

</thead>

<br />
<tbody>
     <?php
       
      foreach ( $req as $row) { 
          //on cree les lignes du tableau avec chaque valeur retournée
                            $tab = $row['id_users'];
                            echo '<tr>';
                            echo'<td>' . $row['nom_entreprise'] . '</td>';
                            echo'<td>' . $row['secteur_act_entreprise'] . '</td>';
                            echo'<td>' . $row['nbre_stagiaire_accepte'] . '</td>';
                            echo'<td>' . $row['evaluation_stagiare'] . '</td>';
                            echo'<td>' . $row['confiance_pilote'] . '</td>';
                            echo'<td>' . $row['nom_promotion'] . '</td>';
                            echo'<td>' . $row['password_user'] . '</td>';
                            echo'<td>' . $row['role_user'] . '</td>';
                  echo '<td>';
                  echo '<a class="btn btn-primary" href="crud/edit.php?NoPil=' . $row['id_users'] . '">Read</a>';// un autre td pour le bouton d'edition
            echo '</td><p>';
             echo '<td>';
      echo '<a class="btn btn-success" href="'.  $router->generate('update', ['id']).' = '.$row['id_users'].'">Update</a>';// un autre td pour le bouton d'update
       echo '</td><p>';
           echo'<td>';
          echo '<a class="btn btn-danger" href="crud/delete.php?NoPil=' . $row['id_users'] . ' ">Delete</a>';// un autre td pour le bouton de suppression
          echo '</td><p>';
     echo '</tr><p>';
             }
             Database::disconnect(); //on se deconnecte de la base                
   ?>    
  
</tbody>
</table>
</div>
</div>
</div>
            
<?php  require '../front/foot.php';  ?>