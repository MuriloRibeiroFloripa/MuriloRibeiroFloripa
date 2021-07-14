<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Exercício 17</title>
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
        <p><b><h1>Exercicio 17:</h1> <br>  
    </ul>
    </nav>
    <?php 
    $idade = @$_POST['idade'];
   

      if ($idade >= 18) {   
        echo ("<br><br><center><table bgcolor=silver><tr><td><strong> $idade = anos maior de idade </strong></td></tr></table></center>");
      }
      else if(($idade < 18) && ($idade >= 0)){
        echo ("<br><br><center><table bgcolor=silver><tr><td><strong> $idade = anos menos de idade </strong></td></tr></table></center>");
      }
      else{
         echo ("<br><br><center><table bgcolor=silver><tr><td><strong> $idade = idade inválida </strong></td></tr></table></center>");
      }
     ?>
    

</body>
</html>