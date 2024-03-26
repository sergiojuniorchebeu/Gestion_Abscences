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
    <center><h1 class="titre1">HELLO,<h5 class="titre1">Voici la liste des Etudiants(cas L2D)</h5></h1></center>
   <br><a class="btn btn-danger" href="Session Admin.php">Retour</a><br><br>
   
        <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>NOMS</th>
                    <th>PRENOMS</th>
                    <th>MATRICULE</th>
                    <th>CLASSE</th>
                    <th>NOMBRE D'HEURES</th>
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
                        //requete d'affichage
                        $sql= "SELECT * FROM etudiant ORDER BY nom;";
                        $result= $connection->query($sql);
                        //si la requete ne fonctione pas  
                        if(!$result)
                        {
                            die("invalid query" . $connection->connect_error);
                        }
                        //on declare la variable row qui va recuperer la position de chaque element dans la bd pour affichage
                        
                        while($row = $result->fetch_assoc())
                        {
                            echo"
                                <tr>
                                <td></td>
                                <td>$row[nom]</td>
                                <td>$row[prenoms]</td>
                                <td>$row[matricule]</td>
                                <td>$row[classe]</td>
                                <td>$row[nbreheures]</td>
                                <td>
                                    <a class='btn btn-primary' href='ajoutreuissi.php?id=$row[id]'>Ajouter</a>
                                </td>
                                </tr>
                            ";
                        }
                    ?>
                    
                </tbody>
        </table>
</body>
<center><footer>Copyrigth-2023&copy; SergiojuniorChebeu</footer></center>
</html>