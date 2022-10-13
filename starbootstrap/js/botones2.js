var estado = $("#silla").val();
if (estado>=1) {
    document.getElementById('reserva').disabled = false;

}else{
    document.getElementById('reserva').disabled = true;

}

$("#silla").change(function(){
    var estado = $("#silla").val();
    if (estado>=1 || estado== 'general' ) {
        document.getElementById('reserva').disabled = false;

    }else{
        document.getElementById('reserva').disabled = true;

    }
  });






  var x = $("#numSilla").val();
 // alert(x);
 if (x>=1 || x>=42) {
    document.getElementById('silla').disabled = true;

 }
if (x>=1 || x == 'general') {
    document.getElementById('ventaReserva').disabled = false;

}

else{
    if (x=! null) {
        document.getElementById('ventaReserva').disabled = false;
    
    }else{
        document.getElementById('ventaReserva').disabled =true ;

    }

}

// $("#numSilla").change(function(){
//     var estado = $("#silla").val();
//     if (estado>=1) {
//         document.getElementById('ventaReserva').disabled = false;

//     }else{
//         document.getElementById('ventaReserva').disabled = true;

//     }
//   });






