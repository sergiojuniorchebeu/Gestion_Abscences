<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/creer compte.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/js/bootstrap.js">
    <title>Afficher les heures</title>
</head>
<body class="body">
    <center><h1 class="titre1">HELLO,<h5 class="titre1">Voici la liste des Etudiants(cas L2D) veillez effectuer l'operation de retrait</h5></h1></center>
   <br><a class="btn btn-danger" href="Session Admin.php">Retour</a><br><br>
   <div class="container-sm-9">
        
       <h5>
       <table class="table">
                <thead>
                    <tr>
                    <th>NOMS</th>
                    <th>PRENOMS</th>
                    <th>MATRICULE</th>
                    <th>DATE</th>
                    <th>CLASSE</th>
                    <th>MOTIF D'ABSCENCES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $database="site";
                    $servername="localhost";
                    $user="root";
                    $password="";
                    $connection= new mysqli($servername, $user, $password, $database );

                        if($connection->connect_error)
                        {
                            die("connection faided" . $connection->connect_error);
                        }
                    
                        $sql= "SELECT * FROM justification ORDER BY nom;";
                        $result= $connection->query($sql);
                        if(!$result)
                        {
                            die("invalid query" . $connection->connect_error);
                        }
                        while($row = $result->fetch_assoc())
                        {
                            echo"
                                <tr>
                                <td>$row[nom]</td>
                                <td>$row[prenom]</td>
                                <td>$row[matricule]</td>
                                <td>$row[date]</td>
                                <td>$row[classe]</td>
                                <td>$row[motif]</td>
                                <td>
                                    <a class='btn btn-primary' href='requetevalider.php?matricule=$row[matricule]'>Valider</a>
                                </td>
                                </tr>
                            ";
                        }
                    ?>
                    
                </tbody>
        </table>
       </h5>
   </div>
</body>
<center><footer>Copyrigth-2023&copy; SergiojuniorChebeu</footer></center>
</html>