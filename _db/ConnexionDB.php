<?php
  // Déclaration d'une nouvelle classe
  //  class connexionDB {
     $host    = 'localhost';  // nom de l'host  
     $dbname    = 'site1';    // nom de la base de donnée
     $user    = 'root';       // utilisateur 
     $pass    = ''; 
     
    //  create connection
     $conn = new mysqli($host, $user, $pass, $dbname);

    //  check connection

    if($conn->connect_error){
     die("Connection failed: "
     . $conn->connect_error);
    }
    
   //else{
     //echo"Connection succesfull";
  // }


  
     
?>


