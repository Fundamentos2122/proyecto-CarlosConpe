let nmax = 0;

document.addEventListener('DOMContentLoaded',addIdToCards);

function addIdToCards(){
    let cards = document.getElementsByClassName("card");
    let cardsButtons = document.getElementsByClassName("card_pedido");
    nmax = cards.length;
    for(var i = 0; i< cards.length; i++){
        cards[i].setAttribute("id", "card-"+i);
    }
    for(var i = 0; i< cards.length; i++){
        cardsButtons[i].setAttribute("id", "card-button-"+i);
    }
    for(var i = 0; i< cards.length; i++){
        cardsButtons[i].setAttribute("onclick", `crearPedido(${i})`);
    }
}

var card_names = document.getElementsByClassName('card_name');
var card_tels = document.getElementsByClassName('card_tel');
var card_mails = document.getElementsByClassName('card_mail');
var card_group = document.getElementsByClassName('card_group');
var card_pedido = document.getElementsByClassName('card_pedido');

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
    let name = card_names[id].textContent;
    let tel = card_tels[id].textContent;
    let mail = card_mails[id].textContent;
    let group = card_group[id].textContent;

    let html = `<p class="cliente-info-name">Nombre: ${name}</p>
    <p class="cliente-info-tel">Telefono: ${tel}</p>
    <p class="cliente-info-mail">Correo: ${mail}</p>
    <p class="cliente-info-group">Grupo: ${group}</p>`

    let clienteInfo = document.getElementById("cliente-info")
    clienteInfo.innerHTML = html
}






