form = document.getElementById("form-register");
document.addEventListener('DOMContentLoaded',submitFormRegister);
document.addEventListener('submit', submitFormRegister);

function submitFormRegister(){
    let username = form.getElementsByTagName("username");
    let type = form.getElementsByTagName("type");
    let password = form.getElementsByTagName("password");
    let confirm_password = form.getElementsByTagName("confirm_password");

    username.value = '';
    type.value = '';
    password.value = '';
    confirm_password.value = ''
}

function resetFormRegister(){
    let username = form.getElementsByTagName("username");
    let type = form.getElementsByTagName("type");
    let password = form.getElementsByTagName("password");
    let confirm_password = form.getElementsByTagName("confirm_password");

    username.value = '';
    type.value = '';
    password.value = '';
    confirm_password.value = ''
}