<?php 



session_start();
if (!isset($_SESSION['usuario'])){
    header("Location: logout.php");
}

else{
  $perfil = $_SESSION['usuario']->nome;
 }

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "clienteservice";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$cliente = $_GET['dir'];

mysqli_query($conexao, "SELECT cliente WHERE empresa = '$cliente'");

?>
<!DOCTYPE html>
<html lang="en">
<link rel="shotcut icon" href="img/mytec.png" type="image/x-png">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>MyTec</title>
<meta HTTP-EQUIV="Pragma" CONTENT="no-cache">

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
  <body onload="window.opener.reload()">
    <div id="navbar">
  <a href="home.php" style="width: 150px;"><img src="img/home.png" style="width: 27px">  Home </a>
  <a href="clientes.php" style="width: 150px;"><img src="img/cliente.png" style="width: 27px">  Clientes </a>
  <a href="hospedando.php" style="width: 200px"><img src="img/iconep.png" style="width: 23px">  Editar clientes </a>
  <a href="perfil.php" style="position: absolute; left:1000px; color: white; font-weight:bold; "><img src="img/perfil.png" style="width: 27px"><?php
echo $perfil;
    ?></a>
  <a href="logout.php" style="width: 200px; position: absolute; left:1200px;"><img src="img\sair.png" style="width: 30px; position: absolute; left:1250px; position: fixed;"> Sair </a> 
</div>
  <br><br><br>
   <div id="conteudo">

    <center>
      <h1>Cliente "<?php echo $cliente;?>"</h1>
      <br><br><br>
        </center>
      <h1 style='font-weight:bold;'>Arquivos: </h1><br>
      <?php  
      $path = "Propostas/" .$cliente;
$diretorio = dir($path);
 
while($arquivo = $diretorio -> read()){
  if ($arquivo != '.' && $arquivo != '..') {
  echo "
        <div id ='arquivos'>
  <table><tr><td style='width:10%;'><a href= 'Propostas/$cliente/".$arquivo,"' target='top' download><center><img src='img/download.png' style='width: 30px;'></a></td>
  <td style='line-width:600px; width:70%;'><a href=\"Propostas/$cliente/$arquivo\" target='top'></center><center>" .$arquivo, "</center></a></td>
  <td><center><a href='deletar.php?arq=" .$arquivo,"&dir=" .$path,"&cli=".$cliente,"'>Excluir <img src='img/excluir.png' style='width: 20px'></a></center></td>
  </tr></table>

    ";         
  }

}


    $diretorio -> close();
  ?>
  <div style='width: 70%'>____________________________________________________________________________________________________</div>
  <br>
  <div class='row'>
    <div class='col-sm-6'>
  <form method='POST' action='upload.php?dir=<?php echo $cliente;?>' enctype='multipart/form-data'>
    <label>Selecione um arquivo para que seu upload seja feito:</label>
    </div>
      <div class='col-sm-6'>
      <input type='file' name='arquivo[]' style='font-weight:bold' multiple>
      </div></div>
    <br>
    <center>
      <input type='submit' name="upload" value="Upload" style='background:white; border-radius: 50px; width: 20%; height: 35px; color: black; font-weight:bold; text-decoration: underline'>
      </center>
    </form>

</div>

</div>
</div>
  </body>
</center>
</html>