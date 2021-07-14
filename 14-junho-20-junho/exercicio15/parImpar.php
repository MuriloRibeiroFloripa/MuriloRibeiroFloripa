<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Exercício 15</title>
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
        <p><b><h1>Exercicio 15:</h1> <br>  
    </ul>
    </nav>
    <?php 
    $numero = @$_POST['numero'];
    $numero1 = $numero % 2;

      if($numero1 == 0){    
        echo ("<br><br><center><table bgcolor=silver><tr><td><strong>Par = $numero  </strong></td></tr></table></center>");
      }
      else if($numero1 == 1) {
        echo ("<br><br><center><table bgcolor=silver><tr><td><strong>Impar = $numero  </strong></td></tr></table></center>");
      }
         
    else //faz nada, para não aparecer a tabela antes da hora certa da execução
     ?>
    

</body>
</html>