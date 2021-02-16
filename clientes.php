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

html,body{
	background-color: #e6e6e6;
}
	#conteudo{
                    width: 800px;
                    background-color: rgb(255,255,255);
                    margin: auto;
                    border-radius: 20px 20px 20px 20px;
                    padding: 10px;
                    height: 100%;}

                                  a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
  font-weight:bold;

}

table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1.8px solid #666666;
}

tr {background-color: #f2f2f2;
border: 1px solid #ddd;}
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

</div>
	<br><br><br><br>
	 <div id="conteudo">
		<center>
		<h1>Clientes</h1>
		<br><br><br>
			</center>
			<h1 style="font-weight:bold;">Clientes:</h1><br>
        <div id ="arquivos">
					<?php  
			$path = "Propostas/";
$diretorio = dir($path);
 
while($arquivo = $diretorio -> read()){
	if ($arquivo != '.' && $arquivo != '..') {
	echo "<a href=\"arquivos.php?dir=$arquivo\"'><table><tr><td style='width:10%;'><center><img src='img/pasta.png' style='width: 30px;'></td><td style='line-width:600px; '></center><center>" .$arquivo, "</center></td></tr></table></a>"; 

	}

}
		$diretorio -> close();
	?></div>
</div>
	</body>
</center>
</html>