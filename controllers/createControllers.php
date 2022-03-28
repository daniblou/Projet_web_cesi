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
    $mdp = test_input($_POST['mdp']);
    $role = test_input($_POST['role']);
    $phone = test_input($_POST['phone']);
    $promotion = test_input($_POST['promotion']);

    echo '</pre>';
    print_r($_POST);
    echo '</pre>';
    
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
}