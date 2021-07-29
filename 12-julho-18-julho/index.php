<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Férias</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>      	
        <li><a href="..\index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>Férias!</h1></p></center>  
      </ul>      
  	</nav>

  	<?php

  	$r = rand (0,255);
  	$g = rand (0,255);
  	$b = rand (0,255);
  	
  	echo "<p style='background-color: rgb($r, $g, $b) '> <br>FÉRIAS!!!<br><br></p>";

	?>

<a href="index.php">BOAS FÉRIAS!</a>
</body>
</html>