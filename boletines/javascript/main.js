
console.log("Hola mundo");

// DOM
/*  
let links = document.querySelectorAll("a");

links.forEach(function(link){
  console.log(link);
});
*/
/*
let celdas = document.querySelectorAll("td");

celdas.forEach(function(td){
    td.addEventListener('click',function(){
        console.log(this);
    })
})
*/

let links = document.querySelectorAll(".close");

links.forEach(function (link) {

    // Agregar un evento Click a cada uno de ellos-case sensitive
    link.addEventListener("click", function (evento) {
        evento.preventDefault();

        let content = document.querySelector('.content');
        // quitarle las clases de animación que ya tiene
        content.classList.remove("animate__fadeInDown");
        content.classList.remove("animate__animated");
        // Agregar clases para animar su salidad fadeOutUp
        content.classList.add("animate__fadeOutDown");
        content.classList.add("animate__animated");
        //tiempo
        setTimeout(function () {
            location.href = "/boletines";
        }, 600);
        /* setInterval(function(){
             location.href = "/";
         },1000);
         */

        return false;
    })
});

