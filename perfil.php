<?php

session_start();
if (!isset($_SESSION['usuario'])){
    header("Location: logout.php");
}
 else{
 	$cpf = $_SESSION['usuario']->cpf;
 	$usuario = $_SESSION['usuario']->nome;
 	$email = $_SESSION['usuario']->email;
 	$senha = $_SESSION['usuario']->senha;
 	

 }
?>

<!DOCTYPE html>
<html lang="en">
<link rel="shotcut icon" href="img/mytec.png" type="image/x-png">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <title>Empresa</title>
</head>
<style>
html,body{
	background-color: #e6e6e6;
	color: black;
}
	#conteudo{
                    width: 1100px;
                    background-color: rgb(255,255,255);
                    margin: auto;
                    border-radius: 20px 20px 20px 20px;
                    padding: 10px;
                    height:  100%;}

                    a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
  font-weight:bold;

}

 #barra {
  background-color: #ff9900;
  position: fixed;
  top: 0;
  width: 100%;
  display: block;
  transition: top 0.3s;
  z-index: 1;
}

#barra a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
}

#barra a:hover {
  background-color: #ffb84d;
}

link {
	color: black;
}
 </style>

	<nav id ="barra"> 
  <a href="home.php" style="width: 150px;"><img src="img/home.png" style="width: 27px">  Home </a>
  <a href="clientes.php" style="width: 150px;"><img src="img/cliente.png" style="width: 27px">  Clientes </a>
  <a href="hospedando.php" style="width: 200px"><img src="img/iconep.png" style="width: 23px">  Editar clientes </a>
  <a href="perfil.php" style="position: absolute; left:1000px; color: white; font-weight:bold; "><img src="img/perfil.png" style="width: 27px"><?php
echo $usuario;
    ?></a>
  <a href="logout.php" style="width: 200px; position: absolute; left:1200px;"><img src="img\sair.png" style="width: 30px; position: absolute; left:1250px; position: fixed;"> Sair </a>
</nav>

<body style="padding-top: 10px;">		

	<br><br><br>
	 <div id="conteudo">
<div class="row">
	<div class="col-sm-8">
	 	<h2>Informações do Usuario</h2>
	 </div>
	 <div class="col-sm-4">
	 	<br><br>

	 <a href="editp.php" style="position: absolute; left: -380px; font-weight:bold; text-decoration: underline"><img src="img/editar.png" style="width: 15px">Editar</a>
<div style="position: absolute; font-weight:bold; left: -310px;"> / </div>
	 <a href="deletp.php" style="position: absolute; left: -295px; font-weight:bold; text-decoration: underline"><img src="img/excluir.png" style="width: 15px">Apagar este Usuario</a>

	</div>
</div>
	 	<br>
<form action="creatp.php" method="post">
		<label style="width: 180px;">CPF:</label>
		<input type="text" name="cpf" value="<?php echo $cpf; ?>" readonly style="width: 230px;">
		<br><br>
		<label style="width: 180px;">Nome:</label>
		<input type="text" name="nome" id="empresa" value="<?php echo $usuario; ?>" readonly style="width: 230px;">
		<br><br>
		<label style="width: 180px;">E-mail:</label>
		<input type="text" name="email" value="<?php echo $email; ?>" readonly style="width: 230px;">
		<br><br>
		<label style="width: 180px;">Senha:</label>
		<input type="password" name="senha" value="<?php echo $senha; ?>" readonly style="width: 230px;">	
</form>
<br>


<br><br>
<h1>Cadastrar novo usuario:</h1>
<br><br>
</form>

<form action="creatp.php" method="post">
	<div class="row">
    <div class="col-sm-8">
		<label style="width: 180px;">CPF:</label>
		<input type="text" name="cpfn" style="width: 230px;">
		<br><br>
		<label style="width: 180px;">Nome:</label>
		<input type="text" name="nomen" id="empresa" style="width: 230px;">
		<br><br>
		<label style="width: 180px;">E-mail:</label>
		<input type="text" name="emailn" style="width: 230px;">
		<br><br>
		<label style="width: 180px;">Senha:</label>
		<input type="password" name="senhan" style="width: 230px;">
	</div>
	<div class="col-sm-3"></div>

	<div class="col-sm-4">
		<br><br>
<button name="btn.dir" type="submit" style=" position: absolute; left:-180px; background:#e88b00; border-radius: 50px; width: 300px; height: 50px; color: white; font-weight:bold; text-decoration: underline">Cadastrar</button>

	</div>
</div>

</div>
</body>
</html>
