// CDN de Google Jquery
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

/*
 INDEX 
 1) Hacer que los scripts se ejecuten despues del html y css
 2) Seleccionar elementos html y remplazar texto
 3) Manilulacion del DOM
 4) Agregar etiqueta con Texto al principio y al final
 5) Trabajar con Eventos
 6) Detectar cuando se escribe por teclado
 7) Efectos Jquery
*/



//----------------------------------------------------------------------------------------------------------------------------------------------
// 1) Hacer que los scripts se ejecuten despues del html y css
$(document).ready(function(){
    console.log('okey');
});


//----------------------------------------------------------------------------------------------------------------------------------------------
// 2) Seleccionar elementos html y remplazar texto

// seleccionar etiqueta html, class o id
$(document).ready(function(){
    // remplaza el texto del h1
    $('h1').html('Eiqueta h1');
    $('clase').html('desde clase');
    $('idh1').html('desde id');

    // lo mismo en JS sin jquery
    document.querySelector('#idh1').innerHTML = 'desde id';

    // seleccionar todos los elementos dentro de un contenedor o englobador de etiquetas
    // con first solo seleccionamos el primero o con :last el ultimo
    $('.container h1:first').html('cambio texto');
});

<div class="container">
    <h1 class="claseh1" id="idh1">Hola que tal</h1>
    <h1 class="claseh1" id="idh2">Hola que tal</h1>
</div>




//----------------------------------------------------------------------------------------------------------------------------------------------
// 3) Manilulacion del DOM

$(document).ready(function(){
    // Agregar clase
    $('h1').addClass('display');

    // Quitar clase
    $('h2').removeClass('text-center');

    // Eliminar html
    $('#idh1').remove();

    // Ocultar html
    $('#idh1').hide();

    // Añadir src, alt etz
    $('img').attr('src','https://imagen.jpe')
});


<div class="container2">
    <h1 class="" id="idh1">Hola que tal</h1>
    <h1 class="" id="idh2">Hola que tal</h1>
    <h2 class="text-center" id="idh2">Hola que tal</h2>
</div>

//----------------------------------------------------------------------------------------------------------------------------------------------
// 4) Agregar etiqueta con Texto al principio y al final
$(document).ready(function(){
    // Agregar etiqueta nueva al final con append
    $('#cont').append('<h1> Este es otro titulo</h1');
    // Agregar etiqueta nueva al principio con prepend
    $('#cont').prepend('<h1> Este es otro titulo</h1');
});


<div class="container2" id="cont">
    <h1 class="" id="idh1">Hola que tal</h1>
    <h1 class="" id="idh2">Hola que tal</h1>
    <h2 class="text-center" id="idh2">Hola que tal</h2>
</div>


//----------------------------------------------------------------------------------------------------------------------------------------------
//  5) Trabajar con Eventos

$(document).ready(function () {

    // variable 
    var contenido = $('#contenido h2');
    
    //Evento click Agregando clase
    $('#boton1').click(function(){
        $('#contenido').addClass('text-center');
    });

    //Evento click Agregando estilo en css
    $('#boton2').click(function(){
        $(contenido).css('color','salmon');
    });

    //Alternativa al evento click
    $('#boton3').on('click',function(){
        $('#contenido h2').toggleClass('display-4');
    });

});

<div class="container my-5">
  <div class="btn btn-primary" id="boton1">Acción 1</div>
  <div class="btn btn-primary" id="boton2">Acción 2</div>
  <div class="btn btn-primary" id="boton3">Acción 3</div>
  <div class="bg-dark text-white mt-5 p-2" id="contenido">
    <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, numquam!</h2>
  </div>
</div>
//----------------------------------------------------------------------------------------------------------------------------------------------
//  6) Detectar cuando se escribe por teclado

$(document).ready(function() {
    //Declarar variables reutilizables
    var input = $("#nombre");
    var contenido = $("#contenido");
  
    //Evento keyup
    input.keyup(function() {
      console.log(input.val()); //verificamos en consola
      contenido.html(input.val()); //agregamos en contenido
  
      //Podemos verificar si está vacio el input
      if (input.val() === "") {
        contenido.html("Estoy esperando...");
      }
    });
  });

//   <div class="container my-5">
//     <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre" autocomplete="off">
//     <div class="bg-dark text-white mt-5 p-2" id="contenido">
//         Estoy esperando...
//     </div>
//     </div>


//----------------------------------------------------------------------------------------------------------------------------------------------
//  7) Efectos Jquery

$(document).ready(function() {
    var ocultar = $("#ocultar");
    var mostrar = $("#mostrar");
    var toggle = $("#toggle");
    var elemento = $("#elemento");
  
    ocultar.click(function() {
      elemento.hide(1000);
    });
  
    mostrar.click(function() {
      elemento.show(1000);
    });
  
    toggle.click(function() {
      elemento.toggle(1000);
    });
  });


  <div class="container my-5">
  <button class="btn btn-warning" id="ocultar">Ocultar</button>
  <button class="btn btn-warning" id="mostrar">Mostrar</button>
  <button class="btn btn-warning" id="toggle">Toggle</button>

  <div class="mt-5 bg-danger text-white py-5 text-center text-uppercase" id="elemento">
    <p>Este es un elemento dinámico</p>
  </div>

</div>