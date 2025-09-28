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
        <h2>Questão 03: Horas trabalhadas</h2>
    </header>

    <main>

    <form method="POST">
        Qual o valor da hora trabalhada? <input type="number" name="valor_da_hora_trabalhada" step="0.01" required> <br>
        Qual o quantitativo de horas trabalhadas no mês? <input type="number" name="horas_trabalhadas_dia" required> <br>
        <button type="submit">Calcule o salário</button>
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor_da_hora_trabalhada = $_POST['valor_da_hora_trabalhada'];
        $horas_trabalhadas_dia = $_POST['horas_trabalhadas_dia'];
        $valor_salario = $valor_da_hora_trabalhada * $horas_trabalhadas_dia;
    echo "O salário mensal é R$ $valor_salario";
    }
    
    ?>
     
    </main>
</body>


</html>