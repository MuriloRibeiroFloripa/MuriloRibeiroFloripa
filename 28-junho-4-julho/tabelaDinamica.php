<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tabela Dinâmica</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>2.50- Fundamentos de Programação - Gerando uma tabela de forma dinâmica</h1></p></center>  
      </ul>      
  	</nav>

  	<table border="1">

  	<?php


  	$linha = 20;
  	$coluna = 20;

  	for($i=1; $i<=$linha; $i++){
  		echo "<tr>";

  		for($x=1; $x<=$coluna; $x++){
  			echo "<td>X</td>";
  		}
  		echo"</tr>";
  	}

  	?>
  	</table>

</body>
</html>