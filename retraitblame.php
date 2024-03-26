<?php
   if(isset($_GET["id"]))
   {
        $id =$_GET["id"];
        $database="site";
        $servername="localhost";
        $user="invite";
        $password="12345";
        $connection= new mysqli($servername, $user, $password, $database );
        $sql= "UPDATE `etudiant` SET `blame`= blame-1 where id = $id;";
        $connection->query($sql);
   }
   header("location: /UML PROJET/retrait sanctions.php");
   exit;
      
  ?>