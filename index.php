
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
	#conteudo{
                    width: 500px;
                    background-color: rgb(255,255,255);
                    margin: auto;
                    border-radius: 20px 20px 20px 20px;
                    padding: 10px;
                    height:  530px;}

   body, html{
background-color: #e6e6e6;
   }
</style>
<body>
    <br>
    <div id="conteudo">
    <center>
        <img src="img\mytec.png" style="width: 200px">
        <br><br> 
    <form name="usuario" method="post" action="verificar.php">
<h1>E-mail:</h1> <input type="text" name="email"><br><br>
<h1>Senha:</h1> <input type="password" name="senha"><br><br>
<input type="submit" name="entrar" value="Entrar" style="background:#e88b00; border-radius: 50px; width: 150px; height: 50px; color: white; font-weight:bold; text-decoration: underline">

</form>
</center>
    </div>
 
	
</body>
</html>
