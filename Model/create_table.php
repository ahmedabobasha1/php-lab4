<?php


include 'connection_credits.php';
include 'db_connection.php';

$conn = connect_to_database($dbuser,$dbpassword,$dbname,$dbhost,$dbport);
try{
   
   $stmt = "create table `users`.`usersData`(
    
    `id` int primary key auto_increment,
    `name` char(50) unique ,
    `email` varchar(50) unique not null,
    `password` char(50) not null unique,
    `image` varchar(50) ,
    `created_at` timestamp default CURRENT_TIMESTAMP,
    `updated_at` timestamp default CURRENT_TIMESTAMP
    )
        ";
    //var_dump($stmt);
      $result =   $conn->query($stmt);

      var_dump($result);

} catch(PDOException $e){
    
    echo "field".$e->getMessage();
}



?>