<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>

    <form method="post">
        Digite o seu nome completo: <input type="text" name="nome" required><br>
        Digite a sua idade (anos completos): <input type="number" name="idade" min="0" required><br>
        <button type="submit">Calcular</button>
    </form>
     
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $dias = $idade * 365;
        
            echo "$nome, você já viveu aproximadamente $dias dias.";
        }
    ?>

    </main>
</body>


</html>