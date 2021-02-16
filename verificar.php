<!DOCTYPE html>
<html style="background: #e6e6e6"> 
 <link rel="shotcut icon" href="img/mytec.png" type="image/x-png">
 <head> 
  <title>Autenticando usuário</title> 
  <meta charset = "utf-8"/>
</head> 
<body> 
   <?php 
   session_start();

$con = new PDO("mysql:host=localhost; dbname=loginservice;", "root", "");
$sql= $con->prepare("SELECT * FROM login where email=? and senha=?");
$sql->execute(array($_POST['email'], md5($_POST['senha'])));

   $row = $sql->fetchObject();


   if($row) {

 $_SESSION['usuario'] = $row;
 header("Location: home.php");

}

else { 

 header("Location: index.php");
 
} 
 ?> 
</body> 
</html>﻿