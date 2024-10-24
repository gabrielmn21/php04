<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Idade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input, button {
            padding: 10px;
            margin-top: 10px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="idade">Digite sua idade:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST['idade'];
        
        if ($idade <= 14) {
            echo "Você é uma criança.";
        } elseif ($idade > 14 && $idade < 30) {
            echo "Você é um adolescente.";
        } elseif ($idade >= 30 && $idade < 60) {
            echo "Você é um adulto.";
        } else {
            echo "Você é um idoso.";
        }
    }
    ?>
</body>
</html>
