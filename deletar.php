<?php

$cliente = $_GET['dir'];

  ?>
<!DOCTYPE html> 
 <link rel="shotcut icon" href="img/mytec.png" type="image/x-png">
 <head> 
  <title>Excluindo Pasta</title> 
  <meta charset = "utf-8"/>
  <script type='text/javascript'> 
 function delet() { 
 setTimeout ("javascript:history.back(-1)", 2000);
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

    $extensao = pathinfo($_GET['arq'], PATHINFO_EXTENSION);
	$arquivo = pathinfo($_GET['arq'], PATHINFO_FILENAME);
	$cliente = $_GET['dir'];
	$pasta = $cliente ."/".$arquivo.".".$extensao;
	$empresa = $_GET['cli'];
	

if (unlink($pasta)) {
	echo " <br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Arquivo '" .$arquivo,"' deletado com sucesso!</h1></center>";
	echo "<script>delet()</script>";
	header("refresh: 1; url=arquivos.php?dir=".$empresa);
}
else{
    echo " <br><br><br><br><br><br><br><br><center><img src='img\mytec.png' style='width: 200px'><h1 style = 'color: #f4d942'> Arquivo '" .$arquivo,"' não encontrado!</h1></center>";
	echo "<script>delet()</script>";
 }

 ?>
</body>
</html>