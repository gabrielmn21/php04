<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comando Continue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        h2 {
            margin-bottom: 20px;
        }
        .even {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Números pares de 1 a 10:</h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 != 0) {
            continue; // Pula números ímpares
        }
        echo "<div class='even'>$i</div>";
    }
    ?>
</body>
</html>
