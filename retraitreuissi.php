<?php
   if(isset($_GET["id"]))
   {
        $id =$_GET["id"];
        $database="site";
        $servername="localhost";
        $user="invite";
        $password="12345";
        $connection= new mysqli($servername, $user, $password, $database );
        $sql= "UPDATE `etudiant` SET `nbreheures`= nbreheures-2 where id = $id;";
        $connection->query($sql);
        header("location: /UML PROJET/retraits heures.php");
        exit;
   }
?>
