<?php
$dir = $_GET['dir'];
?>
<!DOCTYPE html> 
 <link rel="shotcut icon" href="img/mytec.png" type="image/x-png">
 <head> 
  <title>Upload</title> 
  <meta charset = "utf-8"/>
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

$dir = $_GET['dir'];
if(isset($_POST['upload']));
$formats = array("pdf", "jpg", "jpeg", "png", "psd", "doc", "docm", "docx", "xltm", "xls", "xlsx", "xlt", "xls", "xltx", "txt", "xml", "avi", "mov", "wmv", "mp4", "3gp", "3g2", "flv", "mkv", "rm", "wma", "alac", "flac", "ogg", "aac", "mp3", "pcm", "wav", "aiff", "smf", "swf", "rar", "zip");

$array = count($_FILES['arquivo']['name']);
$contador = 0;

echo "<br><br><br><br><center><img src='img\mytec.png' style='width: 200px'>";

while ($contador < $array) {
$extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
if (in_array($extensao, $formats)) {
	$pasta = "Propostas/$dir/";
	$temporario = $_FILES['arquivo']['tmp_name'][$contador];
	$novonome = $_FILES['arquivo']['name'][$contador];

	if (move_uploaded_file($temporario, $pasta.$novonome)) {
		echo "<h3 style = 'color: #00b300'>Upload do arquivo ".$novonome = $_FILES['arquivo']['name'][$contador]," concuído com sucesso!</h3>";
	}
}
	elseif ($extensao != $formats)
 {
		echo "<h3 style = 'color: #cc0000'>Upload do arquivo ".$novonome = $_FILES['arquivo']['name'][$contador]," falhou! Verifique se o formato do arquivo está dentro dos padrões necessários desejados!</h3></li>";
	}
	else{
		echo "<h3 style = 'color: #cc0000'>Upload do arquivo ".$novonome = $_FILES['arquivo']['name'][$contador]," falhou! Selecione um arquivo válido.</h3>";
	}

	$contador++;
}
 ?>
 <br>
<a href="arquivos.php?dir=<?php echo $dir;?>"><img src="img/voltar.png" style="width: 100px;"></a>
</center>
</body>
</html>