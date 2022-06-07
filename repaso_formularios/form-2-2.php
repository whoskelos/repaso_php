<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
    <style>
        body {
            background-color: #7CD4D0;
        }

        h1 {
            text-align: center;
        }

        .error{
            font-weight: bold;
            color: red;
        }
        .correct{
            font-weight: 600;
            color: green;
        }
    </style>
</head>

<body>
    <h1>Datos Personales 2 (Formulario)</h1>
    <form action="./form-2-2.php" method="post">
        <table>
            <tr>
                <td>Escriba su nombre: </td>
                <td><input type="text" name="nombre" id="nombre"></td>
            </tr>
            <tr>
                <td>Escriba sus apellidos: </td>
                <td><input type="text" name="apellidos" id="apellidos"></td>
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
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];

                $errores = [];
                if (empty($nombre)) {
                    $errores[] = "El campo nombre está vacío";
                }

                if (empty($apellidos)) {
                    $errores[] = "El campo apellidos está vacío";
                }

                if (empty($errores)) {
                    echo "<p class='correct'>Su nombre es: ".$nombre."</p>";
                    echo "<p class='correct'>Sus apellidos son: ".$apellidos."</p>";
                    echo "<p><a href='./form-2-2.php'>Volver al formulario</a></p>";
                }else {
                    echo "<ul>";
                    for ($i=0; $i < count($errores); $i++) { 
                        echo "<li class='error'>".$errores[$i]."</li>";
                    }
                    echo "</ul>";
                }
            }
        ?>
    </form>
</body>
</html>