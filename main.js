const mainText = '<h2>Solicitação:</h2><ol><li onclick="inPrSof()">Instalação de Programa/Software.</li><li onclick="reDeFis()">Reparação de defeito físico.</li><li onclick="inNoAp()">Instalação de novo aparelho.</li><li onclick="coImSc()">Configuração de Impressora/Scan</li></ol>'


function inPrSof(){
    document.getElementById("activities").innerHTML = '<h3>Qual o nome do programa?</h3> <br> <form><input type="text"><br><input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form>';
}

function reDeFis(){
    document.getElementById("activities").innerHTML = '<h3>Faça um breve resumo do problema apresentado</h3> <br> <form><textarea></textarea><br><input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form>';
}
function inNoAp(){
    document.getElementById("activities").innerHTML = '<h3>Selecione qual dispositivo será instalado:</h3> <br> <form><br> <input type="text"><br><input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form>';// Adicionar opções

}
function coImSc(){
    document.getElementById("activities").innerHTML = '<h3>Faça um breve resumo do problema apresentado</h3> <br> <input type="text"><form><br><input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form>';
}
function goBack(){
    document.getElementById("activities").innerHTML = mainText
    
}

