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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>

    <form method="post">
        Digite a duração do evento em segundos: <input type="number" name="segundos" min="0" required><br>
        <button type="submit">Converter</button>
    </form>


   <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $segundos = $_POST['segundos'];
        $horas = intdiv($segundos, 3600);
        $resto = $segundos % 3600;
        $minutos = intdiv($resto, 60);
        $segundos_restantes = $resto % 60;

        echo "O evento durou $horas horas, $minutos minutos e $segundos_restantes segundos.";
}
?>
     
    </main>
</body>


</html>