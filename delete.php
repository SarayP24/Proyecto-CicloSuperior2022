<?php


include("function.php");
$id = $_GET['id'];
delete('contacto','id',$id);
header("location:login.php");


?>