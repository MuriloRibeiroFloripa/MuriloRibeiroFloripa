<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Arrays Associativos</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>2.47- Fundamentos de Programação - Arrays Associativos</h1></p></center>  
      </ul>      
  	</nav>

  	<?php
  	//Foreach => para cada
  	//Só funciona para array e vetores, variaveis com multiplos valores

  	// arrays associativos
  	// $nome = ["Murilo","Maria","Tatiane"];
  	// $notas = [90, 75, 80]


  	$notas = ["Murilo" => 90, "Maria" => 75, "Tatiane" => 80];

  	

  	// for ($i=0; $i<14; $i++){ não posso mais usar, pois ele vê indices inteiro
  	//vetores super globais exemplo: $_POST["nota"] => indice nome nota, para array post

  	//para cada valor dentro de numeros
  	foreach ($notas as $valor) {
  	 	
  	 	echo $valor; 		
  		
  		echo("<br>");
  	}

	?>

</body>
</html>