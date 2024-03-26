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

$db = new PDO("mysql:host=localhost;dbname=site", 'root', '');
    $matricule=$_POST['matricule'];
    $nom= $_POST['nom'];
    $prenom=$_POST['prenom'];
    $mdp =$_POST['mdp'];
    $classe=$_POST['classe'];
    $sql= "INSERT INTO `etudiant`(`nom`, `prenoms`, `matricule`, `mdp`, `classe`) VALUES ('$nom','$prenom','$matricule','$mdp','$classe');";
    $req= $db->prepare($sql);
    $req->execute();
?>
<a href="Login.php" class="btn btn-primary">CLIQUEZ ICI POUR VOUS CONNECTER</a>