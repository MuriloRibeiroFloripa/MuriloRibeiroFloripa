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
          <center><p><h1>2.41- Fundamentos de Programação - Estrutras de Controle - Repetição - for - Parte 5</h1></p></center>  
      </ul>      
  	</nav>

  	<table border="1">
  		<th>Senha!</th>

		  	<?php
		  		$senha =$_POST['senha'];

					for($numero=0; $numero <= 9; $numero++){
						if($numero == $senha){ 
							echo "<tr><td>Achei a Senha $numero </tr></td>";
						}		  				  		
		  		}
		  		
		  	?>	  	
</body>
</html>