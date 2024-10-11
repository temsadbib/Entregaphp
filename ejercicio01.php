<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

    <style>
        #contenedor {
            display: flex;
            flex-wrap: wrap; /* Permite que los divs se envuelvan */
            justify-content: space-between; /* Espacio entre los divs */
            background-color: #03c2fc;
        }
        .mi-div {
            border: 1px solid black;
            margin: 5px;
            padding: 5px;
            flex: 1 1 10%; /* Permite que los divs ocupen un 30% del ancho */
            box-sizing: border-box; /* Incluye el padding y el borde en el ancho total */
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    
    <div id="contenedor">
        <?php
        for ($i = 128512; $i <= 128591; $i++) {
            echo "<div class='mi-div'><p> &#$i</p><br><p> &amp#$i</p></div>";
        }
        ?>
    </div>
</body>
</html>
