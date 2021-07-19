<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Estrutura de repetição for</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>2.39- Fundamentos de Programação - Estrutras de Controle - Repetição - for - Parte 3</h1></p></center>  
      </ul>      
  	</nav>

  	<table border="1">
  		<th>Multiplos</th>

		  	<?php
		  		$multiplo = 8;
		  		$limite = 200;
					
					for($numero=$multiplo; $numero < $limite; $numero=$numero+$multiplo){

		  			echo "<tr><td>$numero </tr></td>";		  		
		  		}
		  		
		  	?>	  	
</body>
</html>