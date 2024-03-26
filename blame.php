<?php
   if(isset($_GET["id"]))
   {
        $id =$_GET["id"];
        $database="site";
        $servername="localhost";
        $user="root";
        $password="";
        $connection= new mysqli($servername, $user, $password, $database );
        $sql= "UPDATE `etudiant` SET `blame`= blame+1 where id = $id;";
        $connection->query($sql);
   }
   header("location: /UML PROJET/Attributions des sanctions.php");
   exit;
      
  ?>