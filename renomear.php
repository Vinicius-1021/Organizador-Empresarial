<?php

session_start();
if (!isset($_SESSION['usuario'])){
    header("Location: logout.php");
}

?>
<!DOCTYPE html> 
 <link rel="shotcut icon" href="img/mytec.png" type="image/x-png">
 <head> 
  <title>Excluindo Pasta</title> 
  <meta charset = "utf-8"/>
  <script type="text/javascript"> 
 function edit() { 
 setTimeout ("window.location='hospedando.php'", 3000);
 } 
 function erro() { 
 setTimeout ("window.history.back();", 3500);
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
$database = "clienteservice";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$pasta = "Propostas/" .$_POST['novaempresa'];
$dir = "Propostas/" .$_POST['empresa'];
$empresa = htmlspecialchars($_POST ['empresa']);
$nempresa = htmlspecialchars($_POST ['novaempresa']);
$nome = htmlspecialchars($_POST ['novonome']);
$telefone = htmlspecialchars($_POST ['novotelefone']);
$contato = htmlspecialchars($_POST ['novocontato']);
$email = htmlspecialchars($_POST ['novoemail']);
$endereco = htmlspecialchars($_POST ['novoendereco']);
$site = htmlspecialchars($_POST ['novosite']);
$cnpj = htmlspecialchars($_POST ['novocnpj']);
$cep = htmlspecialchars($_POST ['novocep']);
$confirmar = md5(htmlspecialchars($_POST ['confirmar']));
$senha = $_SESSION['usuario']->senha;


if (rename($dir,$pasta) && $confirmar == $senha) {

	mysqli_query($conexao, "UPDATE cliente SET empresa = '$nempresa', nome = '$nome', telefone = '$telefone', contato = '$contato', email = '$email', endereco = '$endereco', site = '$site', cnpj = '$cnpj', cep = '$cep'  WHERE empresa = '$empresa'");
	echo " <br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Modificações do cliente feitas com sucesso!</h1></center>";
	echo "<script>edit()</script>";

}
else{
    echo " <br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Verifique se todos os campos foram preechidos e se a senha digitada está correta</h1></center>";
	echo "<script>erro()</script>";
 }

 ?>
</body>
</html>