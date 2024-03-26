<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/js/bootstrap.js">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    //creation de l'outil PDO 
     $db = new PDO("mysql:host=localhost;dbname=site", 'invite', '12345');

     //recuperations des donnees du formulaire
     $login = $_POST['login'];
     $mdp= $_POST['mdp'];
     $conected=false; 
     $noaccount ="Vous n'avez pas de compte ou informations érronnées";
    
     //requete sql pour la recherche dans la table admin
     foreach ($db->query("SELECT *FROM admin ;") as $user) {
      //on recherche les infos entrés par le user dans la bd
      //si les informations sont contenus dans la bd 
        if($user['login'] == $login && $user['mdp'] == $mdp)
        {
         //redirection vers la page  des etudiants
          header("location: /UML PROJET/Session Admin.php");
          exit();
          $conected = true;
        }
     }
     foreach ($db->query("SELECT *FROM etudiant ;") as $user) {
        if($user['matricule'] == $login && $user['mdp'] == $mdp)
        {
         header("location: /UML PROJET/Session Etudiant.php");
          exit();
          $conected = true;
        }
     }
     //si les infos sont fausses
     if($conected == false){
        echo $noaccount;
        ?>
        <center> <a href="creer un compte.php" class="btn btn-primary">CLIQUEZ ICI POUR VOUS INSCRIRE</a></center>
        <br><br><br><a class="btn btn-danger" href="Login.php">Retour</a>
        <?php
     }