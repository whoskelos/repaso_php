<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 3</title>
    <style>
        body {
            background-color: #7CD4D0;
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
    </style>
</head>

<body>
    <h1>Datos Personales 3 (Formulario)</h1>

    <form action="./form-2-3.php" method="post">
        <table>
            <tr>
                <td>Indique su sexo:</td>
            </tr>
            <tr>
                <td>Sexo:
                    <input type="radio" name="sexo" value="hombre" id="hombre">Hombre
                    <input type="radio" name="sexo" value="mujer" id="mujer">Mujer
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Enviar" name="enviar">
                    <input type="reset" value="Borrar">
                </td>
            </tr>
        </table>
        <?php
        if (isset($_POST['enviar'])) {
            if (isset($_POST['sexo'])) {
                $sexo = $_REQUEST['sexo'];
            }

            $errores = [];

            if (empty($sexo)) {
                $errores[] = "No ha indicado su sexo";
            }

            if (empty($errores)) {
                echo "<p class='correct'>Es un " . $sexo . "</p>";
                echo "<p><a href='./form-2-3.php'>Volver al formulario</a></p>";
            } else {
                echo "<ul>";
                for ($i = 0; $i < count($errores); $i++) {
                    echo "<li class='error'>" . $errores[$i] . "</li>";
                }
                echo "</ul>";
            }
        }
        ?>
    </form>
</body>

</html>