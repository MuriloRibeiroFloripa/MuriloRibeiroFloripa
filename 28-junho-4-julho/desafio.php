<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Desafio</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
      <ul>
        <li><a href="index.php">VOLTAR A PAGINA PRINCIPAL</a></li>
          <center><p><h1>Desafio: proposto pelo Professor</h1></p></center>  
      </ul>      
  	</nav>  	

  	<?php
  	$nome = $_POST['nome'];
  	?>

  	<table border="1">
  		<tr>
  			<td>Nome</td>
  			<td>Alterar</td>
  			<td>Excluir</td>  			  		
  		</tr>
  			<td><?php echo $nome; ?></td>
  			<td><a href="index.php">Alter</a></td>
  			<td><a href="index.php">Excluir</a></td>  	
  	</table>
  	

</body>
</html>