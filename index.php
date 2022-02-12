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
    //Tarjeta de credito
    $tarjeta = "5105";
    $texto = "carlos andres perez ubeda";
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
    echo strstr($texto, "perez");

    //Reemplazar texto en una cadena
    echo "<br>";
    echo "<p>Reemplazar texto en una cadena</p>";
    echo str_replace("e", "-", $texto);

    //Completar caracteres en una cadena por la izquierda
    echo "<br>";
    echo "<p>Completar caracteres en una cadena por la izquierda</p>";
    echo str_pad($tarjeta, 16, "*", STR_PAD_LEFT);

    //Completar caracteres en una cadena por la derecha
    echo "<br>";
    echo "<p>Completar caracteres en una cadena por la derecha</p>";
    echo str_pad($tarjeta, 16, "*", STR_PAD_RIGHT);

    //Completar caracteres en una cadena por ambos lados
    echo "<br>";
    echo "<p>Completar caracteres en una cadena por ambos lados</p>";
    echo str_pad($tarjeta, 20, "*", STR_PAD_BOTH);

    //Imprimir una cadena de texto en orden inverso
    echo "<br>";
    echo "<p>Imprimir una cadena de texto en orden inverso</p>";
    echo strrev($texto);

    //Imprimir el hash SHA1 de una cadena de texto
    echo "<br>";
    echo "<p>Imprimir el hash SHA1 de una cadena de texto</p>";
    echo sha1($texto);

    //Imprimir el hash MD5 de una cadena de texto
    echo "<br>";
    echo "<p>Imprimir el hash MD5 de una cadena de texto</p>";
    echo md5($texto);

    //Imprimir el hash CRC32 de una cadena de texto
    echo "<br>";
    echo "<p>Imprimir el hash CRC32 de una cadena de texto</p>";
    echo crc32($texto);

    //Encriptar una cadena de texto con el algoritmo AES
    echo "<br>";
    echo "<p>Encriptar una cadena de texto con el algoritmo password hash</p>";
    echo password_hash($texto, PASSWORD_DEFAULT);

    //Eliminar espacios en blanco de una cadena de texto
    echo "<br>";
    echo "<p>Eliminar espacios en blanco de una cadena de texto</p>";
    echo trim($texto);
    

    ?>
</body>
</html>