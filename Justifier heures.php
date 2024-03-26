<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/justification.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/js/bootstrap.js">
    <title>Justifier les heures</title>
</head>
<body class="body1">
    <center><h1 class="titre1">HELLO,<h5 class="titre1">Vous êtes dans la rubrique de justification des heures</h5></h1> <a class="btn btn-danger" href="Session Etudiant.php">Retour</a></center> <br>
   <br><br>
   <center><h6 class="warning">Pour Justifier vos heures,  vous devez entrer une breve description du motif de votre abscences ainsi que les pieces justificatives</h6></center><br>
    <form action="justification.php" method="POST">
     <div class="row">
        <div class="col-md-3">
            <label>Nom :</label><input type="text" class="form-control is-valid" name="nom" required pattern="[a-z A-Z 1-9]*"> 
        </div>
        <div class="col-md-3">
            <label>Prenoms :</label><input type="text" class="form-control is-valid" name="prenom"required pattern="[a-z A-Z 1-9]*"> 
        </div>
        <div class="col-md-3">
            <label>Matricule :</label><input type="text" class="form-control is-valid" name="matricule"required pattern="[a-z A-Z 1-9]*"> 
        </div>
        <div class="col-md-3">
            <label>Numero telephone :</label><input type="number" class="form-control is-valid" name="numtel" required > 
        </div>
        <div class="col-md-6">
            <label for="formFileMultiple" class="form-label">Envoyer des pieces justificatives</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple required>
          </div>
        <div class="col-md-6">
            <label for="formFileMultiple" class="form-label">Envoyer votre demande manuscrite</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple required>
          </div>
          <div class="col-md-3">
            <label>Date de justification :</label><input type="date" class="form-control is-valid" name="date"required > 
        </div>
        <div class="col-md-3">
            <label>Classe : </label><input type="text" class="form-control is-valid" name="classe"required pattern="[a-z A-Z 1-9]*"> 
        </div>
          <div class="col-md-6">
            <label>Description de votre motif d'abscences</label> :</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motif" required></textarea>
        </div>
    </div><br>
    <center> <a href="#"><button class="btn btn-primary" type="submit">Envoyer</button></a></center>        
    </form>
 </body>
 <center><footer class="pied">Copyrigth-2023&copy; SergiojuniorChebeu</footer></center>
</html>