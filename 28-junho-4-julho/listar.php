<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulário Dinâmica</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>2.52- Fundamentos de Programação - Gerando um formulário dinamicamente</h1></p></center>  
      </ul>      
  	</nav>  

  	<table border="1">
  		<tr><td>Nome:</td></tr>

  		<?php

  		$pessoa = $_POST['pessoa'];

  		foreach($pessoa as $valor) {  		
  				echo "<tr><td>$valor </td></tr>";  				
  		}

  		?>

  	</table>	

  	<?php 
  	$qtd = count($pessoa);
  	echo "<br>";
  	echo "Quantidade de $qtd Pessoas.";
  	?>
  			
  				

</body>
</html>