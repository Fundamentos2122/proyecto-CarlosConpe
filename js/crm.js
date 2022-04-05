var modal = document.getElementById("Modal_Crear_Prospecto");
var btn = document.getElementById("button_crear_prospecto");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    console.log("click")
  modal.style.display = "flex";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



var modalCliente = document.getElementById("Modal_Crear_Cliente");
var btnCliente = document.getElementById("button_crear_cliente");
var spanCliente = document.getElementsByClassName("close")[1];

btnCliente.onclick = function() {
  modalCliente.style.display = "flex";
}

spanCliente.onclick = function() {
  modalCliente.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modalCliente) {
    modalCliente.style.display = "none";
  }
}
