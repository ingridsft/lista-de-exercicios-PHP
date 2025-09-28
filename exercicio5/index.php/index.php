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
        <h2>Questão 05: Maior de Três Números</h2>
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

            if ($numero1 !== false && $numero2 !== false && $numero3 !== false) {
            $maiorNumero = max($numero1, $numero2, $numero3);
            }
        echo "O maior número é: " . $maiorNumero;
        }
    ?>
     
    </main>
</body>


</html>