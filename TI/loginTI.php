<?php

include('config.php');

if(isset($_POST['matricula']) || isset($_POST['senha'])) {

    if(strlen($_POST['matricula']) == 0){
        echo "Preencha sua Matrícula";
    }else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    }else {

        $email = $mysqli->real_escape_string($_POST['matricula']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuariosTI WHERE matricula ='$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL") .$mysqli->error;

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            
            $usuario = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header('Location: sistemaTI.php');

        } else {
            echo "Falha ao logar! Matrícula ou senha incorretas";
        }

    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginTI.css">
</head>
<body>
    <div class="page">
        <form method="POST" class="formLogin">
            <h1>Login Admin</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="matricula">E-mail</label>
            <input type="number" placeholder="Digite sua Matrícula" autofocus="true" name="matricula"/>
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite seu e-mail" name="senha"/>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
    
</body>
</html>