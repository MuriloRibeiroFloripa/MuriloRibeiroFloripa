<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Exercício 8</title>
   <link rel="stylesheet" href="">
</head>
<body>
   <nav>
      <ul>
        <li><a href="../index.php">Pagina Principal</a></li>
        <li><a href="../exercicio1/exercicio1.php">Exercicio 1</a></li>
        <li><a href="../exercicio2/exercicio2.php">Exercicio 2</a></li>
        <li><a href="../exercicio3/exercicio3.php">Exercicio 3</a></li>
        <li><a href="../exercicio4/exercicio4.php">Exercicio 4</a></li>
        <li><a href="../exercicio5/exercicio5.php">Exercicio 5</a></li>
        <li><a href="../exercicio6/exercicio6.php">Exercicio 6</a></li>
        <li><a href="../exercicio7/exercicio7.php">Exercicio 7</a></li> 
        <li><a href="../exercicio8/exercicio8.php">Exercicio 8</a></li>
        <li><a href="../exercicio9/exercicio9.php">Exercicio 9</a></li>
        <li><a href="../exercicio10/exercicio10.php">Exercicio 10</a></li>
        <li><a href="../exercicio11/exercicio11.php">Exercicio 11</a></li>
        <li><a href="../exercicio12/exercicio12.php">Exercicio 12</a></li>
        <li><a href="../exercicio13/exercicio13.php">Exercicio 13</a></li> 
         <h1>Exercício 8:</h1>
         <p> Formula usada: </p>

         <p>JUROS SIMPLES <BR>juros = ((valorVencido * (taxaJuros / 100)) * periodoAtraso);
            <br>novoValor = valorVencido + juros;
         </p>
      </ul>
   </nav>
   <?php
   $valorVencido = $_POST['valorVencido'];
   $taxaJuros = $_POST['taxaJuros'];
   $periodoAtraso = $_POST['periodoAtraso'];
   $novoValor;
   $juros = (($valorVencido * ($taxaJuros / 100)) * $periodoAtraso);
   $novoValor = $valorVencido + $juros;
   ?>
    <center>
        <table bgcolor="silver">
         <tr>
            <th><label><?php echo("Valor da prestação: "); ?> </label></th>
            <td><b><?php echo $valorVencido ?></b></td>
         </tr>
         <tr>
            <th><label><?php echo("Periodo de atraso: "); ?> </label></th>
            <td><b><?php echo $periodoAtraso ?></b></td>
         </tr>
         <tr>
            <th><label><?php echo("Juros a ser cobrados: "); ?> </label></th>
            <td><b><?php echo $juros ?></b></td>
            </tr>
            <tr>
               <th><label><?php echo ("<b>Valor da prestacao com juros: </b>"); ?> </label></th>
               <td><b><?php echo $novoValor ?></b></td>
            </tr>
        </table>
    </center>
    </table>   
</body>
</html>