<?php

session_start();
if (!isset($_SESSION['usuario'])){
    header("Location: logout.php");
}
    else {
    	$id = $_SESSION['usuario']->cpf;
    }


?>
<!DOCTYPE html> 
 <link rel="shotcut icon" href="img/mytec.png" type="image/x-png">
 <head> 
  <title>Excluindo Pasta</title> 
  <meta charset = "utf-8"/>
  <script type="text/javascript"> 
 function atualizar() { 
 setTimeout ("window.location='index.php'", 6000);
 } 
 function erro() { 
 setTimeout ("window.location='editp.php'", 3000);
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
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "loginservice";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$confirmar = md5(htmlspecialchars($_POST ['confirmar']));
$senha = $_SESSION['usuario']->senha;
$senhan = md5(htmlspecialchars($_POST ['novasenha']));


if ($confirmar == $senha) {

  mysqli_query($conexao, "UPDATE login SET senha = '$senhan' WHERE cpf = '$id'");
	echo " <br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Modificações do usuario feitas com sucesso! Voce será transferido para a página de login para que suas informações sejam atualizadas. Obrigado!</h1></center>";
	echo "<script>atualizar()</script>";

}

else{
    echo " <br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Senha de confirmação incorreta!</h1></center>";
	echo "<script>erro()</script>";
 }

 ?>
</body>
</html>