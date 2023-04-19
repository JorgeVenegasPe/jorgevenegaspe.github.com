// Obtener los elementos de la clase .close
let link = document.querySelectorAll(".close");

// Recorrelos 
link.forEach(function(links){

    // Agregar un evento click a cada uno de ellos 
    links.addEventListener('click',function(ev){
        ev.preventDefault();
        let content = document.querySelector(".content");

        // Quitarle las clases de animacion que ya tiene 
        content.classList.remove("animate__fadeInDown");
        content.classList.remove("animate__animated");

        // Agregar nuevas clases para animar la salida
        content.classList.add("animate__fadeOutUp");
        content.classList.add("animate__animated");

        // Funcion para el tiempo de salida
        setTimeout(function(){
            location.href = "../index.html";
        },600);

        return false;
    })
})






