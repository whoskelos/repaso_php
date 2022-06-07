<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 5</title>
    <style>
        body {
            background-color: #A1F0FA;
        }

        h1 {
            text-align: center;
        }

        .error {
            font-weight: bold;
            color: red;
        }

        .correct {
            font-weight: 600;
            color: green;
        }


        .legend {
            border: 3px solid #3EA9EF;
            background-color: #ffffff;
        }

        .formulario {
            border: 3px solid #3EA9EF;
        }
    </style>
</head>

<body>
    <h1>Datos personales 5 (Formulario)</h1>
    <form action="./form-2-5.php" method="post">
        <fieldset class="formulario">
            <legend class="legend">Formulario</legend>
            <table>
                <tr>
                    <td>Indique su edad: </td>
                </tr>
                <tr>
                    <td><b>Edad:</b>
                        <select name="edades">
                            <option value="...">...</option>
                            <option value="Menos de 20 años">Menos de 20 años</option>
                            <option value="Entre 20 y 39 años">Entre 20 y 39 años</option>
                            <option value="Entre 40 y 59 años">Entre 40 y 59 años</option>
                            <option value="60 años o más">60 años o más</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="enviar" value="Enviar">
                        <input type="reset" value="Borrar">
                    </td>
                </tr>
            </table>
        </fieldset>
        <?php
        if (isset($_POST['enviar'])) {
            $edades = $_POST['edades'];
            if (!empty($edades) && $edades != "...") {
                echo "<p class='correct'>Su edad está entre: ".$edades;
            }else{
                echo "<p class='error'>No ha seleccionado ninguna edad</p>";
            }
        }
        ?>
    </form>

</body>

</html>