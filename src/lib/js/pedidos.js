let states = document.getElementsByTagName("select")

document.addEventListener('DOMContentLoaded',addColorStateToCards);

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