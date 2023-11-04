<?php

include("protect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="head">
            <img src="assets/list_3161836.png" alt="" id="menu-button">
            <div id="menu">
                <ul>
                    <li>
                        <img src="assets/icons8-home-50.png">
                        <a href="sistema.php">HOME</a>
                    </li>
                    <li>
                        <img src="assets/icons8-about-30.png" alt="">
                        <a href="aboutCreators.php">SOBRE</a>
                    </li>
                    <li>
                        <img src="assets/logout.png" alt="">
                        <a href="logout.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
            <img id="logo_img" src="assets/ceaat logo.jpg" alt="">
            <h1 id="titulo">E-SOSTI CEAAT</h1>
        </div>
        <br>
        <div class="mcontainer">
            <p>Faça um breve resumo do problema apresentado</p>
            <form id="default" method="POST" action="cadasSolic.php">
                <input type="text" name="nome" value="<?php echo $_SESSION['nome']?>" hidden>
                <input type="text" name="tipo" value="Configuração de impressora" hidden> 
                <input type="text" name="descricao">
                <br><br>
                <a href="sistema.php">Voltar</a>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
    <div class="footer">
        Privacy / Do Not Sell My Info © Fale Conosco: (71) 99999-9999
    </div>
    <script src="main.js"></script>
</body>
</html>