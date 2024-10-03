<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comprovació de Contrasenya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            text-align: center;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Comprovació de Contrasenya</h1>
    <form method="post" action="ex24pagina2.php">
        <label for="contrasenya1">Contrasenya:</label><br><br>
        <input type="password" name="contrasenya1" id="contrasenya1" required>
        <br><br>
        <label for="contrasenya2">Repetir Contrasenya:</label><br><br>
        <input type="password" name="contrasenya2" id="contrasenya2" required>
        <br><br>
        <input type="submit" value="Comprovar">
    </form>
</div>

</body>
</html>
