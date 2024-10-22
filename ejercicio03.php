<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Emojis</title>
    <style>


        table,
        th,
        td,
        tr {
            border: 2px solid black;
            width: 55px;
            height: 55px;
            margin: auto;
        }

        table {
            margin: auto;
            width: 100%;
            text-align: center;
        }

        .grey {
            background-color: grey;
        }
        .titulo{
            text-align: center;
        }
     
    </style>
</head>

<body>

    <div class="container">

        <table border="1">
            <?php
            
            // Inicializamos el contador y seleccionamos un emoji aleatorio
            $contador = 0;
            $codigoAleatorio = rand(128512, 128591); // Selecciona un código aleatorio entre 128512 y 128591
            echo "Emoji aleatorio:  &#$codigoAleatorio;";
            echo '<p></p>';
            echo '<div class="titulo">';
            echo "Tabla de Emojis del 128512 al 128591";
            echo '</div>';
            echo '<tr>';
            for ($e = 1; $e <= 10; $e++) {
                echo '<th>' . " Columna " . $e .  '</th>';
            }
            echo '</tr>';

            // Generar la tabla de emojis
            for ($i = 128512; $i <= 128591; $i++) {
                // Determinar si se debe ocultar el contador y cambiar el fondo
                $esOcultado = $codigoAleatorio === $i;
                $claseCelda = $esOcultado ? 'grey' : '';
                $contadorTexto = $esOcultado ? '' : " -$contador"; 

                echo "<td class='emoji-box $claseCelda'> &#$i; $i $contadorTexto</td>";

                $contador++;

                // Si ya hay 10 emojis en la fila, cerrar fila y abrir una nueva
                if ($contador % 10 == 0) {
                    echo '</tr>';
                    if ($i < 128591) {
                        echo '<tr>';
                    }
                }
            }

            echo '</tr>'; // Cerrar última fila

            ?>
        </table>
        
        <div>
            <?php
            echo '<p></p>';
             // Mostrar el emoji aleatorio y su posición
             $posicion = $codigoAleatorio - 128512; // Calcular la posición en base al código
             echo "&#$codigoAleatorio; Está en la posición: $posicion";
             echo '<p></p>';
             echo "El array tiene 80 elementos";
            ?>
        </div>
    </div>

</body>

</html>
