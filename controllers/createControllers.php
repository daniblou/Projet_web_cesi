<?php
    session_start();
    $_SESSION['succes'] = false ; 
    require '../front/header.php';
    require '../public/functions.php' ;
    require '../Database/database.php';

    $nom = $prenom = $email = $contact = $centre = $mdp = $role =  $administrateur = $delegue  = "" ;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   
    $nom = test_input($_POST['nom']);
    $prenom = test_input($_POST['prenom']);
    $email = test_input($_POST['email']);
    $centre = test_input($_POST['centre']);
    $mdp = test_input(sha1($_POST['mdp']));
    $role = test_input($_POST['roles']);
    $phone = test_input($_POST['phone']);
    $promotion = test_input($_POST['promotion']);
   
    $pdo = Database::connect(); //on se connecte à la base
    $sql = 'INSERT INTO `utlisateur`( `nom_user`, `prenom_user`, `centre_user`, `email_user`, `telephone_user`, `password_user`)
    VALUES  ( :nom, :prenom, :centre, :email, :phone, :mdp )';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'nom' => $nom ,
        'prenom' => $prenom ,
        'centre' => $centre ,
        'email' => $email ,
        'phone' => $phone ,
        'mdp' => $mdp , 
    ]);
    $_SESSION['succes'] = true ;
    $lastId = $pdo->lastInsertId();
    if(!empty($role)){
       
        $req = $pdo->prepare('INSERT INTO `etre`( `id_users`,`id_type_user`) VALUES (:lastId, :roles)');
        $req->execute([
            'lastId' => $lastId,
            'roles' => $role 
        ]);
     
    }else{

    }
    if(!empty($promotion)){
        $req = $pdo->prepare('INSERT INTO `appartenir_`( `id_promotion`,`id_users`) VALUES (:promotion, :lastId)');
        $req->execute([
            'promotion' => $promotion,
            'lastId' => $lastId 
        ]);
    }

    echo '<div class="alert alert-success"> <h3> Le compte a été creer avec succes </h3> </div>';
    echo '<a class="btn btn-success" href="'.  $router->generate ('read') .'">OK</a>';
}

require '../front/foot.php';


