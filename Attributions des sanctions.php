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
    <center><h1 class="titre1">HELLO,<h5 class="titre1">Voici la liste des élèves éligibles aux sanctions!</h5></h1></center>
   <br><a class="btn btn-danger" href="Session Admin.php">Retour</a> <a class="btn btn-dark" href="retrait sanctions.php">Retrait Sactions</a><br><br>
   
        <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>NOMS</th>
                    <th>PRENOMS</th>
                    <th>MATRICULE</th>
                    <th>CLASSE</th>
                    <th>NOMBRE D'HEURES</th>
                    <th>AVERTISSEMENT</th>
                    <th>BLAMES</th>
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
                    
                        $sql= "SELECT * FROM etudiant where nbreheures>= 10 ORDER BY nom;";
                        $result= $connection->query($sql);
                        if(!$result)
                        {
                            die("invalid query" . $connection->connect_error);
                        }
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
                                <td>$row[avertissement]</td>
                                <td>$row[blame]</td>
                                <td>
                                <a class='btn btn-dark' href='avert.php?id=$row[id]'>Avertissement</a>
                                <a class='btn btn-danger' href='blame.php?id=$row[id]'>Blâme</a>
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