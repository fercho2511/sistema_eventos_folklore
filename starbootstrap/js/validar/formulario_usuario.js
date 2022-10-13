

$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Registro Exitoso!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      correo: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
     
      nombres: {
        required: true,
        minlength:3,
        maxlength:30,        
        pattern:'[A-Za-z]{3,25}',
        
      },
      apellidos: {
        required: true,
        minlength:3,
        maxlength:20,        
        pattern:'[A-Za-z]{3,25}',
        
      },    
     
      ci:{
        required: true,
         minlength:4,
         maxlength:12,
        // is_unique:'[usuario.ci]'
        
      },
      telefono:{
        required: false,
        minlength: 7,
        maxlength:8,    
        // pattern='^[0-9]+',  
       
      },
      terms: {
        required: true,
      },
      
      
    },
    messages: {
      correo: {
        required: "porfavor ingrese su correo",
        email: "ingrese correo valido"
      },
    
      nombres: {
        required: "porfavor ingrese palabra valida",
        minlength: "minimo de 3 letras",
        maxlength:"maximo de 30 letras",
        pattern:"INGRESE FORMATO CORRECTO"
      },
      apellidos: {
        required: "porfavor ingrese palabra valida",
        minlength: "minimo de 3 letras",
        maxlength:"maximo de 25 letras",
        pattern:"INGRESE FORMATO CORRECTO"
      },
     
     
      ci:{
        required:"porfavor ingrese C.I. valido",
        minlength:"minimo 4 digitos",
        maxlength:"maximo 12 digitos",        
        unique:"EL C.I. ingresaro ya esta registrado"
      },
      telefono:{
        minlength: "minimo de 7 digitos",
        maxlength:"maximo de 8 digitos",
        number:"INGRESE FORMATO CORRECTO",
        pattern:"INGRESE SOLO NUMEROS ENTEROS"
       
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
