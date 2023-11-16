<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Document</title>
        <link rel=\"stylesheet\" href=\"main.css\">
    </head>
    <body id=\"blk\">
        <img id=\"idblock\" src=\"assets/ad.png\">
        <p id=\"msgblk\">Você não pode acessar essa página, pois não está logado.</p>
        <div class=\"loginbk\">
            <p><a href=\"login.php\">Entrar</a></p>
        </div>
    </body>
    </html>");
}


?>