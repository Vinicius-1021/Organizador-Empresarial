<!DOCTYPE html> 
 <link rel="shotcut icon" href="img/mytec.png" type="image/x-png">
 <head> 
  <title>Criando Pasta</title> 
  <meta charset = "utf-8"/>
  <script type="text/javascript"> 
 function creat() { 
 setTimeout ("window.location='hospedando.php'", 2000);
 } 
  function falled() { 
 setTimeout ("window.location='hospedando.php'", 4000);
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
$database = "clienteservice";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);


$nome =  htmlspecialchars($_POST ['nome']);

$empresa = htmlspecialchars($_POST['empresa']); 

$telefone = htmlspecialchars($_POST['telefone']);

$contato = htmlspecialchars($_POST['contato']); 

$endereco = htmlspecialchars($_POST['endereco']);

$cnpj = htmlspecialchars($_POST['cnpj']);

$site = htmlspecialchars($_POST['site']);

$email = htmlspecialchars($_POST['email']);

$cep =htmlspecialchars($_POST['cep']);

$query = "INSERT INTO cliente(empresa, nome, telefone, contato, email, endereco, site, cnpj, cep)
	      VALUES('$empresa', '$nome', '$telefone', '$contato', '$email', '$endereco', '$site', '$cnpj', '$cep')";

$executar = mysqli_query($conexao, $query);

if ($empresa != null && $executar) {
	mkdir('Propostas/'.$empresa);
	echo "<script>parent.document.getElementById('empresa').value'';</script>";
	echo " <br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Cliente cadastrado com sucesso!</h1></center>";
	echo "<script>creat()</script>";
} 

else{
echo "<br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Por Favor verifique se todos os campos estão preenchidos e se o usuario já não esta cadastrado. Obrigado!</h1></center>";
	echo "<script>falled()</script>";
}
  ?>
</body>
</html>
