<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio: Sistema de Pontuação de Alunos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            color: #0056b3;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #004494;
        }
        .resultado {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .aprovado {
            color: green;
        }
        .reprovado {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Sistema de Pontuação de Alunos</h1>

    <form action="" method="post">
        <h2>Aluno 1</h2>
        Nome: <input type="text" name="aluno1_nome" required>
        Nota: <input type="number" name="aluno1_nota" min="0" max="10" required>

        <h2>Aluno 2</h2>
        Nome: <input type="text" name="aluno2_nome" required>
        Nota: <input type="number" name="aluno2_nota" min="0" max="10" required>

        <h2>Aluno 3</h2>
        Nome: <input type="text" name="aluno3_nome" required>
        Nota: <input type="number" name="aluno3_nota" min="0" max="10" required>

        <input type="submit" value="Calcular Resultados">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Receber os dados do formulário
        $alunos = [
            ['nome' => $_POST['aluno1_nome'], 'nota' => (float)$_POST['aluno1_nota']],
            ['nome' => $_POST['aluno2_nome'], 'nota' => (float)$_POST['aluno2_nota']],
            ['nome' => $_POST['aluno3_nome'], 'nota' => (float)$_POST['aluno3_nota']]
        ];

        $soma_notas = 0;
        $maior_nota = 0;
        $aluno_maior_nota = "";

        echo '<div class="resultado">';

        // Percorrer os alunos para calcular a média e verificar maior nota
        foreach ($alunos as $aluno) {
            $soma_notas += $aluno['nota'];

            // Condicional para aprovação
            if ($aluno['nota'] >= 7) {
                echo "<p class='aprovado'>{$aluno['nome']} foi <strong>aprovado</strong> com nota {$aluno['nota']}.</p>";
            } else {
                echo "<p class='reprovado'>{$aluno['nome']} foi <strong>reprovado</strong> com nota {$aluno['nota']}.</p>";
            }

            // Verificar maior nota
            if ($aluno['nota'] > $maior_nota) {
                $maior_nota = $aluno['nota'];
                $aluno_maior_nota = $aluno['nome'];
            }
        }

        // Calcular a média
        $media = $soma_notas / count($alunos);
        echo "<p>A média das notas é: <strong>$media</strong>.</p>";

        // Mostrar o aluno com maior nota
        echo "<p>O aluno com a maior nota é: <strong>$aluno_maior_nota</strong> com nota $maior_nota.</p>";

        echo '</div>';
    }
    ?>
</body>
</html>
