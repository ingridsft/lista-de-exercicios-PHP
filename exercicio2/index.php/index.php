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
        <h2>Questão 02: Metros para centimetros</h2>
    </header>

    <main>

     
    <form method="post">
        Insira um valor em metros: <input type="number" name="metros" step="any" required>
        <button type="submit">Conversor</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $metros = $_POST['metros'];
        $centimetros = $metros * 100;
        echo "Os metros digitados é $metros. No qual, equivalem a $centimetros centímetros";
    }
    ?>

    </main>
</body>


</html>