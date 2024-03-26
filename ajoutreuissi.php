<?php
//une fois la position récuperer [l'id]
   if(isset($_GET["id"]))
   {
        $id =$_GET["id"];//recuperation
        $database="site";
        $servername="localhost";
        $user="root";
        $password="";
        $connection= new mysqli($servername, $user, $password, $database );
        $sql= "UPDATE `etudiant` SET `nbreheures`= nbreheures+2 where id = $id;";//requete d'ajout d'heures 
        $connection->query($sql);
   }
   header("location: /UML PROJET/Ajouter heures.php");
   exit;    
      
  ?>