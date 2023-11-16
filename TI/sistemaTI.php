<?php

include_once("config.php");

include("protectTI.php");

$sql = "SELECT * FROM solicitacoes ORDER BY id DESC";

$result = $mysqli->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <link rel="stylesheet" href="mainTI.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="head">
            <img src=".USER/assets/list_3161836.png" alt="" id="menu-button">
            <div id="menu">
                <ul>
                    <li>
                        <img src="assets/logout.png" alt="">
                        <a href="logoutTI.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
            <img id="logo_img" src="assets/ceaat logo.jpg" alt="">
            <h1 id="titulo">E-SOSTI CEAAT</h1>
        </div>

        <div class="section">
            <section id="activities">
                <h1 id="solicitacao">Seja bem vindo(a),
                    <?php echo $_SESSION['nome']; ?>.
                </h1>
                <h2 id="solicitacao">Solicitações feitas:</h2>

                <div class="acontainer">
                    <table class="table" border="1px">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Usuário</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Situação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($user_data = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>".$user_data['id']."</td>";
                                    echo "<td>".$user_data['usuario']."</td>";
                                    echo "<td>".$user_data['tipo']."</td>";
                                    echo "<td>".$user_data['descrição']."</td>";
                                    echo "<td>".$user_data['situacao']."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
        <div class="footer">
            Privacy / Do Not Sell My Info © Fale Conosco: (71) 99999-9999
        </div>

    </div>
    <script src="mainTI.js"></script>
</body>

</html>