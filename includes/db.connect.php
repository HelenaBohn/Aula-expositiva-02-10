<?php

    $severname = "localhost";
    $usename = "root";
    $password = "root";
    $dbname = "banco_hash";

    try{
         $conn = new PDO("mysql: host=$severname;dbname=$dbname"
         $username,$password);

         $conn -> setAtribute(PDO: : ATTR_ERRMODE, PDO: :ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo "conexão falhou, erro: " . $e->getMessage();

        }
       

?>        
    