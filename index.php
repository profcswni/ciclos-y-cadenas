<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos y cadenas en PHP</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }
        p {
            background-color: yellow;
        }
        </style>
</head>
<body>
    <?php
    //Uso de ciclo while en PHP
    //MOstrar los números del 1 al 10
    //$num = 1;
    //while ($num <= 10) {
        //echo $num . "<br>";
        //$num++;
    //}
    //Cadenas en PHP
    $texto = "carlos andres perez ubeda.";
    echo "<p>Texto original</p>";
    echo $texto;
    
    //Transforma a mayúsculas
    echo "<br>";
    echo "<p>Texto en mayúsculas</p>";
    echo strtoupper($texto);
    
    //Transforma a minúsculas
    echo "<br>";
    echo "<p>Texto en minúsculas</p>";
    echo strtolower($texto);
    
    //Primera letra en mayúsculas
    echo "<br>";
    echo "<p>Primera letra en mayúsculas</p>";
    echo ucfirst($texto);
    
    //Primera letra en minúsculas
    echo "<br>";
    echo "<p>Primera letra de cada palabra en mayusculas</p>";
    echo ucwords($texto);
    
    //Contar caracteres
    echo "<br>";
    echo "<p>Contar el número de caracteres de una cadena</p>";
    echo strlen($texto);
    
    //Buscar una cadena
    echo "<br>";
    echo "<p>Buscar una cadena</p>";
    echo strstr($texto, "andres");
    ?>
</body>
</html>