<?php

    function BDconnectPDO() : PDO{
    try{
        return new PDO('mysql:dbname=coopcar;charset=utf8;host=localhost:3306', "user", "Respons11");
    }catch (PDOException $e){
        die("Échec de la connexion" . " : " . $e);
    }
    }
    
?>
