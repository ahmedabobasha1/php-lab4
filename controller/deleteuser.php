<?php
include './../Model/operation.php';

$id = $_GET["id"];



if($id){
    $res =delete($id);
    header("location:./../view/showTable.php");
}
?>