<?php

include("protect.php");

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
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

        <div class="section">
            <section id="activities">
                <h1 id="solicitacao">Seja bem vindo, <?php echo $_SESSION['nome'];?>.</h1>
                <h2 id="solicitacao">Selecione seu tipo de solicitação:</h2>

                <div class="acontainer">
                    <div class="opcoes">
                        <a href="inPrSof.php">Instalação de Programa/Software.</a>
                        <br><br>  
                        <a href="reDeFis.php">Reparação de defeito físico.</a>
                        <br><br>
                        <a href="inNoAp.php">Instalação de novo aparelho.</a>
                        <br><br>
                        <a href="coImSc.php">Configuração de Impressora/Scan.</a>
                    </div>
                </div>
            </section>

        </div>
        <div class="footer">
            Privacy / Do Not Sell My Info © Fale Conosco: (71) 99999-9999
        </div>

    </div>
    <script src="main.js"></script>
</body>

</html>