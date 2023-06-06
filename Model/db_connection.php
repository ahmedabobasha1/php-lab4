<?php


# 1- set connection credits



function connect_to_database($dbuser,$dbpassword,$dbname,$dbhost,$dbport){
    try{

        $dsn = "mysql:dbname={$dbname};host={$dbhost};port={$dbport}";
    
       $conn = new PDO($dsn,$dbuser,$dbpassword);
       // to show error
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        if($conn){
           return$conn;
        }
        return false;
    }
    catch(PDOException $e){
    
        echo "Connection field".$e->getMessage();
    }
}



//connect_to_database($dbuser,$dbpassword,$dbname,$dbhost,$dbport);



?>