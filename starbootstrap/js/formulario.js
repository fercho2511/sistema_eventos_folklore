
//  var e = document.getElementById("estudiante1");
//       e.style.display = "none";
var b = document.getElementById('formReporte');
b.disabled = true;
var desde = document.getElementById('fechas');
desde.style.display = "none";
var mes = document.getElementById('mesas');
mes.style.display="none";
var comp = document.getElementById('comprador');
comp.style.display="none";
var vend = document.getElementById('vendedor');
vend.style.display="none";





$('#selecMesa').on('change',function(){
    
    var selectValor = $(this).val(); //con esto se captura el cavlor q esta en el div
    // alert(selectValor); //para verificar si realmenet captura el valor
    if (selectValor == '0') {

 

    var b = document.getElementById('formReporte');
    b.disabled = true;
    var desde = document.getElementById('fechas');
    desde.style.display = "none";
    var mes = document.getElementById('mesas');
    mes.style.display="none";
    var comp = document.getElementById('comprador');
    comp.style.display="none";
    var vend = document.getElementById('vendedor');
    vend.style.display="none";


}if (selectValor == '1') {

    var b = document.getElementById('formReporte');
    b.disabled = false;
    var desde = document.getElementById('fechas');
    desde.style.display = "block";
    var mes = document.getElementById('mesas');
    mes.style.display="none";
    var comp = document.getElementById('comprador');
    comp.style.display="none";
    var vend = document.getElementById('vendedor');
    vend.style.display="none";

   
  }if (selectValor == '2') {

    var b = document.getElementById('formReporte');
b.disabled = false;
var desde = document.getElementById('fechas');
desde.style.display = "none";
var mes = document.getElementById('mesas');
mes.style.display="block";
var comp = document.getElementById('comprador');
comp.style.display="none";
var vend = document.getElementById('vendedor');
vend.style.display="none";
  

   
  }if (selectValor == '3') {

    var b = document.getElementById('formReporte');
    b.disabled = false;
    var desde = document.getElementById('fechas');
    desde.style.display = "none";
    var mes = document.getElementById('mesas');
    mes.style.display="none";
    var comp = document.getElementById('comprador');
    comp.style.display="block";
    var vend = document.getElementById('vendedor');
    vend.style.display="none";
  

   
  }if (selectValor == '4') {

    var b = document.getElementById('formReporte');
    b.disabled = false;
    var desde = document.getElementById('fechas');
    desde.style.display = "none";
    var mes = document.getElementById('mesas');
    mes.style.display="none";
    var comp = document.getElementById('comprador');
    comp.style.display="none";
    var vend = document.getElementById('vendedor');
    vend.style.display="block";
  

   
  }
});










