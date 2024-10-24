<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número</title>
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
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        if ($numero > 0) {
            echo "O número é positivo!";
        } elseif ($numero < 0) {
            echo "O número é negativo!";
        } else {
            echo "O número é zero!";
        }
    }
    ?>
</body>
</html>
