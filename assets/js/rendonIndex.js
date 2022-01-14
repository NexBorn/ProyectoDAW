

let galeria1 = document.querySelector('.galeria-1');
let galeria2 = document.querySelector('.galeria-2');
let galeria3 = document.querySelector('.galeria-3');

let imagenes1 = ["assets/img/galeriaIndex/1-1.jpg", "assets/img/galeriaIndex/1-2.jpg", "assets/img/galeriaIndex/1-3.jpg"];
let imagenes2 = ["assets/img/galeriaIndex/2-1.jpg", "assets/img/galeriaIndex/2-2.jpg", "assets/img/galeriaIndex/2-3.jpg"];
let imagenes3 = ["assets/img/galeriaIndex/3-1.jpg", "assets/img/galeriaIndex/3-2.jpg", "assets/img/galeriaIndex/3-3.jpg"];

let contador = 0;

function cambiarImagen()
{
    galeria1.src = imagenes1[contador];
    galeria2.src = imagenes2[contador];
    galeria3.src = imagenes3[contador];


    contador++;
    if(contador>2){
        contador = 0
    }
}


let galeriaCambiarImagen = setInterval(cambiarImagen , 5000);
cambiarImagen();
