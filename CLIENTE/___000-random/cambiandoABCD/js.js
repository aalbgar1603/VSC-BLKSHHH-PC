var boton = document.getElementById("boton");
boton.addEventListener("click", cambio, false);
function cambio() {
  var imagen = document.getElementById("imagen");

  if (imagen.src.match("a.jpg")) {
    imagen.src = "./b.jpg";
  } else if (imagen.src.match("b.jpg")) {
    imagen.src = "./c.jpg";
  } else if (imagen.src.match("c.jpg")) {
    imagen.src = "./d.jpg";
  } else if (imagen.src.match("d.jpg")) {
    imagen.src = "./a.jpg";
  }
}
