
var modalPedido = document.getElementById("Modal_Crear_Pedido");
var spanPedido = document.getElementsByClassName("close")[2];

spanPedido.onclick = function() {
    modalPedido.style.display = "none";
  }
  
window.onclick = function(event) {
    if (event.target == modalPedido) {
      modalPedido.style.display = "none";
    }
}

function crearPedido(id){
    modalPedido.style.display = "flex";
    var name = document.getElementById(`card_name_${id}`);
    var tel = document.getElementById(`card_tel_${id}`);
    var mail = document.getElementById(`card_mail_${id}`);
    var group = document.getElementById(`card_group_${id}`);

    name = name.innerText;
    var tel = tel.innerText;
    var mail = mail.innerText;
    var group = group.innerText;

    let html = `<input type="hidden" name="id" value="${id}" >
<p class="cliente-info-name">Nombre: ${name}</p>
    <input type="hidden" name="name" value="${name}" >
    <p class="cliente-info-tel">Telefono: ${tel}</p>
    <input type="hidden" name="tel" value="${tel}" >
    <p class="cliente-info-mail">Correo: ${mail}</p>
    <input type="hidden" name="mail" value="${mail}" >
`


    let clienteInfo = document.getElementById("cliente-info")
    clienteInfo.innerHTML = html
}






