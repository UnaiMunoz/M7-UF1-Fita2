<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fita 2</title>
</head>
<body>

    <h2>Login</h2>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="userName">User: </label>
        <input type="text" name="userName" placeholder="ej: Unai"required /><br><br>

        <label for="userPassword">Password: </label>
        <input type="password" name="userPassword" required /><br><br>

        <input type="submit">
    </form>
        <?php
        $usuaris_valids = [
            "Pepe123" => "Pepe123",
            "Aurora123" => "Aurora123",
            "Marc123" => "Marc123"
        ];

        $missatge = "";

        if (isset($_POST["userName"]) && isset($_POST["userPassword"])) {

            $usuari = $_POST['userName'];
            $contrasenya = $_POST['userPassword'];

            if (array_key_exists($usuari, $usuaris_valids) && $usuaris_valids[$usuari] === $contrasenya) {
                $missatge = "Login correcte!";
            } else {
                $missatge = "Login incorrecte!";
            }
        }
        ?>
    <p><?php echo $missatge; ?></p>

</body>
</html>