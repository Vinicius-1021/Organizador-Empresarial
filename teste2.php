<?php 
$planilha = isset($_POST['upload']);
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
$contador = 0;
if(isset($_POST['upload']));
$formats = array("xltm", "xls", "xlsx", "xlt", "xls", "xltx");

$array = count($_FILES['arquivo']['name']);

while ($contador < $array) {
$extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
if (in_array($extensao, $formats)) {

	$temporario = $_FILES['arquivo']['tmp_name'][$contador];
	$novonome = $_FILES['arquivo']['name'][$contador];

	$contador++;
}
}
 ?>
<button onclick="GerarTabela()">Gerar</button>
<table>
	
<thead>
	
<tr>
	
<th>Vendedor</th>
<th>Contato</th>

</tr>

</thead>

<tbody id="CorpoTable">
	
</tbody>

</table>

 <br>

</body>
</html>
<script>
document.getElementById("upload").addEventListener("click", Tabela);

	function DadosTabela(){

var Excel = <?php isset($_POST['upload']); ?>;
var Guia = Excel.getSheetByName("Planilha1");
var Dados = Guia.getRange(1, 1, Guia.getLastRow(), 2).getValues();

return Dados;

}

function Tabela(){

google.script.run.withSuccessHandler(GerarTabela).DadosTabela();

}

function GerarTabela(Carregar){

var CorpoTabela = document.getElementById("CorpoTable");
Carregar.forEach(function(r){

var Linha = document.createElement("tr");
var Col1 = document.createElement("td");
Col1.textContent = r [0];
var Col2 = document.createElement("td");
Col2.textContent = r [1];
Linha.appenChild(Col1);
Linha.appenChild(Col2);
CorpoTabela.appenChild(Linha);

});

}

</script>

