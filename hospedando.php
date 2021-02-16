<?php

session_start();
if (!isset($_SESSION['usuario'])){
    header("Location: logout.php");
}
 else{
 	$perfil = $_SESSION['usuario']->nome;
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
echo $perfil;
    ?></a>
  <a href="logout.php" style="width: 200px; position: absolute; left:1200px;"><img src="img\sair.png" style="width: 30px; position: absolute; left:1250px; position: fixed;"> Sair </a>
</nav>

<body style="padding-top: 10px;">		

	<br><br><br>
	 <div id="conteudo">
	 	<h1>Criar Pasta:</h1>
	 	<br>
			<form action="criar.php" method="post">
				<div class="row">
    <div class="col-sm-8">
		<label style="width: 180px;">Nome do Cliente:</label>
		<input type="text" name="nome" placeholder="Nome" style="width: 230px;">
		<br><br>
		<label style="width: 180px;">Nome da Empresa:</label>
		<input type="text" name="empresa" id="empresa" placeholder="Nome Empresa" style="width: 230px;">
		<br><br>
		<label style="width: 180px;">Telefone:</label>
		<input type="text" name="telefone" placeholder="0000-0000" style="width: 230px;">
		<br><br>
		<label style="width: 180px;">Número Celular:</label>
		<input type="text" name="contato" placeholder="(00) 00000-0000" style="width: 230px;">
		<br><br>
		<label style="width: 180px;">E-mail:</label>
		<input type="text" name="email" placeholder="mytec@mytec.com" style="width: 230px;">
		<br><br>
		<label style="width: 180px;">Endereço:</label>
		<input type="text" name="endereco" placeholder="Rua, Numero - Bairro, Cidade, UF" style="width: 230px;">
		<br><br>
		<label style="width: 180px;">CEP:</label>
		<input type="text" name="cep" placeholder="00000-000" style="width: 230px;">
		<br><br>
		<label style="width: 180px;">CNPJ:</label>
		<input type="text" name="cnpj" placeholder="00.000.000/0000-00" style="width: 230px;">
		<br><br>
		<label style="width: 180px;">Site:</label>
		<input type="text" name="site" placeholder="mytec.com.br" style="width: 230px;"></div>
		<div class="w3-col s3"></div>
		<br><br>
    <div class="col-sm-4">
    	<br><br><br><br><br>
		<button name="btn.dir" type="submit" style=" position: absolute; left:-180px; background:#e88b00; border-radius: 50px; width: 400px; height: 70px; color: white; font-weight:bold; text-decoration: underline">Cadastrar</button>
	</div>
</div>
	</form>
	<br>
	<h1>Excluir/Renomear Pasta:</h1>
	<br>
	
		<center>			<?php  
			$path = "Propostas/";
$diretorio = dir($path);
 
while($arquivo = $diretorio -> read()){
	if ($arquivo != '.' && $arquivo != '..') {
	echo "<table class='table table-striped' style='width:98%;'> 
	<tr>
	<td align=center style='width:150px;'>$arquivo    </td>
		 <td align=center style='width:550px;'><a href=\"excluir.php?dir=$arquivo\">Excluir <img src='img/excluir.png' style='width: 20px'></a>                               </td> 
		 <td align=center style='width:300px;'>
		 <a href=\"renomeando.php?dir=$arquivo\">Editar <img src='img/editar.png' style='width: 20px'></a>
		                                               </td>
		</tr>
		</table>";
	}

}

$diretorio -> close();
			?></center>
		
</div>	
<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("barra").style.top = "0";
  } else {
    document.getElementById("barra").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
</body>
</html>