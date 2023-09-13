<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabajo practico 2-Matias Marchini</h1>
    <?php
    //1. Crear una variable n y validar que sea un número positivo.

    //Declaro variable n
    
    $ene = 2;


    // Hago condiciones 
    
    if ($ene > 0) {
        
        echo "$ene es un numero positivo";
        echo "<br>";
    }
    elseif ($ene < 0) {

        echo "$ene es un numero negativo, es decir, no es positivo";
        echo "<br>";
    }
    else{

        echo "0 no es ni positivo, ni negativo";
        echo "<br>";
    }

    //2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.

    //Declaro variables

    $variable_ene = 3;

    //Hago condicion

    if ($variable_ene > 1 & $variable_ene < 10) {

        echo "$variable_ene cumple la condicion de ser mayor a 1 y menor a 10.";
        echo "<br>";
    }
    
    //3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2. 

    //Declaro variable

    $n = 90;

    
    //Hago condicion

    if ($n > 10 || $n < 2) {

        echo "$n cumple la condicion de ser mayor a 10 o menor a 2.";
        echo "<br>";
    }


    //4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
    //mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
    //mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
    //numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.
    
    
    //Declaro variable 
    
    $numero1 =  10;
    $numero2 =  10;
    $suma; $resta; $multiplicacion; $divicion; $resto;

    // Hago condiciones 
    
    if ($numero1 > $numero2) {
        
        //Realizo operaciones
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        echo "La suma de $numero1 mas $numero2 es: $suma";
        echo "<br>";
        echo "La resta de $numero1 menos $numero2 es:$resta";
    }
    elseif ($numero2 < $numero1) {

        //Realizo operaciones
        $multiplicacion = $numero2 * $numero1;
        $divicion = $numero2 / $numero1;
        $resto = $numero2 % $numero1;

        echo "La multiplicacion de $numero2 y $numero1 es: $multiplicacion";
        echo "<br>";
        echo "La divicion de $numero2 y $numero1 es:$divicion";
        echo "<br>";
        echo "El resto de la división de $numero2 y $numero1 es:$resto";
    }
    else{

        echo "Los números ingresados son iguales.";
        echo "<br>";
    }
    
    ?>
</body>
</html>