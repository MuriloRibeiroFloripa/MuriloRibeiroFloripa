<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Estrutura de repetição while</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>2.33 - Fundamentos de Programação - Estrutras de Controle - Repetição - While - Parte 1</h1></p></center>  
      </ul>      
  	</nav>

  	<?php
  	$voltas = 0;
  	echo "<ol>";
  	while ($voltas <= 9) {
  		echo "<li>Completou uma volta</li>";
  		$voltas = $voltas + 1;
  	}
	echo "</ol>";
	?>

</body>
</html>