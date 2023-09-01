<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <form method="post" action="">
        <div class="calculator">
            <h1>Calculadora</h1>
            <div class="numbers">
                <p>
                    <label for="numero">Número 1:</label>
                    <input type="text" name="num1">
                </p>

                <p>
                    <label for="numero">Número 2:</label>
                    <input type="text" name="num2">
                </p>
            </div>

            <div class="operations">
                <label for="operation" class="name">Escolha a operação:</label>
                <p>
                    <input type="checkbox" name="operacao" value="soma"> Soma
                </p>
                <p>
                    <input type="checkbox" name="operacao" value="subtracao"> Subtração
                </p>
                <p>
                    <input type="checkbox" name="operacao" value="multiplicacao"> Multiplicação
                </p>
                <p>
                    <input type="checkbox" name="operacao" value="divisao"> Divisão
                </p>
            </div>

            <div>
                <input type="submit" name="total" class="total">
            </div>

            <div>
                <input type="reset" class="resetAll">
            </div>
        </div>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["num1"];
        $number2 = $_POST["num2"];
        $operation = $_POST["operacao"];

        if ($operation == "soma") {
            $result = $number1 + $number2;
        } else if ($operation == "subtracao") {
            $result = $number1 - $number2;
        } else if ($operation == "multiplicacao") {
            $result = $number1 * $number2;
        } else {
            $result = $number1 / $number2;
        }
    }

    echo "O resultado é: $result .";
    ?>
</body>

</html>