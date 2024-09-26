<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generador de Links</title>
</head>
<body>
    <h1>Generador de Links</h1>
    <?php
        $quantitat = $_POST['quantitat'];

        for ($i = 1; $i <= $quantitat; $i++) {
            echo "<p><a href='Exercici_2.3.php?comanda=$i'>Comanda $i</a></p>";
        }
    ?>
</body>
</html>
