<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Função rand()</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>2.48- Fundamentos de Programação - Função rand()</h1></p></center>  
      </ul>      
  	</nav>

  	<?php

  	$r = rand (0,255);
  	$g = rand (0,255);
  	$b = rand (0,255);

  	echo "Essas corres Corresponde ao RGB = ($r, $g, $b)";
  	echo "<p style='background-color: rgb($r, $g, $b) '> <br>Cor atribuida dinâmicamente<br><br></p>";

	?>

<a href="funçãoRand.php">MUDAR O RGB!</a>
</body>
</html>