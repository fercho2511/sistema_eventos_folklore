// var estado = document.getElementById("silla");
// if (document.getElementById("silla") == -1) {
//         document.getElementById('venta').disabled = true;
//     }else {
//         document.getElementById('venta').disabled = false;
//     }
    
    // var combo = document.getElementById("silla");
    // var selected = combo.options[combo.selectedIndex].text;
    // if (selected == "Seleccionar cantidad") {
    //      document.getElementById('venta').disabled = true;

    // }else {
    //            document.getElementById('venta').disabled = false;
    //          }

    //          ('#silla').on('change', function () {


    //         };


    //         var select = document.getElementById('silla');
    //         select.addEventListener('change',
    //           function(){
    //             var selectedOption = this.options[select.selectedIndex];
                
    //             console.log(selectedOption.value + ': ' + selectedOption.text);
    //           });
  


    var estado = $("#silla").val();
    if (estado>=1) {
        document.getElementById('venta').disabled = false;

    }else{
        document.getElementById('venta').disabled = true;

    }

    $("#silla").change(function(){
        var estado = $("#silla").val();
        if (estado>=1) {
            document.getElementById('venta').disabled = false;

        }else{
            document.getElementById('venta').disabled = true;

        }
      });



      // con esto se desabilita la parte de auspisiadores 
      document.getElementById('silla').disabled = true;

       var est = $("#numSilla").val();
       if (est>=1 || est <=42) {
       document.getElementById('silla').disabled = true;
  
      }else{
           document.getElementById('silla').disabled = false;
  
      }