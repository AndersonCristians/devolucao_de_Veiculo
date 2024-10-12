<?php

// definindo preço do combustível
$preco_combustivel = 4.89;

//define o consumo para cada modelo
$consumo_veiculos = [
    'Corrola Cross' => 16.8,
    'Creta 2.0' => 14.8,
    'T-Cross' => 14.0,
    'Tiggo 5x' => 11.5,
    'Versa' => 12.7
];
// Define o custo por quilômetro para cada modelo

$custo_km = [
    'Corrola Cross' => 6.00,
    'Creta 2.0' => 5.50,
    'T-Cross' => 5.70,
    'Tiggo 5x' => 3.90,
    'Versa' => 4.80
];

// Verifica se os cookies necessários estão definidos

if (isset($_COOKIE['nome_cliente']) && isset($_COOKIE['km_rodados']) && isset($_COOKIE['modelo_veiculo'])) {
    // Recupera os valores dos cookies
    $nome_cliente = $_COOKIE['nome_cliente'];
    $km_rodados = $_COOKIE['km_rodados'];
    $modelo_veiculo = $_COOKIE['modelo_veiculo'];

    // Calcula os litros de combustível consumidos com base no consumo do veículo
    $litros_consumidos = $km_rodados / $consumo_veiculos[$modelo_veiculo];
    // Obtém o custo por quilômetro para o modelo selecionado
    $custo_por_km = $custo_km[$modelo_veiculo];

    // Calcula o total a ser pago
    $total_a_pagar = ($litros_consumidos * $preco_combustivel) + ($km_rodados * $custo_por_km);

} else {
    // Se algum dos cookies necessários estiver faltando, redireciona para 'devolucao.php'

    header('Location: devolucao.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Resumo da Devolução</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <!-- Exibindo as informações!-->
    <div class="container">
        <h1>Resumo da Devolução</h1>
        <p>Nome do Cliente: <?php echo $nome_cliente; ?></p>
        <p>Carro Alugado:<?php echo $modelo_veiculo; ?></p>
        <p>Quilometragem Percorrida: <?php echo $km_rodados; ?> km</p>
        <p>Quantidade de Litros Consumidos: <?php echo number_format($litros_consumidos, 2) ?> L</p>
        <p>Custo por Quilômetro Rodado: R$ <?php echo number_format($custo_por_km, 2); ?></p>
        <p>Total a Pagar: R$ <?php echo number_format($total_a_pagar, 2); ?></p>

        <!-- botão para voltar à página de devolução -->

        <a class="button" name="btn_enviar" href='devolucao.php'> <button class="button">Voltar</button></a>

    </div>

</body>

</html>