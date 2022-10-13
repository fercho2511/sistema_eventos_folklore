// const $canvas = document.querySelector("#Capa_1"),
// $btnDescargar = document.querySelector("#btnDescargar");

// // Lo siguiente dibuja en el canvas, no tiene que ver con el tutorial, solo es demostración
// const contexto = $canvas.getContext("2d");
// contexto.beginPath();
// contexto.arc(95, 50, 40, 0, 2 * Math.PI);
// contexto.stroke();


// Listener del botón
var c = document.getElementById('Capa_1');
var t = c.getContext('2d');
function btnDescargar() {
      window.open('', document.getElementById('Capa_1').toDataURL());

    
}


