// menu secundario
// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
$(document).ready(init);

function init() {
    $("#acordeon h3").click(function(){
    //slide up all the link lists
    $("#acordeon ul ul").slideUp();
    //slide down the link list below the h3 clicked - only if its closed
    if(!$(this).next().is(":visible"))
    {
      $(this).next().slideDown();
    }
  })
}
function email(mail){
	if((/\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/.test(mail))){ return true; }else{ return false;}
}
function contrasena(pass){
  if((/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(pass))){ return true; }else{ return false;}
}
// FUNCIONES JAVASCRIPT PARA VALIDAR EL REGISTRO DE NUESTRO USUARIO
function registrar(){
        var form = document.form;
        if (form.nombre_emp.value==0) {
          alert("Ingresa el Nombre de la empresa");
          form.nombre_emp.value="";
          form.nombre_emp.focus();
          return false;
            }
        if (form.correo_emp.value==0) {
          alert("Ingresa un correo de la empresa");
          form.correo_emp.value="";
          form.correo_emp.focus();
          return false;
        }else{
          if(email(form.correo_emp.value)==false){
            alert("Correo INVALIDO!!!!!");
            form.correo_emp.value="";
              form.correo_emp.focus();
              return false;
          }
        }
         if (form.usuario.value==0) {
          alert("Ingresa un nombre de usuario");
          form.usuario.value="";
          form.usuario.focus();
          return false;
            }
        if (form.contrasenia.value==0) {
          alert("Ingresa una CONTRASEÑA!!!");
          form.contrasenia.value="";
          form.contrasenia.focus();
          return false;
          }else{
          if(contrasena(form.contrasenia.value)==false){
            alert("CONTRASEÑA INVALIDA! la contraseña debe contener al menos una letra mayuscula, un numero o caracter especial y al menos 8 digitos");
            form.contrasenia.value="";
              form.contrasenia.focus();
              return false;
          }
        }
        if (form.re_contrasenia.value==0) {
          alert("Confirme Su CONTRASEÑA!!!");
          form.re_contrasenia.value="";
          form.re_contrasenia.focus();
          return false;
            }else{
              if(form.contrasenia.value!=form.re_contrasenia.value){
                alert("LAS CONTRASEÑAS NO COINCIDEN!!!");
                return false;
              }
            }
          if (form.direccion.value==0) {
          alert("Ingresa una direccion");
          form.direccion.value="";
          form.direccion.focus();
          return false;
            }
          if (form.rfc.value==0) {
          alert("Ingresa un RFC");
          form.rfc.value="";
          form.rfc.focus();
          return false;
        }
         if (form.telefono.value==0) {
          alert("Ingresa el Telefono!!!");
          form.telefono.value="";
          form.telefono.focus();
          return false;
            }
          if (form.contacto.value==0) {
          alert("Ingresa un nombre del responsable");
          form.contacto.value="";
          form.contacto.focus();
          return false;
            }
         if (form.apellido.value==0) {
          alert("Ingresa el APELLIDO!!!");
          form.apellido.value="";
          form.apellido.focus();
          return false;
            }
            form.submit();
        }

// VALIDAR FORMULARIO DE CONTACTO
function contacto(){
        var form = document.form;
        if (form.nombre.value==0) {
          alert("Ingresa el NOMBRE!!!");
          form.nombre.value="";
          form.nombre.focus();
          return false;
            }
         if (form.apellido.value==0) {
          alert("Ingresa el APELLIDO!!!");
          form.apellido.value="";
          form.apellido.focus();
          return false;
            }
        if (form.correo.value==0) {
          alert("Ingresa el CORREO!!!");
          form.correo.value="";
          form.correo.focus();
          return false;
        }else{
          if(email(form.correo.value)==false){
            alert("Correo INVALIDO!!!!!");
            form.correo.value="";
              form.correo.focus();
              return false;
          }
        }
        if (form.telefono.value==0) {
          alert("Ingresa el telefono!!!");
          form.telefono.value="";
          form.telefono.focus();
          return false;
            }
        if (form.comentario.value==0) {
          alert("Ingresa Un Comentario!!");
          form.comentario.value="";
          form.comentario.focus();
          return false;
            }
            form.submit();
        }
// carrito
var inicio=function () {
  $(".cantidad").keyup(function(e){
    if($(this).val()!=''){
      if(e.keyCode==13){
        var id=$(this).attr('data-id');
        var precio=$(this).attr('data-precio');
        var cantidad=$(this).val();
        $(this).parentsUntil('.producto').find('.subtotal').text('Subtotal: '+(precio*cantidad));
        $.post('../paginas/carro/js/modificarDatos.php',{
          Id:id,
          Precio:precio,
          Cantidad:cantidad
        },function(e){
            $("#total").text('Total: '+e);
        });
      }
    }
  });
}
$(document).on('ready',inicio);