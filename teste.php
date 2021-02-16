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
<div class='row'>
    <div class='col-sm-6'>
  <form method='POST' action='teste2.php' enctype='multipart/form-data'>
    <label>Selecione um arquivo para que seu upload seja feito:</label>
    </div>
      <div class='col-sm-6'>
      <input type='file' name='arquivo[]' style='font-weight:bold' multiple>
      </div></div>
    <br>
    <center>
      <input type='submit' name="upload" id="upload" value="Upload" style='background:white; border-radius: 50px; width: 20%; height: 35px; color: black; font-weight:bold; text-decoration: underline'>
      </center>
    </form>

</div>

</div>

<