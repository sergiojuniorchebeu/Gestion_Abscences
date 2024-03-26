<?php
   if(isset($_GET["id"]))
   {
        $id =$_GET["id"];
        $database="site";
        $servername="localhost";
        $user="root";
        $password="";
        $connection= new mysqli($servername, $user, $password, $database );
        $sql= "UPDATE `etudiant` SET `nbreheures`= nbreheures-2 where id = $id;";
        $connection->query($sql);
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/ajouter heures.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/js/bootstrap.js">
    <title>Document</title>
</head>
<body>
<center><h1>GOOD !<h5>OPERATIONS REUISSI</h5></h1></center>
   <br><a class="btn btn-danger" href="requetes.php">Retour</a> 
</body>
</html>