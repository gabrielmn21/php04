<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da Semana</title>
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
        <label for="dia">Digite um número (1 a 7):</label>
        <input type="number" id="dia" name="dia" min="1" max="7" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia = $_POST['dia'];
        switch ($dia) {
            case 1:
                echo "Domingo";
                break;
            case 2:
                echo "Segunda-feira";
                break;
            case 3:
                echo "Terça-feira";
                break;
            case 4:
                echo "Quarta-feira";
                break;
            case 5:
                echo "Quinta-feira";
                break;
            case 6:
                echo "Sexta-feira";
                break;
            case 7:
                echo "Sábado";
                break;
            default:
                echo "Número inválido.";
                break;
        }
    }
    ?>
</body>
</html>
