<?php

session_start();
if (!isset($_SESSION['usuario'])){
    header("Location: logout.php");
}

else {
  $perfil = $_SESSION['usuario']->nome;

  $cpf = $_SESSION['usuario']->cpf;

  $email = $_SESSION['usuario']->email;

  $senha =  $_SESSION['usuario']->senha;
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
}
	#conteudo{
                    width: 1100px;
                    background-color: rgb(255,255,255);
                    margin: auto;
                    border-radius: 20px 20px 20px 20px;
                    padding: 10px;
                    height:  100%px;}

                    	#navbar {
  background-color: #f2f2f2;
  position: fixed;
  top: 0;
  width: 100%;
  display: block;
  transition: top 0.3s;
  z-index: 1;
}

#navbar {
  background-color: #ff9900;
  position: fixed;
  top: 0;
  width: 100%;
  display: block;
  transition: top 0.3s;
  z-index: 1;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ffb84d;
}
    </style>
	<body>
		<div id="navbar">
  <a href="home.php" style="width: 150px;"><img src="img/home.png" style="width: 27px">  Home </a>
  <a href="clientes.php" style="width: 150px;"><img src="img/cliente.png" style="width: 27px">  Clientes </a>
  <a href="hospedando.php" style="width: 200px"><img src="img/iconep.png" style="width: 23px">  Editar clientes </a>
   <a href="perfil.php" style="position: absolute; left:1000px; color: white; font-weight:bold; "><img src="img/perfil.png" style="width: 27px"><?php
echo $perfil;
    ?></a>
  <a href="logout.php" style="width: 200px; position: absolute; left:1200px;"><img src="img\sair.png" style="width: 30px; position: absolute; left:1250px; position: fixed;"> Sair </a>
</div><br><br><br>
	 <div id="conteudo">
		  


 

		<h1 style=" font-weight:bold;">Editar Perfil:</h1>
		<br>
    <center>
			<img src="img/editar.png" style="width: 200px;">
    </center>
		<br><br>
    <div class="row">
    <div class="col-sm-6">
    <form action='editandop.php' method='post'>
		<label style="width: 180px;">CPF: </label>
		<input type='text' name='cpf' value='<?php echo $cpf; ?>' readonly style="width: 230px;">
		<br><br>
		<label style="width: 180px;">Novo cpf: </label>
		<input type='text' name='novocpf' value='<?php echo $cpf; ?>' style="width: 230px;">
		<br><br>
    <label style="width: 180px;">Nome: </label>
    <input type='text' name='nome' value='<?php echo $perfil; ?>' readonly style="width: 230px;">
    <br><br>
    <label style="width: 180px;">Novo nome: </label>
    <input type='text' name='novonome' value='<?php echo $perfil; ?>' style="width: 230px;">
    <br><br>
  </div>
    <div class="col-sm-6">
    <label style="width: 180px;">E-mail: </label>
    <input type='text' name='email' value='<?php echo $email; ?>' readonly style="width: 230px;">
    <br><br>
    <label style="width: 180px;">Novo e-mail: </label>
    <input type='text' name='novoemail' value='<?php echo $email; ?>' style="width: 230px;">
    <br><br>
    <label style="width: 180px;">Senha: </label>
    <input type='password' name='senha' value='<?php echo $senha; ?>' readonly style="width: 230px;">
    <br><br>
    <center>
    <a href="editS.php" style="font-weight:bold; text-decoration: underline"><img src="img/editar.png" style="width: 15px">Alterar senha</a>
    </center>
    <br><br>
  </div></div>
  <center>
     <br><br>
    <label>Confirme sua senha atual para atualizar suas informações: </label>
    <input type='password' name='confirmar' style="width: 230px;">
    <br><br>
		<button name="btn.dir" type="submit" style="background:#e88b00; border-radius: 50px; width: 100px; height: 35px; color: white; font-weight:bold; text-decoration: underline">Concluir</button>
		</form></center>

  

   
  
</div>

</body>
</html>
