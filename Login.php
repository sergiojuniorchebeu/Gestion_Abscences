<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="assets/css/css1.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/js/bootstrap.js">
<body class="body1">
    
   <div class="box">
    <span>
        <br>
        <center><h4>CONNEXION</h4></center> 
        <center><img src="assets/images/logoiai.jfif" alt="logoiai" class="rounded float" width="80px" height="70px"></center>
        <form method="POST" action="verification.php">
            <div class="form-group">
                <label for=”LOGIN”>LOGIN :</label>
               <center> <input type="text" class="form-control" placeholder="Entrez votre Login" id="LOGIN" pattern="[a-z A-Z 1-9]*" name="login" required></center>
            </div><br>
            <div class="form-group">
                <label for=”Motdepasse”>MOT DE PASSE :</label>
                <input type="password" class="form-control" placeholder="Mot de passe" id="MDP" pattern="[a-z A-Z 1-9 # @]*" name="mdp" required>
                <center><input type="submit" value="Connexion" class="btn btn-primary" name="envoyer"></center>
            </div>
            
            
            <a href="creer un compte.php" class="lien2">Créer un Compte</a>
        </form>
    </span>
   </div>
</body>
<center><footer>Copyrigth-2023&copy; SergiojuniorChebeu</footer></center>
</html>