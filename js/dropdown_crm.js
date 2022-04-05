var card_drops = document.getElementsByClassName('card_drop');

var card_tels = document.getElementsByClassName('card_tel');
var card_mails = document.getElementsByClassName('card_mail');
var card_group = document.getElementsByClassName('card_group');
var card_pedido = document.getElementsByClassName('card_pedido');

for(let i = 0; i < card_drops.length; i++) {
  card_drops[i].addEventListener("click", function(){
    card_tels[i].classList.toggle("Client_Show");
    card_mails[i].classList.toggle("Client_Show");
    card_group[i].classList.toggle("Client_Show");
    card_pedido[i].classList.toggle("Client_Show");
  })
}


function classToggle(classn, id) {
    card_tels[id].classList.toggle(classn);
    card_mails[id].classList.toggle(classn);
    card_group[id].classList.toggle(classn);
    card_pedido[id].classList.toggle(classn);
}



