<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejemplos con funciones y estructuras de control</h2>
    <?php
    require_once ("repositiorio.php");
    echo "<h3>Ejercicio 1 </h3>";
    $resultado=transformar("un texto"); 
    echo $resultado;
    $totalFactura=calcularTotal(100,4.95,0.21);
    echo("<br>El total de la factura es--->".$totalFactura."(IVA incluido)");
    $totalFactura2=calcularTotal2(100,4.95,"reducido");
    echo("<br><h4>El total de la factura es--->".$totalFactura2." </h4>");

    $mensajeResultado=manipularString("en un lugar de la mancha:");
    echo $mensajeResultado;

    $mensajeDato=primeraMayuscula(" <p>Tengo ganas de ti </p>");
    echo $mensajeDato;

    echo reemplazar(" <p>Tengo ganas de ti</p> ");

    echo strftime("<p>%A %d de %B del %Y</p>");

    $mensajeinfo=info($infos)(" <p>la version de php es:</p> ");
    echo $mensajeinfo;
     

    ?>
</body>
</html>