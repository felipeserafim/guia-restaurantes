<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            include "operacoes.php";
            
            $n1 = 5;
            $n2 = 10;
    
            $resultado = soma($n1, $n2);
            echo "Resultado da soma: ".$resultado;            
            echo "<br><br>";
            
            $resultado = subtracao($n1, $n2);
            echo "Resultado da subtração: ".$resultado;           
            echo "<br><br>";
           
            $resultado = multiplicacao($n1, $n2);
            echo "Resultado da multiplicação: ".$resultado;
            echo "<br><br>";
            
            $resultado = divisao($n1, $n2);
            echo "Resultado da divisão: ".$resultado;       
            echo "<br><br>";
            ?>
   </body>
</html>