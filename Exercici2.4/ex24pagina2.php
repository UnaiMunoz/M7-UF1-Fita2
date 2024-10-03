<?php
// Recuperar las contraseñas enviadas
$contrasenya1 = $_POST['contrasenya1'] ?? '';
$contrasenya2 = $_POST['contrasenya2'] ?? '';

$errors = [];

// Comprobar que las contraseñas coincidan
if ($contrasenya1 !== $contrasenya2) {
    $errors[] = "ERROR: les contrasenyes han de coincidir.";
}

// Comprobar que la contrasenya contenga al menos un número
if (!preg_match('/[0-9]/', $contrasenya1)) {
    $errors[] = "ERROR: la contrasenya ha de tenir al menys un número.";
}

// Mostrar els missatges d'error o una confirmació
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p class='error'>$error</p>";
    }
} else {
    echo "<p>Contrasenya correcta!</p>";
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resultat de Comprovació</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<a href="ex24pagina1.php">Torna enrere</a>

</body>
</html>
