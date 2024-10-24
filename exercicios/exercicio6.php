<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo</title>
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
        .person {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Lista de Pessoas:</h2>
    <?php
    $pessoas = [
        "Ana" => 25,
        "Carlos" => 30,
        "Pedro" => 40
    ];
    
    foreach ($pessoas as $nome => $idade) {
        echo "<div class='person'>Nome: $nome, Idade: $idade</div>";
    }
    ?>
</body>
</html>
