// DOM
/*let links = document.querySelectorAll("a");

links.forEach(function(link){
    console.log(link);
})*/

let link = document.querySelectorAll(".close");

link.forEach(function(links){
    links.addEventListener('click',function(ev){
        ev.preventDefault();
        let content = document.querySelector(".content");

        content.classList.remove("animate__fadeInDown");
        content.classList.remove("animate__animated");
    
        content.classList.add("animate__fadeOutUp");
        content.classList.add("animate__animated");

        setTimeout(function(){
            location.href = "../index.html";
        },600);
        return false;
    })
})

let iconos = document.querySelectorAll("i");

iconos.forEach(function(icono){
    icono.classList.remove("fa-star-o");
})






