<!DOCTYPE html> 
 <link rel="shotcut icon" href="img/mytec.png" type="image/x-png">
 <head> 
  <title>Criando Usuario</title> 
  <meta charset = "utf-8"/>
  <script type="text/javascript"> 
 function creat() { 
 setTimeout ("window.location='perfil.php'", 2000);
 } 
  function falled() { 
 setTimeout ("window.location='perfil.php'", 4000);
 }
 </script>
</head> 
<style>
	body,html{
		background-color: #e6e6e6;
	}
</style>
<body> 
	<?php
	session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "loginservice";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);


$nome =  htmlspecialchars($_POST ['nomen']);

$cpf = htmlspecialchars($_POST ['cpfn']);

$email = htmlspecialchars($_POST ['emailn']);

$senha =  md5(htmlspecialchars($_POST ['senhan']));

$query = "INSERT INTO login(cpf, nome, email, senha)
	      VALUES('$cpf', '$nome', '$email', '$senha')";

$executar = mysqli_query($conexao, $query);

if ($executar) {
	echo " <br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Usuario cadastrado com sucesso!</h1></center>";
	echo "<script>creat()</script>";
} 

else{
echo "<br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Por Favor verifique se todos os campos estão preenchidos e se o usuario já não esta cadastrado. Obrigado!</h1></center>";
	echo "<script>falled()</script>";
}
  ?>
</body>
</html>