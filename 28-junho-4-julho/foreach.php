<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Estrutura de Repetição - Foreach</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>2.45- Fundamentos de Programação - Vetores/Arrays - Estrutura de Repetição - Foreach</h1></p></center>  
      </ul>      
  	</nav>

  	<?php
  	//Foreach => para cada

  	$numero = [10, 20, 4];
  	$indice=1;

  	//para cada valor dentro de numeros
  	foreach ($numero as $valor) {
  	 	
  		echo "Posição[$indice] = $valor"; 		
  		$indice++;
  		echo("<br>");
  	}

	?>

</body>
</html>