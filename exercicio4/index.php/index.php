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
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>

    <form method="post">
        Digite o tamanho, em metros quadrados, da área a ser pintada: <input type="number" name="area_pintada" step="0.01" required><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $area_pintada = $_POST['area_pintada'];
        $litros_tinta = $area_pintada / 3;
        echo "Você precisará comprar " . $litros_tinta . " litros de tinta para pintar $area_pintada m².";
    }

    ?>
     
    </main>
</body>


</html>