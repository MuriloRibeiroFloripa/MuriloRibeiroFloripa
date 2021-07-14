<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exercícios 18</title>
	<link rel="stylesheet" href="">
</head>

<body>
  <nav>
      <ul>
        <li><a href="../index.php">Pagina Principal</a></li>
        <li><a href="../exercicio14/exercicio14.php">Exercicio 14</a></li>
        <li><a href="../exercicio15/exercicio15.php">Exercicio 15</a></li>
        <li><a href="../exercicio16/exercicio16.php">Exercicio 16</a></li>
        <li><a href="../exercicio17/exercicio17.php">Exercicio 17</a></li>
        <li><a href="../exercicio18/exercicio18.php">Exercicio 18</a></li>
        <li><a href="../exercicio19/exercicio19.php">Exercicio 19</a></li>
        <li><a href="../exercicio20/exercicio20.php">Exercicio 20</a></li>
        <p><b><h1>Exercicio 18:</h1> <br>  
        
        <p>Faça um programa para receber duas notas, calcular a média e apresentar se o aluno está aprovado ou reprovado. Considere que a média para aprovação seja 6.</p>
      </ul>         
  </nav>  
    <br>
    <form method="post" action="notas.php">
      <center>
        <table bgcolor="silver">
        <tr>
            <td><label> Informe a nota 1: </label></td>
            <td><input type="number"  min="0" max="10" step="any" name="nota1"></td>        
        </tr>
         <tr>
            <td><label> Informe a nota 2: </label></td>
            <td><input type="number"  min="0" max="10" step="any" name="nota2"></td>        
        </tr>
        <tr>        
            <td></td>       
            <td><input type="submit" name="Enviar"></td>        
        </tr>
        </table>
      </center>
</form>	
</body>
</html>