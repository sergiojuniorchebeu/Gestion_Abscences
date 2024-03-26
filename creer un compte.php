<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/js/bootstrap.js">
    <link rel="stylesheet" href="assets/css/creer compte.css">
    <title>Document</title>
</head>
<body class="body">
    <center><h1 class="titre1">INSCRIPTION ETUDIANT</h1></center>
    <a href="index.html" class="btn btn-danger" type="button">Retour</a>
<div class="form1">
    <form action="inscription.php"  method="POST">
     <div class="row">
     <div class="col-md-6">
            <label>Matricule :</label><input type="text" class="form-control is-valid" name="matricule"required> 
        </div>
        <div class="col-md-6">
            <label>Noms :</label><input type="text" class="form-control is-valid" name="nom" required> 
        </div>
        <div class="col-md-6">
            <label>Prenoms :</label><input type="text" class="form-control is-valid" name="prenom"required> 
        </div>
        <div class="col-md-6">
            <label>Numero telephone :</label><input type="number" class="form-control is-valid" name="numtel" required> 
        </div>
        <div class="col-md-6"> 
            <label for="classe">Classe :</label><input type="text" class="form-control is-valid" name="classe" required>
        </div>
        <div class="col-md-6"> 
            <label for="classe">Mot de passe :</label><input type="password" class="form-control is-valid" name="mdp" required>
        </div>
        <div class="col-md-6">
            <label for="formFileMultiple" class="form-label">Envoyer vos reçus</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple required name="pieces">
          </div>
        
    </div><br><br><br>
    <center> <a href="#"><input type="submit" class="btn btn-primary" value="Envoyer" name="envoyer"></a></center>        
    </form> <br><br><br><br>
</div>
</body>
<center><footer class="pied">Copyrigth-2023&copy; SergiojuniorChebeu</footer></center>
</html>