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
        <h2>Questão 1: Antecessor de um Valor</h2>
    </header>

    <main>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor = $_POST['valor'];
        $valor_antecessor = $valor - 1;
        echo "O valor digitado é " . ($valor) . " e o antecessor deste valor é $valor_antecessor.";
    }
    ?>
     
    <form method="post">
        Digite um número: <input type="number" name="valor">
        <button type="submit">Calcular</button>
    </form>
    
    </main>
</body>


</html>