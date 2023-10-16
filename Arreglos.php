<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda y Ordenamiento "Arreglo de Frutas"</title>
    <style>
        h1 {
            font-family: cursive, sans-serif;
            color: blueviolet;
        }
        /* Estilo para el formulario */
        form {
            padding: 10px;
        }
        /* Estilo para etiquetas */
        label {
            display: block;
            margin-bottom: 5px;
        }
        /* Estilo para campos de entrada y select */
        input[type="text"],
        select {
            width: 10%; /* Reducir el ancho de los campos de entrada al 20% del contenedor */
            padding: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Búsqueda y Ordenamiento "Arreglo de Frutas"   
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgh8WXcF84UpoMcp31xsC-NKUnusFW2uYkkg&usqp=CAU" alt="Frutas" style="width: 200px; height: auto;"></h1>

    

    <?php
    // Definimos un arreglo de frutas
    $frutas = array("Manzana", "Plátano", "Naranja", "Pera", "Uva", "Sandia");

    // Mostrar los valores base
    echo "Valores base en el arreglo de frutas:<br>";
    foreach ($frutas as $fruta) {
        echo $fruta . "<br>";
    }
    ?>

    <form method="post">
        <label for="valor">Fruta a buscar:</label>
        <input type="text" name="valor" id="valor">
        <label for="orden">Ordenar:</label>
        <select name="orden" id="orden">
            <option value="ascendente">Ascendente</option>
            <option value="descendente">Descendente</option>
        </select>
        <input type="submit" value="Buscar y Ordenar">
    </form>

    <?php
    // Verificamos si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frutaBuscada = $_POST["valor"];
        $orden = $_POST["orden"];

        // Realizamos la búsqueda
        $encontrada = false;
        foreach ($frutas as $fruta) {
            if ($fruta === $frutaBuscada) {
                $encontrada = true;
                break;
            }
        }

        // Ordenamos los datos
        if ($orden == "ascendente") {
            sort($frutas);
        } elseif ($orden == "descendente") {
            rsort($frutas);
        }

        // Mostramos el resultado
        if ($encontrada) {
            echo "La fruta $frutaBuscada se encontró en el arreglo.<br>";
        } else {
            echo "La fruta $frutaBuscada no se encontró en el arreglo.<br>";
        }

        echo "Arreglo de frutas ordenadas de manera $orden:<br>";
        foreach ($frutas as $fruta) {
            echo $fruta . "<br>";
        }
    }
    ?>
</body>
</html>
