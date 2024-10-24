<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de 1 a 10</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .number {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Contagem de 1 a 10</h1>
    <div>
        <?php
        $contador = 1;

        do {
            echo "<span class='number'>$contador</span>";
            $contador++;
        } while ($contador <= 10);
        ?>
    </div>
</body>
</html>
