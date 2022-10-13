

  $("#silla").change(function() {
    //var valor = $(this).val(); // Capturamos el valor del select
    var numero = document.getElementById("precio").value;
     var texto = $(this).find('option:selected').text();
     var total = (numero * texto);

    $("#precioTotal").val(`${total}`)
  
  });
