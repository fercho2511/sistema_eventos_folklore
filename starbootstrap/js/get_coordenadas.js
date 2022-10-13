// initialize
const
  svg = document.getElementById('mysvg'),   // aca obtenemos todo el campo de imagen svg
  NS = svg.getAttribute('xmlns'),    //aca el archivo xml 
  di = document.getElementById('output'),
  out = {};

'clientX,clientY,svgX,svgY,targetX,targetY,targetID,addX,addY'.split(',').map(s => {   // en esta linea obtenemos los id de output 
  out[s] = { node: document.getElementById(s), value: '-' }
});

// events
svg.addEventListener('pointermove', getCoordinates);
svg.addEventListener('pointerdown', getCoordinates);
svg.addEventListener('pointerdown', createCircle);
//aca provaremos para crear el nombre en el svg
svg.addEventListener('pointerdown', dibujarTexto)
// document.createElementNS(SVG_NS, 'text');


// function myFunction() {
//   var popup = document.getElementById("myPopup");
//   popup.classList.toggle("show");
// }


// update co-ordinates
//actualizat coordenadas
function getCoordinates(event) {

  // DOM co-ordinate
  out.clientX.value = event.clientX;
  out.clientY.value = event.clientY;

  // SVG co-ordinate
  const svgP = svgPoint(svg, out.clientX.value, out.clientY.value);
  out.svgX.value = svgP.x;
  out.svgY.value = svgP.y;

  // target co-ordinate
  const svgT = svgPoint(event.target, out.clientX.value, out.clientY.value);
  out.targetX.value = svgT.x;
  out.targetY.value = svgT.y;

  updateInfo();

};


// add a circle to the target
//añadir un circulo en el target
function createCircle(event) {

  // circle clicked?
  //cuando se un click en el circulo 
//   if (event.target.nodeName === 'circle') return;

  // add circle to containing element
  //añadir un 
  const
     target = event.target.closest('g') || event.target.ownerSVGElement || event.target,
    svgP = svgPoint(target, event.clientX, event.clientY),
    cX = Math.round(svgP.x),
    cY = Math.round(svgP.y),
     circle = document.createElementNS(NS, 'circle');

//   circle.setAttribute('cx', cX);
//   circle.setAttribute('cy', cY);
//   circle.setAttribute('r', 30);

  target.appendChild(circle);

  // output information
 out.targetID.value = target.id || target.nodeName;
  out.addX.value = cX;
  out.addY.value = cY;
  updateInfo();

  //este es para dar nombre al circulo 
  
    // var popup = document.getElementById("myPopup");
    // popup.classList.toggle("show");
    //desde aca provando
    const SVG_NS = "http://www.w3.org/2000/svg";


            let o = {
              props: {
                x: cX,
                y: cY,
                'font-size':15,
                'dominant-baseline': 'middle',
                'text-anchor': 'middle'
              },
              txtConent: cX +' '+cY
            };


            function dibujarTexto(o, parent) {
              let text = document.createElementNS(SVG_NS, "text");
              for (let name in o.props) {
                if (o.props.hasOwnProperty(name)) {
                  text.setAttributeNS(null, name, o.props[name]);
                }
              }
              text.textContent = o.txtConent;
              parent.appendChild(text);
              return text;
            }


            // function actualizarTexto(text,txtConent){
            //   text.textContent = txtConent;
            // }

            let txt = dibujarTexto(o, mysvg);



            // elNombre.addEventListener("input", ()=>{actualizarTexto(txt,figura3.value)})

    //asta aca
  

}


// translate page to SVG co-ordinate
function svgPoint(element, x, y) {

  var pt = svg.createSVGPoint(); 
  pt.x = x;
  pt.y = y;

  return pt.matrixTransform(element.getScreenCTM().inverse());

}



function svgNombre(element, x,y) {

  
}


function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}


// output values
function updateInfo() {

  for (p in out) {
    out[p].node.textContent = isNaN(out[p].value) ? out[p].value : Math.round(out[p].value);
  }

}


