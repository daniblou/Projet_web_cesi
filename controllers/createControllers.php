<?php
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
    $sql2 = 'INSERT INTO `type_utilisateur`(`role_user`) VALUES (:roles)';
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute(['roles'=> $role]);

    $sql3 = 'INSERT INTO `promotion`(`nom_promotion`) VALUES (:promotion)';
    $stmt3 = $pdo->prepare($sql3);
    $stmt3->execute(['promotion']);
    $pdo = Database::disconnect();
    echo " l'utilisateur  $nom  a été enregistré avec succes " ;
}


