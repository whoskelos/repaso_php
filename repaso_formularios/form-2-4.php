<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 4</title>
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
    <h1>Datos personales 4 (Formulario)</h1>
    <form action="./form-2-4.php" method="post">
        <fieldset class="formulario">
            <legend class="legend">Formulario</legend>
            <table>
                <tr>
                    <td>Indique sus aficiones: </td>
                </tr>
                <tr>
                    <td>Aficiones:
                        <input type="checkbox" name="aficiones[]" value="el cine">Cine
                        <input type="checkbox" name="aficiones[]" value="la literatura">Literatura
                        <input type="checkbox" name="aficiones[]" value="la música">Música
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
            if (isset($_POST['aficiones'])) {
                $aficiones = $_POST['aficiones'];
            }
            if (!empty($aficiones)) {
                echo "<ul>";
                foreach ($aficiones as $aficion) {
                    echo "<li class='correct'>Le gusta: <b>" . $aficion . "</b></li>";
                }
                echo "</ul>";
                echo "<p><a href='./form-2-4.php'>Volver al formulario</a></p>";
            } else {
                echo "<p class='error'>No ha seleccionado ninguna afición</p>";
                echo "<p><a href='./form-2-4.php'>Volver al formulario</a></p>";
            }
        }
        ?>
    </form>

</body>

</html>