let username = document.querySelectorAll('[name="username"]');
let password = document.querySelectorAll('[name="password"]');
let link = document.getElementById("link-login");
let button = document.getElementById("button-login");
let form = document.getElementById("login-space");

var path = window.location.pathname;
var page = path.split("/").pop();

button.addEventListener("click", validate)
username[0].addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
        validate();
    }
});

password[0].addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
        validate();
    }
});

function validate(){
    if(page ==="index.html"){
        if(username[0].value.replace(/\s+/g, '') ==="cliente" && password[0].value.replace(/\s+/g, '') === "cliente" ){
            window.location.href = "seguimiento.html"
        } else {
            form.innerHTML = `            <h3>Iniciar Sesión</h3>
            <input type="text" placeholder="Usuario" name="username" required>
            <input type="password" placeholder="Contraseña" name="password" required>
            <button type="button" id="button-login">Iniciar Sesión</button>
            <p class="announce">Usuario o contraseña incorrecta</p>
            <a href="#"> ¿Olvidaste tu contraseña? </a>`;

            username[0].value = ''
            password[0].value = ''
        }
    }
    if(page ==="login_vendedor.html"){
        if(username[0].value.replace(/\s+/g, '') === "vendedor" && password[0].value.replace(/\s+/g, '') === "vendedor" ){
            window.location.href = "pedidos.html"
        } else {
            form.innerHTML = `<h3>Iniciar Sesión</h3>
            <input type="text" placeholder="Usuario" name="username" required>
            <input type="password" placeholder="Contraseña" name="password" required>
            <button type="button" id="button-login">Iniciar Sesión</button>
            <p class="announce">Usuario o contraseña incorrecta</p>
            <a href="#"> ¿Olvidaste tu contraseña? </a> `;
            username[0].value = ''
            password[0].value = ''
        }
    }
    username = document.querySelectorAll('[name="username"]');
    password = document.querySelectorAll('[name="password"]');
    button = document.getElementById("button-login");
    button.addEventListener("click", validate);

}

