/*
  Creación de una función personalizada para jQuery que detecta cuando se detiene el scroll en la página
*/
$.fn.scrollEnd = function(callback, timeout) {
  $(this).scroll(function(){
    var $this = $(this);
    if ($this.data('scrollTimeout')) {
      clearTimeout($this.data('scrollTimeout'));
    }
    $this.data('scrollTimeout', setTimeout(callback,timeout));
  });
};
/*
  Función que inicializa el elemento Slider
*/

function inicializarSlider(){
  $("#rangoPrecio").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 100000,
    from: 200,
    to: 80000,
    prefix: "$"
  });
}
/*
  Función que reproduce el video de fondo al hacer scroll, y deteiene la reproducción al detener el scroll

function playVideoOnScroll(){
  var ultimoScroll = 0,
      intervalRewind;
  var video = document.getElementById('vidFondo');
  $(window)
    .scroll((event)=>{
      var scrollActual = $(window).scrollTop();
      if (scrollActual > ultimoScroll){
       video.play();
     } else {
        //this.rewind(1.0, video, intervalRewind);
        video.play();
     }
     ultimoScroll = scrollActual;
    })
    .scrollEnd(()=>{
      video.pause();
    }, 10)
}
*/

inicializarSlider();
//playVideoOnScroll();

function lee_json() {
  $.getJSON("./data-1.json", function(datos) {
var out = "";
     var i;
for (i = 0; i < datos.length; i++) {
out += "<table width='684' height='234' border='1' id='tabla1'>"+
 "<tr>"+
"<td width='224' rowspan='7'><img src='img/home.jpg' width='400' height='400px'></td>"+
"<td width='401'>"+"Id: " + datos[i].Id +"</td>"+
"</tr>"+
"<tr>"+
"<td>"+"Direccion: " + datos[i].Direccion +"</td>"+
"</tr>"+
"<tr>"+
"<td>"+"Ciudad: " + datos[i].Ciudad +"</td>"+
"</tr>"+
"<tr>"+
"<td>"+"Telefono: " + datos[i].Telefono +"</td>"+
"</tr>"+
"<tr>"+
"<td>"+"Codigo Postal: " + datos[i].Codigo_Postal +"</td>"+
"</tr>"+
"<tr>"+
"<td>"+"Tipo: " + datos[i].Tipo +"</td>"+
"</tr>"+
"<tr>"+
"<td>"+"Precio: " + datos[i].Precio +"</td>"+
"</tr>";

}
document.getElementById("mostrar").innerHTML = out;			
});
}


$(document).ready(function(e) {

$("#mostrarTodos").click(function(){
lee_json();
})	
//$( "#selectCiudad").css( "display:block;" );
});