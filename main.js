
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
  document.getElementById("activities").innerHTML = '<br><div class="mcontainer"><p>Qual o nome do programa?</p> <form id="default"> <input type="text"><br> <input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form></div>';
}

function reDeFis() {
  document.getElementById("activities").innerHTML = '<br><div class="mcontainer"><p>Faça um breve resumo do problema apresentado</p> <form id="default"><textarea></textarea><br><input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form></div>';
}
function inNoAp() {
  document.getElementById("activities").innerHTML = '<br><div class="mcontainer"><p>Selecione qual dispositivo será instalado:</p> <form id="default"> <input type="text"><br><input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form></div>';// Adicionar opções

}
function coImSc() {
  document.getElementById("activities").innerHTML = '<br><div class="mcontainer"><p>Faça um breve resumo do problema apresentado</p> <form id="default"> <input type="text"> <br><input type="submit" onclick="goBack()" value="Voltar"><input type="submit"></form></div>';
}
function goBack() {
  document.getElementById("activities").reload()

}
function aboutCreators() {
  document.getElementById("activities").innerHTML = '<div class="acontainer"><h3>Sobre o Desenvolvimento</h3><h4 id="aboutText">Site desenvolvido integralmente surporte técnico para colaboradores da escola e fins institucionais  </h4><h3>Lista de Developers:</h3><p><ul><li>Victor Trindade Cerqueira</li><li>Jeremias Habacuque</li></ul></p><h3>Integrantes do projeto</h3><p><ul><li>Antonio Carlos</li><li>Gabriel Costa</li><li>Geisiane Dias</li><li>Felipe Souza</li></ul</p></div>'
}

