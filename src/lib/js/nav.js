var modal = document.getElementById("Modal_Crear_Prospecto");
var modalCliente = document.getElementById("Modal_Crear_Cliente");
var modalProfile = document.getElementById("Modal_Profile");
var btnProfile = document.getElementById("profile");

function classToggle() {
    const navs = document.querySelectorAll('.Navbar_Items')
    
    navs.forEach(nav => nav.classList.toggle('Navbar_Toggle_Show'));
  }
  
  document.querySelector('.Navbar_Link_Toggle')
    .addEventListener('click', classToggle);



btnProfile.onclick = function() {
  modalProfile.style.display = "flex";
}

window.addEventListener("click", function(event) {
  if (event.target == modalProfile) {
    modalProfile.style.display = "none";
  }
  if (event.target == modalCliente) {
    modalCliente.style.display = "none";
  }
  if (event.target == modal) {
    modal.style.display = "none";
  }});
