<?php
   if(isset($_GET["id"]))
   {
        $id =$_GET["id"];
        $database="site";
        $servername="localhost";
        $user="root";
        $password="";
        $connection= new mysqli($servername, $user, $password, $database );
        $sql= "UPDATE `etudiant` SET `avertissement`= avertissement-1 where id = $id;";
        $connection->query($sql);
   }
      
header("location: /UML PROJET/retrait sanctions.php");
exit;
  ?>