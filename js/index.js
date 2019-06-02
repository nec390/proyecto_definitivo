// var temporizador;
// var imagenes=[ "imagenes/ortodoncia2.jpg",
//               "imagenes/ortodoncia3.jpg",
//               "imagenes/ortodoncia1.jpg"];
// var x=0;
// function cambioImagen(){
//   if(x > 2){
//     x=0;
//   }
//   document.getElementById('imagen2').src = imagenes[x];
//   x++
// }
//  temporizador = setInterval ( cambioImagen, 2000);
function despeglarMenu(){
  document.getElementById('menu1').classList.remove("menu_opc");
  document.getElementById('menu1').classList.add("menu_visible");
}
function quitarMenu(){
  document.getElementById('menu1').classList.remove("menu_visible");
  document.getElementById('menu1').classList.add("menu_opc");
}
