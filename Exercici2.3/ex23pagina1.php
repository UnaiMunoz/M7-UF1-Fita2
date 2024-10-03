<?php
session_start();

// Check if a color has been selected and save it in the session
if (isset($_POST['color'])) {
    $_SESSION['color'] = $_POST['color'];
}

// Set a default color if none is selected
$backgroundColor = isset($_SESSION['color']) ? $_SESSION['color'] : '#ffffff'; // Default to white
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Selector de Skins</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>; 
            font-family: Arial, sans-serif;
            color: #333;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        .container {
            width: 300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selector de Skins</h1>
        <form method="post" action="">
            <label for="color">Selecciona un color:</label>
            <select name="color" id="color">
                <option value="#ffffff" <?php if ($backgroundColor == '#ffffff') echo 'selected'; ?>>Blanc</option>
                <option value="#ffcccb" <?php if ($backgroundColor == '#ffcccb') echo 'selected'; ?>>Rosa</option>
                <option value="#add8e6" <?php if ($backgroundColor == '#add8e6') echo 'selected'; ?>>Blau clar</option>
            </select>
            <input type="submit" value="Aplicar">
        </form>
    </div>
</body>
</html>
