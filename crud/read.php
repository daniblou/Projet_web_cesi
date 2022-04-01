<?php  
          require '../front/header.php'; 
          require '../public/functions.php';
            session_start();
            
            if(!isset($_SESSION['login'])){
                header('location: /connexion');
                exit();
            }
          require '../Database/database.php';//on inclut notre fichier de connection 
          $pdo = Database::connect(); //on se connecte à la base
          $sql = 'SELECT `nom_user`,`nom_user`, `prenom_user`, `centre_user`, `email_user`, `telephone_user`, `nom_promotion`,`password_user`, `role_user`
          FROM utlisateur U, type_utilisateur T, etre E, promotion P, appartenir_ A
           WHERE E.id_type_user= T.id_type_user AND E.id_users= U.id_users AND A.id_promotion= P.id_promotion AND A.id_users=U.id_users'; //on formule notre requete 
          $cook = $pdo->query($sql, PDO::FETCH_ASSOC);
         $req = $cook->fetchAll(); 
        
?>

<div class="container">
<div class="row">
<h2>Gestion des utilisateurs</h2>

</div>
<div class="row">           
     <a href="<?=  $router->generate ('create');?>" class="btn btn-primary">Ajouter un utilisateur </a>
<div class="table-responsive">
<table class="table table-hover table-bordered">
    <thead>
<th>Nom </th>
<th>Prenom</th>
<th>Email</th>
<th>Centre</th>
<th>Téléphone</th>
<th>Promotion</th>
<th>Mot de passe</th>
<th>rôle</th>

</thead>

<br />
<tbody>
     <?php
       
      foreach ( $req as $row) { 
          //on cree les lignes du tableau avec chaque valeur retournée
                            $tab = $row['id_users'];
                            echo '<tr>';
                            echo'<td>' . $row['nom_user'] . '</td>';
                            echo'<td>' . $row['prenom_user'] . '</td>';
                            echo'<td>' . $row['email_user'] . '</td>';
                            echo'<td>' . $row['centre_user'] . '</td>';
                            echo'<td>' . $row['telephone_user'] . '</td>';
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