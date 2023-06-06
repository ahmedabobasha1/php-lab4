<?php

include './../Model/operation.php';




$name = $_POST["name"];
$email = $_POST["email"];
$password =$_POST["password"];
$confirmPassword =$_POST["confirmPassword"];
$RoomNo =$_POST["RoomNo"];

$image_tmp_name=$_FILES['img']["tmp_name"];
$image_name=$_FILES['img']["name"];

//echo($image_name);
$image_size=$_FILES['img']["size"];
//$image  = move_uploaded_file($image_tmp_name,$image_name);

 ######## find image extention ########
$extention = explode(".",$image_name);
$extention = strtolower((end($extention)));


$imgAllowedExtention =["png","jpg","jpeg"];


$errors = [];

if(!((isset($name)) &&! empty($name))){
    $errors["name"] = "name is required";
}
// && preg_match("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/",$email)
if(!(isset($email)  && filter_var($email, FILTER_VALIDATE_EMAIL))){

    $errors["email"] = "invaild email";
}
if(!(isset($password) && preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",$password))){
    $errors["password"] = "password must be StrongPassword";
}
if($password !== $confirmPassword){
    $errors["confirmPassword"] = "confirmpassword not match with Password";
}

    ######### valiadtion image extention ############# 
if(!(in_array($extention,$imgAllowedExtention))){
   $errors["img"]="this in not allowed extention";
  }
  

if(count($errors)){

    $string_errors = json_encode($errors);
    $url = "Location:./../view/register.php?errors={$string_errors}";
    header($url);

}



else{
    
   insertData($name,$email,$password,$image_name);
    
     header("location:./../view/showTable.php");


}







?> 
