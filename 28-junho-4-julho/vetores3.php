<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vetores/Arrays - Parte 3</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>2.45- Fundamentos de Programação - Vetores/Arrays - Parte 3</h1></p></center>  
      </ul>      
  	</nav>

  	<?php
  	$numero = [10, 20, 32323, 4343, 6565, 878, 8, 90, 78, 565, 343, 89, 8.5, 5.9, 10, 30, 40, 400, 500, 10, 20, 32323, 4343, 6565, 878, 8, 90, 78, 565, 343, 89, 8.5, 5.9, 10, 30, 40, 400, 500, 10, 20, 32323, 4343, 6565, 878, 8, 90, 78, 565, 343, 89, 8.5, 5.9, 10, 30, 40, 400, 500, 10, 20, 32323, 4343, 6565, 878, 8, 90, 78, 565, 343, 89, 8.5, 5.9, 10, 30, 40, 400, 500];

  	// função = Operação, ação, um procedimento...pronto, disponivel pra ser usada.
  	$posicao=1;
  	for ($i=0; $i<count($numero); $i++){
  		echo "$posicao = $numero[$i]";
  		$posicao++;
  		echo "<br>";
  	}

	?>

</body>
</html>