let states = document.getElementsByTagName("select")
let cardsGlobal = document.getElementsByClassName("card")
let cardsCat = document.getElementsByClassName("cards")
var modal = document.getElementById("Modal_Pedido");
var modal1 = document.getElementById("Modal_Pedido_Proceso");
var modal2 = document.getElementById("Modal_Pedido_Proceso_Etapa");
var span = document.getElementsByClassName("close")[0]

document.addEventListener('DOMContentLoaded',addIdToCards);
document.addEventListener('DOMContentLoaded',addColorStateToCards);
document.addEventListener('DOMContentLoaded',loadModals);


function addIdToCards(){
    let cards = document.getElementsByClassName("card");
    for(var i = 0; i< cards.length; i++){
        cards[i].setAttribute("id", "card-"+i);
    }
    for(var i = 0; i< states.length; i++){
        states[i].setAttribute("onchange", `color(${i})`);
    }
}

function addColorStateToCards(){
    for(var i = 0; i< states.length; i++){
        if(states[i].value === "terminado"){
            states[i].style.backgroundColor = "rgb(177, 241, 188)"
            states[i].style.color = "rgb(21, 85, 15)"
        } else if(states[i].value === "enproceso"){
            states[i].style.backgroundColor = "rgb(230, 238, 158)"
            states[i].style.color = "rgb(84, 85, 15)"
        } else {
            states[i].style.backgroundColor = "rgb(226, 145, 145)"
            states[i].style.color = "rgb(85, 15, 15)"
        }

    }
}

function color(id){

    let cardChanged = document.getElementById(`card-${id}`)
    let cardOptionsChanged = cardChanged.getElementsByClassName("card_fase");
    let cardSelectTagChanged = cardOptionsChanged[0].getElementsByTagName("select");
    cardChanged.remove();
    if(cardSelectTagChanged[0].value === "terminado"){
        cardSelectTagChanged[0].style.backgroundColor = "rgb(177, 241, 188)"
        cardSelectTagChanged[0].style.color = "rgb(21, 85, 15)"
        cardSelectTagChanged[0].innerHTML = `<option value="enrevision">Revisión</option>
        <option value="enproceso">Proceso</option>
        <option value="terminado" selected >Hecho</option>`
        cardsCat[2].innerHTML = cardsCat[2].innerHTML + cardChanged.outerHTML;
    } else if(cardSelectTagChanged[0].value === "enproceso"){
        cardSelectTagChanged[0].style.backgroundColor = "rgb(230, 238, 158)"
        cardSelectTagChanged[0].style.color = "rgb(84, 85, 15)"
        cardSelectTagChanged[0].innerHTML = `<option value="enrevision">Revisión</option>
        <option value="enproceso" selected>Proceso</option>
        <option value="terminado">Hecho</option>`
        cardsCat[1].innerHTML = cardsCat[1].innerHTML + cardChanged.outerHTML;
    } else if(cardSelectTagChanged[0].value === "enrevision"){
        cardSelectTagChanged[0].style.backgroundColor = "rgb(226, 145, 145)"
        cardSelectTagChanged[0].style.color = "rgb(85, 15, 15)"
        cardSelectTagChanged[0].innerHTML = `<option value="enrevision" selected>Revisión</option>
        <option value="enproceso">Proceso</option>
        <option value="terminado">Hecho</option>`
        cardsCat[0].innerHTML = cardsCat[0].innerHTML + cardChanged.outerHTML;
    }

    loadModals();

}



function loadModals(){
    let cardChanged = document.getElementsByClassName(`card`);
    let cardSelectTagChanged = document.getElementsByTagName("select");
    let btn = document.getElementsByClassName("card_name");
    let btn1 = document.getElementsByClassName("card_tel");
    let btn2 = document.getElementsByClassName("card_mail");
    let btn3 = document.getElementsByClassName("card_id");
    let btn4 = document.getElementsByClassName("card_opciones");

    for (var i = 0; i < btn.length; i++) {
        btn[i].setAttribute("onclick", ``);
        btn1[i].setAttribute("onclick", ``);
        btn2[i].setAttribute("onclick", ``);
        btn3[i].setAttribute("onclick", ``);
        btn4[i].setAttribute("onclick", ``);
      }

    for (var i = 0; i < btn.length; i++) {
        if (cardSelectTagChanged[i].value === "enrevision"){
            btn[i].setAttribute("onclick", `changeDisplayShowModal(${cardChanged[i].id.substring(5,cardChanged[0].length)})`);
            btn1[i].setAttribute("onclick", `changeDisplayShowModal(${cardChanged[i].id.substring(5,cardChanged[0].length)})`);
            btn2[i].setAttribute("onclick", `changeDisplayShowModal(${cardChanged[i].id.substring(5,cardChanged[0].length)})`);
            btn3[i].setAttribute("onclick", `changeDisplayShowModal(${cardChanged[i].id.substring(5,cardChanged[0].length)})`);
            btn4[i].setAttribute("onclick", `changeDisplayShowModal(${cardChanged[i].id.substring(5,cardChanged[0].length)})`);
        }
      }

      for (var i = 0; i < btn.length; i++) {
        if (cardSelectTagChanged[i].value === "enproceso" || cardSelectTagChanged[i].value === "terminado"){
            btn[i].setAttribute("onclick", `changeDisplayShowModal1(${cardChanged[i].id.substring(5,cardChanged[0].length)})`);
            btn1[i].setAttribute("onclick", `changeDisplayShowModal1(${cardChanged[i].id.substring(5,cardChanged[0].length)})`);
            btn2[i].setAttribute("onclick", `changeDisplayShowModal1(${cardChanged[i].id.substring(5,cardChanged[0].length)})`);
            btn3[i].setAttribute("onclick", `changeDisplayShowModal1(${cardChanged[i].id.substring(5,cardChanged[0].length)})`);
            btn4[i].setAttribute("onclick", `changeDisplayShowModal1(${cardChanged[i].id.substring(5,cardChanged[0].length)})`);
        }
      }
}

function closeModal() {
  modal.style.display = "none";
}

function closeModal1() {
    modal1.style.display = "none";
  }

function closeModal2() {
    modal2.style.display = "none";
    preventDefault();
  }
  

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}


  


function changeDisplayShowModal(i){
        modal.style.display = "flex";
        modal.innerHTML = `<div class="modal-content" id="modalPedido">
        <span class="close" onclick="closeModal()">&times;</span>
        <form class="form_login_spaces">
            <h3>Pedido: Revisión</h3>
            <h4>ID: ${i}</h4>
            <div class="card">
                <div class="card_info_basica">
                    <img src="img/Icons/check-mark.png" alt="icon" >
                    <h5>Información Básica</h5>
                    <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                </div>
                <div class="card_info_basica_expanded"></div>
                <div class="card_aspectos">
                    <img src="img/Icons/check-mark.png" alt="icon">
                    <h5>Aspectos Generales</h5>
                    <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                </div>
                <div class="card_aspectos_expanded"></div>
                <div class="colores">
                    <img src="img/Icons/check-mark.png" alt="icon">
                    <h5>Colores</h5>
                    <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                </div>
                <div class="colores_expanded"></div>
                <div class="equipos">
                    <img src="img/Icons/work-process.png" alt="icon">
                    <h5>Equipo</h5>
                    <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                </div>
                <div class="equipos_expanded"></div>
                <div class="referencias">
                    <img src="img/Icons/delete-button.png" alt="icon">
                    <h5>Referencias</h5>
                    <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                </div>
                <div class="referencias_expanded"></div>
            </div>
        </form>
    </div>` 
    
    eventDrops();
    
}

function changeDisplayShowModal1(i){
    modal1.style.display = "flex";
    modal1.innerHTML = `<div class="modal-content" id="modalPedidoProceso">
    <span class="close" onclick="closeModal1()">&times;</span>
    <form class="form_login_spaces">
        <h3>Pedido: Proceso</h3>
        <h4>ID: ${i}</h4>
        <div class="card">
            <div class="sub-card-process">
                <img src="img/Icons_Process/1.svg" alt="icon" onclick="ModalProcesoUpload(${i},1)">
                <h5>Pago Diseño</h5>
            </div>
            <span class="divider"></span>
            <div class="sub-card-process">
                <img src="img/Icons_Process/2.png" alt="icon" onclick="ModalProcesoUpload(${i},2)">
                <h5>Diseño Terminado</h5>
            </div>
            <span class="divider"></span>
            <div class="sub-card-process">
                <img src="img/Icons_Process/3.png" alt="icon" onclick="ModalProcesoUpload(${i},3)">
                <h5>Cotización</h5>
            </div>
            <span class="divider"></span>
            <div class="sub-card-process">
                <img src="img/Icons_Process/4.svg" alt="icon" onclick="ModalProcesoUpload(${i},4)">
                <h5>Pago Cotización</h5>
            </div>
            <span class="divider"></span>
            <div class="sub-card-process">
                <img src="img/Icons_Process/5.svg" alt="icon" onclick="ModalProcesoUpload(${i},5)">
                <h5>Fabricación</h5>
            </div>
            <span class="divider"></span>
            <div class="sub-card-process">
                <img src="img/Icons_Process/6.svg" alt="icon" onclick="ModalProcesoUpload(${i},6)">
                <h5>Instalación</h5>
            </div>
        </div>
    </form>
</div>
          `
}

function ModalProcesoUpload(i, mode){
    modal2.style.display = "flex";
    let image = ""
    let title = ""
    switch(mode){
        case 1:
            image = "img/Icons_Process/1.svg"
            title = "Pago Diseño"
        break;
        case 2:
            image = "img/Icons_Process/2.png"
            title = "Diseño Terminado"
        break;
        case 3:
            image = "img/Icons_Process/3.png"
            title = "Cotización"
        break;
        case 4:
            image = "img/Icons_Process/4.svg"
            title = "Pago Cotización"
            break;
        case 5:
            image = "img/Icons_Process/5.svg"
            title = "Fabricación"
        break;
        case 6:
            image = "img/Icons_Process/6.svg"
            title = "Instalación"
        break;

    } 
    modal2.innerHTML = `<div class="modal-content" id="modalPedidoProceso">
    <span class="close" onclick="closeModal2()">&times;</span>
    <form class="form_login_spaces">
        <div class="titles">
            <h3>Proceso de Pedido</h3>
            <h4>ID: ${i}</h4>
        </div>
        <div class="title-img">
            <img src="${image}" alt="x">
            <h5>${title}</h5>
        </div>
        <div class="card card-upload">
            <img src="img/Icons_Process/subir.svg" alt="y">
            <h5>Subir Material</h5>
        </div>
        <div class="buttons-card-modal">
            <button type="button" class="return" onclick="closeModal2()">Regresar</button>
            <button type="button" class="accept">Aceptar</button>
        </div>

    </form>
</div>
          `
}

function eventDrops(){

    var card_drops = document.getElementsByClassName('card_drop');
    var card_info = document.getElementsByClassName('card_info_basica_expanded');
    var card_aspectos = document.getElementsByClassName('card_aspectos_expanded');
    var card_colores = document.getElementsByClassName('colores_expanded');
    var card_equipos = document.getElementsByClassName('equipos_expanded');
    var card_refs = document.getElementsByClassName('referencias_expanded');

        card_drops[0].addEventListener("click", function(){
            if(card_info[0].style.display === "flex"){
                card_info[0].style.display = "none";
            } else {
                card_info[0].style.display = "flex";
            }
        })

        card_drops[1].addEventListener("click", function(){
            if(card_aspectos[0].style.display === "flex"){
                card_aspectos[0].style.display = "none";
            } else {
                card_aspectos[0].style.display = "flex";
            }
        })

        card_drops[2].addEventListener("click", function(){
            if(card_colores[0].style.display === "flex"){
                card_colores[0].style.display = "none";
            } else {
                card_colores[0].style.display = "flex";
            }
        })

        card_drops[3].addEventListener("click", function(){
            if(card_equipos[0].style.display === "flex"){
                card_equipos[0].style.display = "none";
            } else {
                card_equipos[0].style.display = "flex";
            }
        })

        card_drops[4].addEventListener("click", function(){
            if(card_refs[0].style.display === "flex"){
                card_refs[0].style.display = "none";
            } else {
                card_refs[0].style.display = "flex";
            }
        })
}

