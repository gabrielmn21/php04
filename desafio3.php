<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Ímpares de 500 a 1000</title>
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
    <h1>Números Ímpares de 500 a 1000</h1>
    <div>
        <?php
        for ($i = 501; $i < 1000; $i += 2) {
            echo "<span class='number'>$i</span>";
        }
        ?>
    </div>
</body>
</html>

