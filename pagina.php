<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pagina.css">
</head>
<body>
    

    <?php
        echo "<div class='caja1'>";

            echo '<div class="caja2">';

                $altura = $_POST["altura"];
                $radio = $_POST["radio"];
                $pi = 3.14;
                echo "<p>El volumen del cilindro es: </p>", 3.14*$altura*($radio*$radio);

            echo "</div>";

        echo "</div>";
    ?>


</body>
</html>