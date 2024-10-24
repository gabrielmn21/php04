<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números de 100 a 200</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .number {
            display: inline-block;
            background-color: #007BFF;
            color: white;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Números de 100 a 200 (incremento de 2 em 2)</h1>
    <div>
        <?php
        for ($i = 100; $i <= 200; $i += 2) {
            echo "<span class='number'>$i</span>";
        }
        ?>
    </div>
</body>
</html>

