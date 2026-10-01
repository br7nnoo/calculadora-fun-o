<?php

$resultado = '-';
if(!empty($_GET)){
    if($_GET["operacao"] == 'somar'){
        $resultado = $_GET["numero1"] + $_GET["numero2"];
    } elseif ($_GET["operacao"] == 'subtrair') {
        $resultado = $_GET["numero1"] - $_GET["numero2"];
    } elseif ($_GET["operacao"] == 'multiplicar') {
        $resultado = $_GET["numero1"] * $_GET["numero2"];
    } elseif ($_GET["operacao"] == 'dividir') {
        $resultado = $_GET["numero1"] / $_GET["numero2"];
    }elseif ($_GET["operacao"] == 'elevar') {
        $resultado = $_GET["numero1"] ** $_GET["numero2"];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculadora</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            padding: 40px;
        }

        .calculator {
            width: 350px;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
        }

        input,
        select,
        button {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        button {
            cursor: pointer;
        }

        #resultado {
            margin-top: 15px;
            padding: 12px;
            background: #eee;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="calculator">

    <h1>Calculadora</h1>

    <form id="calculadora" method="get">

        <label for="numero1">
            Número 1
        </label>

        <input
            type="number"
            id="numero1"
            name="numero1"
            step="any"
            required
        >

        <label for="numero2">
            Número 2
        </label>

        <input
            type="number"
            id="numero2"
            name="numero2"
            step="any"
            required
        >

        <label for="operacao">
            Operação
        </label>

        <select id="operacao" name="operacao">
            <option value="somar">+</option>
            <option value="subtrair">-</option>
            <option value="multiplicar">*</option>
            <option value="dividir">/</option>
            <option value="elevar">**</option>
        </select>

        <button type="submit">
            Calcular
        </button>

    </form>

    <div id="resultado">
        Resultado: <?php echo $resultado; ?> 
    </div>

</div>
</body>
</html>
