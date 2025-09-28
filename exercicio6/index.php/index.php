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
        <h2>Questão 06: Ordem Decrescente</h2>
    </header>

    <main>

    <form method="post" >
        Digite o primeiro número: <input type="number" name="numero1" required><br>
        Digite o segundo número: <input type="number" name="numero2" required><br>
        Digite o terceiro número: <input type="number" name="numero3" required><br>
        <button type="submit">Verificar o maior número</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $numero3 = $_POST['numero3'];

            $numeros = [$numero1, $numero2, $numero3];
            rsort($numeros);
            echo "Os números em ordem decrescente são: " . implode(", ", $numeros);
        }
    ?>
     
    </main>
</body>


</html>