<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exibindo dados de formulário</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>2.53- Fundamentos de Programação - Exibindo dados em vários elementos de um formulário</h1></p></center>  
      </ul>      
  	</nav>  

  	<table border="1">
  		<tr><td>Formulário <br> Nome:</td></tr>
  		<?php
  		$nomes = ["ana", "bia", "caio"];
  		foreach($nomes as $valor) {  		
  				echo "<tr><td>$valor </td></tr>";  				
  		}
  		?>
  	</table>
  	<br>

  	<?php 
  	foreach($nomes as $valor) { 
  			echo "<input type='radio' value=$valor name='nome'> $valor";
 		}
  	?>
  	<br><br>
  	<select name="nome">
  		<?php  
  		foreach($nomes as $valor) { 
  			echo"<option value='$valor'>$valor</option>";
  		}
  		?>
  	</select>
  	<br><br>

  	<?php 
  	foreach($nomes as $valor) {
  		echo "<input type='checkbox' name='nome[]' value='$valor'>$valor";
  	}
 	  ?> 	 					

</body>
</html>