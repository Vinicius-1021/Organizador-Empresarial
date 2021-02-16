<?php

session_start();

if (!isset($_SESSION['usuario'])){
    header("Location: logout.php");
}

else {
 $perfil = $_SESSION['usuario']->nome;

$empresa = $_GET['dir'];

$con = new PDO("mysql:host=localhost; dbname=clienteservice;", "root", "");
$sql= $con->prepare("SELECT * FROM cliente where empresa = '$empresa'");
$sql->execute();

   $row = $sql->fetchObject();

   if ($row) {
   $_SESSION['cliente'] = $row;

 
  $confirmar = $_SESSION['usuario']->senha;

  $nome = $_SESSION['cliente']->nome;
  $telefone = $_SESSION['cliente']->telefone;
  $contato = $_SESSION['cliente']->contato;
  $email = $_SESSION['cliente']->email;
  $endereco = $_SESSION['cliente']->endereco;
  $site = $_SESSION['cliente']->site;
  $cnpj = $_SESSION['cliente']->cnpj;
  $cep = $_SESSION['cliente']->cep;
   }

   else {
    echo '<h1>Nada encontrado</h1>';
   }

      


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
                    height:  100%;}

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
		<h1 style=" font-weight:bold;">Editar:</h1>
    <br>
    <center>
      <img src="img/editar.png" style="width: 200px;">  
      <br><br><br>
        </center>
<div class="row">
    <div class="col-sm-6">
<form action='renomear.php' method='post'>
		
		<br><br><br>
		<label style="width: 180px;">Empresa: </label>
		<input type='text' name='empresa' value='<?php echo $empresa ?>' readonly style="width: 230px;">
		<br><br>
		<label style="width: 180px;">Renomear empresa para: </label>
		<input type='text' name='novaempresa' value='<?php echo $empresa ?>' style="width: 230px;">
		<br><br>

    <br><br>
    <label style="width: 180px;">Cliente: </label>
    <input type='text' name='nome' value='<?php echo $nome ?>' readonly style="width: 230px;">
    <br><br>
    <label style="width: 180px;">Renomear cliente para: </label>
    <input type='text' name='novonome' value='<?php echo $nome ?>' style="width: 230px;">
    <br><br>

    <br><br>
    <label style="width: 180px;">Telefone: </label>
    <input type='text' name='telefone' value='<?php echo $telefone; ?>' readonly style="width: 230px;">
    <br><br>
    <label style="width: 180px;">Modificar telefone para: </label>
    <input type='text' name='novotelefone' value='<?php echo $telefone; ?>' style="width: 230px;">
    <br><br>

    <br><br>
    <label style="width: 180px;">Contato: </label>
    <input type='text' name='contato' value='<?php echo $contato; ?>' readonly style="width: 230px;">
    <br><br>
    <label style="width: 180px;">Modificar contato para: </label>
    <input type='text' name='novocontato' value='<?php echo $contato; ?>' style="width: 230px;">
    <br><br>

    <br><br>
    <label style="width: 180px;">E-mail: </label>
    <input type='text' name='email' value='<?php echo $email; ?>' readonly style="width: 230px;">
    <br><br>
    <label style="width: 180px;">Modificar e-mail para: </label>
    <input type='text' name='novoemail' value='<?php echo $email; ?>' style="width: 230px;">
    <br><br>
    </div>

    <div class="col-sm-6">
    <br><br>
    <label style="width: 180px;">Endereço: </label>
    <input type='text' name='endereco' value='<?php echo $endereco; ?>' readonly style="width: 230px;">
    <br><br>
    <label style="width: 180px;">Modificar endereço para: </label>
    <input type='text' name='novoendereco' value='<?php echo $endereco; ?>' style="width: 230px;">
    <br><br>

    <br><br>
    <label style="width: 180px;">Site: </label>
    <input type='text' name='site' value='<?php echo $site; ?>' readonly style="width: 230px;">
    <br><br>
    <label style="width: 180px;">Modificar site para: </label>
    <input type='text' name='novosite' value='<?php echo $site; ?>' style="width: 230px;">
    <br><br>

    <br><br>
    <label style="width: 180px;">Cnpj: </label>
    <input type='text' name='cnpj' value='<?php echo $cnpj; ?>' readonly style="width: 230px;">
    <br><br>
    <label style="width: 180px;">Modificar cnpj para: </label>
    <input type='text' name='novocnpj' value='<?php echo $cnpj; ?>' style="width: 230px;">
    <br><br>

    <br><br>
    <label style="width: 180px;">Cep: </label>
    <input type='text' name='cep' value='<?php echo $cep; ?>' readonly style="width: 230px;">
    <br><br>
    <label style="width: 180px;">Modificar cep para: </label>
    <input type='text' name='novocep' value='<?php echo $cep; ?>' style="width: 230px;">
    <br><br><br><br><br>
  
    <center>
      <label>Confirme sua senha atual para atualizar as informações do cliente: </label>
    <input type='password' name='confirmar' style="width: 230px;"><br><br>
    <button name="btn.dir" type="submit" style="background:#e88b00; border-radius: 50px; width: 200px; height: 45px; color: white; font-weight:bold; text-decoration: underline">Concluir</button></center>
		</form>
</div>



</div>
</body>
</html>

