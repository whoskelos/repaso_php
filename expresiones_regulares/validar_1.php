<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de entrada de texto</title>
    <style>
        body {
            background-color: #F0DDFF;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Validación de entrada de texto</h1>
    <form action="./validar_1.php" method="POST">
        <table>
            <tr>
                <td>Escriba algo:</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="cadena" id="cadena">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Enviar" name="enviar">
                    <input type="reset" value="Borrar">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['enviar'])) {
        $cadena = $_POST['cadena'];

        //expresiones regulares
        $patron1 = "/^[a-z]+$/i";
        $patron2 = "/^[a-z]+[\s]{1}[a-z]+$/i";
        $patron3 = "/^[aeiou]+/";
        $patron4 = "/^[0-9]$/";
        $patron5 = "/^[02468]$/";
        $patron6 = "/^[6|9][0-9]{8}$/";
        $patron7 = "/^[0-9]{8}[a-z]$/i";
        $patron8 = "/^[0-9]{5}$/";

        if ($cadena != "") {
            echo "<p>1. La cadena <b>'" . $cadena . "'</b> <span style='color:red;'>no</span> está vacía</p>";
        } else {
            echo "<p>1. La cadena " . $cadena . " está vacía</p>";
        }

        if (preg_match($patron1, $cadena)) {
            echo "<p>2. La cadena <b>'" . $cadena . "'</b> es una única palabra</p>";
        } else {
            echo "<p>2. La cadena <b>'" . $cadena . "'</b> <span style='color:red;'>no</span> es una única palabra</p>";
        }

        if (preg_match($patron2, $cadena)) {
            echo "<p>3. La cadena <b>'" . $cadena . "'</b> son dos palabras</p>";
        } else {
            echo "<p>3. La cadena <b>'" . $cadena . "'</b> <span style='color:red;'>no</span> son dos palabras</p>";
        }

        if (preg_match($patron1, $cadena)) {
            echo "<p>4. La cadena <b>'" . $cadena . "'</b> es una única palabra que contiene carácteres ingleses</p>";
        } else {
            echo "<p>4. La cadena <b>'" . $cadena . "'</b> <span style='color:red;'>no</span> es una única palabra que contiene carácteres ingleses</p>";
        }

        if (preg_match($patron3, $cadena)) {
            echo "<p>5. La cadena <b>'" . $cadena . "'</b> es una cadena de vocales minúsculas sin acentuar en orden alfabético</p>";
        } else {
            echo "<p>5. La cadena <b>'" . $cadena . "'</b> <span style='color:red;'>no</span> es una cadena de vocales minúsculas sin acentuar en orden alfabético</p>";
        }

        if (preg_match($patron4, $cadena)) {
            echo "<p>6. La cadena <b>'" . $cadena . "'</b> es un único número</p>";
        } else {
            echo "<p>6. La cadena <b>'" . $cadena . "'</b> <span style='color:red;'>no</span> es un único número</p>";
        }

        if (preg_match($patron5, $cadena)) {
            echo "<p>7. La cadena <b>'" . $cadena . "'</b> es un único número par</p>";
        } else {
            echo "<p>7. La cadena <b>'" . $cadena . "'</b> <span style='color:red;'>no</span> es un único número par</p>";
        }

        if (preg_match($patron6, $cadena)) {
            echo "<p>8. La cadena <b>'" . $cadena . "'</b> es un teléfono de 9 cifras que empieza por 6 o 9</p>";
        } else {
            echo "<p>8. La cadena <b>'" . $cadena . "'</b> <span style='color:red;'>no</span> es un teléfono de 9 cifras que empieza por 6 o 9</p>";
        }

        if (preg_match($patron7, $cadena)) {
            echo "<p>9. La cadena <b>'" . $cadena . "'</b> es un número del DNI (de 1 a 8 números, con letra inglesa final mayúscula o sin ella) </p>";
        } else {
            echo "<p>9. La cadena <b>'" . $cadena . "'</b> <span style='color:red;'>no</span> es un número del DNI (de 1 a 8 números, con letra inglesa final mayúscula o sin ella) </p>";
        }

        if (preg_match($patron8, $cadena)) {
            echo "<p>10. La cadena <b>'" . $cadena . "'</b> es un código postal</p>";
        } else {
            echo "<p>10. La cadena <b>'" . $cadena . "'</b> <span style='color:red;'>no</span> es un código postal</p>";
        }








        echo "<p><a href='./validar_1.php'>Volver al formulario</a></p>";
    }
    ?>
</body>

</html>