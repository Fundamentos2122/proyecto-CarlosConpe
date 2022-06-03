var modal = document.getElementById("Modal_Crear_Prospecto");
var btn = document.getElementById("button_crear_prospecto");
var span = document.getElementsByClassName("close")[0];

var modalCliente = document.getElementById("Modal_Crear_Cliente");
var btnCliente = document.getElementById("button_crear_cliente");
var spanCliente = document.getElementsByClassName("close")[1];

var modalProfile = document.getElementById("Modal_Profile");

btn.onclick = function() {
  modal.style.display = "flex";
}

span.onclick = function() {
  modal.style.display = "none";
}

btnCliente.onclick = function() {
  modalCliente.style.display = "flex";
}

spanCliente.onclick = function() {
  modalCliente.style.display = "none";
}