<?php
include './../Model/operation.php';
//var_dump($_GET);
// echo "<pre>";
// var_dump($_POST);
// $image_tmp_name=$_FILES['img']["name"];
// var_dump($image_tmp_name);
// echo "</pre>";

$id = $_GET["id"];
$name=$_POST["name"];
$email =$_POST["email"];
$password = $_POST["password"];
$image =$_FILES['img']["name"];



if($id){
    $res =update($name,$email,$password,$image,$id);
    header("location:./../view/showTable.php");
}
?>