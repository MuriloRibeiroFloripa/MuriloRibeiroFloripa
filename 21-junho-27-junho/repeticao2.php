<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Estrutura de repetição while: 3</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>2.35 - Fundamentos de Programação - Estrutras de Controle - Repetição - While - Parte 3</h1></p></center>  
      </ul>      
  	</nav>

  	<table border="1">
  		<th>Número</th>

		  	<?php
		  	$numero = 1;

		  	while ($numero <= 100) {

		  		echo "<tr><td>$numero</td></tr>";
		  		$numero++;
		  		
		  	}
		  	?>	  	
</body>
</html>