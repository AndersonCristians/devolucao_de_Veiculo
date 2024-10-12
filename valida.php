<?php

// verificar se as informações não chegaram vazias
if (!empty($_GET['nome_cliente']) && !empty($_GET['km_rodados']) && !empty($_GET['modelo_veiculo'])) {
    // Define um cookie para cada nome com um tempo de expiração de 30 dias
    setcookie('nome_cliente', $_GET['nome_cliente'], time() + (86400 * 30), "/");
    setcookie('km_rodados', $_GET['km_rodados'], time() + (86400 * 30), "/");
    setcookie('modelo_veiculo', $_GET['modelo_veiculo'], time() + (86400 * 30), "/");

    // Redireciona para a página 'resumo.php'
    header('Location: resumo.php');
} else {
    // Se alguma informação estiver faltando ou vazia:
    foreach ($_COOKIE as $key => $value) {
        // Deleta os cookie
        setcookie($key, '', time() - 3600, "/");
    }
    // Redireciona para a página 'devolucao.php'

    header('Location: devolucao.php');
}
?>