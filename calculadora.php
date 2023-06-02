<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Calculadora Simples</title>
   <meta charset = "UTF-8">
</head>
<body>
     <form action="" method="post">
        Primeiro número: <input name="num1" type="text"><br>
        Segundo número: <input name="num2" type="text"><br>
        <br>
        <input type="submit" name="operacao" value="Soma">     
        <input type="submit" name="operacao" value="Subtração">     
        <input type="submit" name="operacao" value="Multiplicação">     
        <input type="submit" name="operacao" value="Divisão">   
   </form>
<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op = $_POST['operacao'];

   if( !empty($op) ) {
      if($op == 'Soma')
         $c = $a + $b;
      else if($op == 'Subtração')
         $c = $a - $b;
      else if($op == 'Multiplicação')
         $c = $a*$b;
      else if($op == 'Divisão')
         $c = $a/$b;
        $resto = $a % $b;
    echo "Resultado: $c";
    echo "<br>";
    echo "Resto: $resto";
   }
?>       
</body>
</html>