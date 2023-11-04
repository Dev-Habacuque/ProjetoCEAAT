<?php
$host = 'localhost';
$bancodedados = 'login';
$usuario = 'root';
$senha = '';

// Conectar ao banco de dados
$conexao = new mysqli($host, $usuario, $senha, $bancodedados);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Verificar se os campos do formulário foram enviados]
if (isset($_POST['nome'], $_POST['tipo'], $_POST['descricao'])) {
    $nome = $conexao->real_escape_string($_POST['nome']);
    $tipo = $conexao->real_escape_string($_POST['tipo']);
    $descricao = $conexao->real_escape_string($_POST['descricao']);

    // Consulta SQL preparada para evitar injeção de SQL
    $sql = "INSERT INTO solicitacoes (usuario, tipo, descrição) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $nome, $tipo, $descricao);

        if ($stmt->execute()) {
            echo "Solicitação encaminhada com sucesso<br><a href='sistema.php'>Voltar</a>";
        } else {
            echo "Erro na execução da consulta: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conexao->error;
    }
} else {
    echo "Campos do formulário não foram enviados corretamente.";
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>