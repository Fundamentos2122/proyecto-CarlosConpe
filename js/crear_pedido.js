colors = document.getElementsByClassName("circle");

document.addEventListener('DOMContentLoaded', addColorToCircles);

function randomIntFromInterval(min, max) { // min and max included 
    return Math.floor(Math.random() * (max - min + 1) + min)
  }

function addColorToCircles(){
    let r,g,b;
    for(var i = 0; i< colors.length; i++){
        r = randomIntFromInterval(0,255);
        g = randomIntFromInterval(0,255);
        b = randomIntFromInterval(0,255);

        colors[i].style.backgroundColor = `rgba(${r},${g},${b},0.5)`
    }
}