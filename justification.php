<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/js/bootstrap.js">
    <link rel="stylesheet" href="assets/css/css1.css">
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
    $classe=$_POST['classe'];
    $date = $_POST['date'];
    $motif= $_POST['motif'];
    $sql= "INSERT INTO `justification`(`nom`, `prenom`, `matricule`, `date`, `classe`, `motif`) VALUES ('$nom','$prenom','$matricule','$date','$classe','$motif');";
    $req= $db->prepare($sql);
    $req->execute();
?>
<center> <h1> Votre DEMANDE A BIEN ETE ENVOYER</h1></center>
<a href="session Etudiant.php" class="btn btn-danger">Retour</a>