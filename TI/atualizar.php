<?php
// Seu código PHP para conectar ao banco de dados e atualizar o estado do botão
$host = 'localhost';
$bancodedados = 'login';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($host, $usuario, $senha, $bancodedados);

// Verifique se houve um erro na conexão
if (mysqli_connect_errno()) {
    echo "Falha na conexão: " . mysqli_connect_error();
}

if (isset($_POST['submit'])) {
    // Obtenha o ID do botão do formulário
    $id = $_POST['id'];

    // Atualize o estado do botão para 'concluído'
    $atualizar = mysqli_query($conexao, "UPDATE solicitacoes SET situacao = 'concluido' WHERE id = $id");

    if ($atualizar) {
        echo "Estado do botão atualizado para 'concluído'.";
    } else {
        echo "Erro ao atualizar o estado do botão: " . mysqli_error($conexao);
    }
}

// Feche a conexão com o banco de dados
mysqli_close($conexao);
?>
 