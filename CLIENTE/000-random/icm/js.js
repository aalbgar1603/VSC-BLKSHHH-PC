var boton = document.getElementById("calcular2");
boton.addEventListener("click", calcularArea, false)
function calcularArea() {
  var radio = parseInt(document.getElementById("radio").value);
  var area = Math.PI *(radio ** 2);
  var longitud = Math.PI * 2  * radio;
  document.getElementById("longitud").innerHTML = longitud.toFixed(4);
  document.getElementById("area").innerHTML = area.toFixed(4);
}