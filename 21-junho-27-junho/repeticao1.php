<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Estrutura de repetição while2</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>2.34 - Fundamentos de Programação - Estrutras de Controle - Repetição - While - Parte 2</h1></p></center>  
      </ul>      
  	</nav>
  	<?php
  	$numero = 1;

  	while ($numero <5) {
  		echo $numero;
  		echo "<br>";
  		$numero++; // $numero = $numero + 1;
  	}
  	 ?>	
</body>
</html>