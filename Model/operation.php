<?php
include 'connection_credits.php';
include 'db_connection.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


    
$conn = connect_to_database($dbuser,$dbpassword,$dbname,$dbhost,$dbport);

function select(){

    global $conn;

   try{

    $quary ="select * from `users`.`usersData`";
    $stmt = $conn->prepare($quary);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows ; 


   }catch(Execption $e){

    echo 'field to select'.$e->getMessage();

   }

}

//select();


function insertData($name,$email,$password,$image){

    global $conn;

    try{
        $quary = "insert into `users`.`usersData` (name,email,password,image)values(?,?,?,?)";

        $stmt =$conn->prepare($quary);

        $stmt->execute([$name,$email,$password,$image]);

        //    $quary = "insert into `users`.`usersData` (`name`,`email`,`password`,`image`)
        //  values(:name,:email,:password,:image);";
        // $stmt = $conn->prepare($quary);
        // $stmt->bindParam(":name",$name);
        // $stmt->bindParam(":email",$email);
        // $stmt->bindParam(":password",$password);
        // $stmt->bindParam(":image",$image);
        // $stmt->execute();    
        ## check it's insert or no 

    }catch(Execption $e){

      return 'field to select';
    
       }

}

function select_user_by_id($id){
    global $conn;
    $quary = "select * from `users`.`usersData` where id =?";

    $stmt =$conn->prepare($quary);

    $stmt->execute([$id]);
    $row =$stmt->fetch(PDO::FETCH_ASSOC);
    return $row;

}


function update($name,$email,$password,$image,$id){
    global $conn;
    $quary = "update `users`.`usersData` set
    `name` = :username,
    `email`= :useremail,
   `password` = :userpassword,
    `image` = :userimage
    where `id` = :userid

    ";

   

      $stmt = $conn->prepare($quary);
        $stmt->bindParam(":username",$name);
        $stmt->bindParam("useremail",$email);
        $stmt->bindParam(":userpassword",$password);
        $stmt->bindParam(":userimage",$image);
        $stmt->bindParam(":userid",$id);
        $stmt->execute();    


         // $stmt =$conn->prepare($quary);

    // $stmt->execute([$name,$email,$password,$image,$id]);
   

}


function delete($id){
    global $conn;

    try{

    $quary = "delete from `users`.`usersData` where id =?";
   $stmt= $conn->prepare($quary);
    $stmt->execute([$id]);

    }catch(Execption $e){

    return 'field to delete';
  
     }
}




















?>
