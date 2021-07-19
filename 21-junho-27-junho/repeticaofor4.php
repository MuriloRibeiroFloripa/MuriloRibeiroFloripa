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
          <center><p><h1>2.40- Fundamentos de Programação - Estrutras de Controle - Repetição - for - Parte 4</h1></p></center>  
      </ul>      
  	</nav>

  	<table border="1">
  		<th>Multiplos de 5</th>

		  	<?php
		  		$multiplo = 5;			
					for($numero=1; $numero <= 100; $numero++){
						if($numero % $multiplo == 0){ //é multiplo
							echo "<tr><td>$numero </tr></td>";
						}		  				  		
		  		}
		  		
		  	?>	  	
</body>
</html>