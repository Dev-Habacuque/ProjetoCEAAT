const mainText = '<p>Solicitação:</p><ol><li onclick="inPrSof()">Instalação de Programa/Software.</li><li onclick="reDeFis()">Reparação de defeito físico.</li><li onclick="inNoAp()">Instalação de novo aparelho.</li><li onclick="coImSc()">Configuração de Impressora/Scan</li></ol>'

var menuButton = document.getElementById("menu-button");
var menu = document.getElementById("menu");

menuButton.addEventListener("click", function () {
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
});

function inPrSof() {
  document.getElementById("activities").innerHTML = '<p>Qual o nome do programa?</p> <form id="default"> <input type="text"><br> <input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form>';
}

function reDeFis() {
  document.getElementById("activities").innerHTML = '<p>Faça um breve resumo do problema apresentado</p> <form id="default"><textarea></textarea><br><input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form>';
}
function inNoAp() {
  document.getElementById("activities").innerHTML = '<p>Selecione qual dispositivo será instalado:</p> <form id="default"> <input type="text"><br><input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form>';// Adicionar opções

}
function coImSc() {
  document.getElementById("activities").innerHTML = '<p>Faça um breve resumo do problema apresentado</p> <form id="default"> <input type="text"> <br><input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form>';
}
function goBack() {
  document.getElementById("activities").innerHTML = mainText

}
function aboutCreators() {
  document.getElementById("activities").innerHTML = '<h3>Sobre o Desenvolvimento</h3><p>Site desenvolvido integralmente surporte técnico para colaboradores da escola e fins institucionais  </p><h3>Lista de Developers:</h3><p><ul><li>Victor Trindade Cerqueira</li><li>Jeremias Habacuque</li></ul></p><h3>Integrantes do projeto</h3><p><ul><li>Antonio Carlos</li><li>Gabriel Costa</li><li>Geisiane Dias</li><li>Felipe Souza</li></ul</p>'
}

