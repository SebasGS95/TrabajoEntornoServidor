<html>
    <body>
        <?php
            echo "Ejercicio 1:"."<br><br>";
            $var1="hola";
            $espacio=" ";
            $var2="mundo";
            $respuesta=$var1.$espacio.$var2;
            echo $respuesta."<br>";
            $varVerdad=true;
            $varFloar=3.14;
            $vararray=array ("valor1" => 1,"valor2" => 2,"valor3" => 3);
            if ($varVerdad) {
                echo "Verdad"."<br>";
            }else {
                echo "Falso"."<br>";
            }
            echo $varFloar."<br>";
            print_r ($vararray);
            echo "<br>-------------------------------<br>";
            echo "Ejercicio 2:"."<br><br>";
            $varVerdad=false;
            echo $varVerdad."No muestra nada ya que lo toma como ausencia o vacio el false.";
            echo "<br>-------------------------------<br>";
            echo "Ejercicio 3:"."<br><br>";
            $respuesta=str_replace (" ", "", $respuesta);
            echo $respuesta;
            echo "<br>-------------------------------<br>";
            echo "Ejercicio 4:"."<br><br>";
            echo "El operador \"+\" sirve para sumar el valor de variables. Con la \"/\" podemos
            dividir valores entre variables. El símbolo del dólar \"$\" indica que estamos
            utilizando variables pero no lo usaremos en las constantes o globales.";
            echo "<br>-------------------------------<br>";
            echo "Ejercicio 5:"."<br><br>";
            $cadena="El operador \"+\" sirve para sumar el valor de variables. Con la \"/\" podemos
            dividir valores entre variables. El símbolo del dólar \"$\" indica que estamos
            utilizando variables pero no lo usaremos en las constantes o globales.";
            echo strlen($cadena);
            echo "<br>-------------------------------<br>";
            echo "Ejercicio 6:"."<br><br>";
            $respuesta=strtolower($respuesta);
            echo $respuesta = str_replace(array('a', 'e', 'i', 'o', 'u'), '', $respuesta);
            echo "<br>-------------------------------<br>";
            echo "Ejercicio 7:"."<br><br>";
            $varVacia="";
            echo empty($varVacia)." es decir si esta vacia.";
            echo "<br>-------------------------------<br>";
            echo "Ejercicio 8:"."<br><br>";
            $respuesta="Hola Mundo";
            $respuesta= intval ($respuesta);
            echo $respuesta;
            echo "<br>Al no tener valor numerico al ser un string el valor dado es 0 <br>";
            echo "<br>-------------------------------<br>";
            echo "Ejercicio 9:"."<br><br>";
            echo "A:";
            $raizCuadrada = sqrt(144);
            echo $raizCuadrada;
            echo "<br>B:";
            $potencia = 2 ** 8;
            echo $potencia;
            echo "<br>C:";
            echo 100%6;
            echo "<br>D:";    
            function calcularMCD($numero1, $numero2) {      //creo una funcion que calculara el mcd
                while ($numero2 !== 0) {                    //compruebo que el segundo numero no de 0 hasta acabar
                    $temp = $numero2;                           //despues vas comprobando numero con numero hasta que termine el bucle con la solucion
                    $numero2 = $numero1 % $numero2;
                    $numero1 = $temp;
                }
                return $numero1;
            }
            $numero1 = 3;
            $numero2 = 6;
            $mcd = calcularMCD($numero1, $numero2);
            echo "El MCD es $mcd";
        ?>
    </body>
</html>




