<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio02</title>
</head>

<body>
    <?php
    $columnas = 8;
    $filas    = 10;


    print "<table border=\"1\">\n";
    print "  <caption>Tabla de multiplicar</caption>\n";           // Abre la tabla
    // Crea la leyenda <caption>
    print "  <tbody>\n";                       // Abre el cuerpo de tabla <tbody>


    print "    <tr>\n";                        // Abre la primera fila
    // Crea la primera celda <th> de la primera fila (sin número)
    for ($j = 1; $j <= $columnas; $j++) {      // Bucle 1 se ejecuta tantas veces como columnas tenga la tabla
        print "      <th>Tabla del $j</th>\n";      // Crea las celdas <th> de la primera fila (con número)
    }
    print "    </tr>\n";                       // Cierra la primera fila


    for ($i = 1; $i <= $filas; $i++) {         // Bucle 2 (genera el resto de filas de la tabla)
        print "    <tr>\n";                    // Abre la fila
        // Crea la primera celda <th> de cada fila (con número)
        for ($j = 1; $j <= $columnas; $j++) {  // Bucle 3 se ejecuta tantas veces como columnas tenga la tabla
            print "      <td>$j x $i = " . ($j * $i) . "</td>\n";     // Crea el resto de celdas <td> de cada fila (con números)
        }
        print "    </tr>\n";                   // Cierra la fila
    }



    print "  </tbody>\n";                      // Cierra el cuerpo de tabla <tbody>
    print "</table>\n";                        // Cierra la tabla


    ?>

</body>

</html>