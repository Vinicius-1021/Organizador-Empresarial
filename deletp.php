<!DOCTYPE html> 
 <link rel="shotcut icon" href="img/mytec.png" type="image/x-png">
 <head> 
  <title>Excluindo Usuario</title> 
  <meta charset = "utf-8"/>
  <script type="text/javascript"> 
 function delet() { 
 setTimeout ("window.location='index.php'", 2000);
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

$cpf = $_SESSION['usuario']->cpf;

if (mysqli_query($conexao, "DELETE FROM login WHERE cpf = '$cpf'")) {
	echo " <br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Usuario deletado com sucesso!</h1></center>";
	echo "<script>delet()</script>";
}
else{
    echo " <br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Usuario não encontrado!</h1></center>";
	echo "<script>delet()</script>";
 }

 ?>
</body>
</html>

