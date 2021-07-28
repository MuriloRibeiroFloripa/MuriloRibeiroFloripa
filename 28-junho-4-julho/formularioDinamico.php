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

  	<?php
  	$quantidade = $_POST['quantidade'];
  	?>

  			<form action="listar.php" method="post"> 
  			<?php
  				for($i = 1; $i <= $quantidade; $i++){

  				echo"Informe Nome:";
  				echo "<input type='text' name='pessoa[]'>";
  				echo "<br>";

  				}

  				?>
  				<input type="submit" name="Inserir">
  				</form>
  	

</body>
</html>