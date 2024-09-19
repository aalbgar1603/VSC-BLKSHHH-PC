function comprobar(id, boton) {
  var pregunta = document.getElementById(id, boton);
  if (pregunta.className.match(boton)) {
    pregunta.style.color = "green";
  } else {
    pregunta.style.color = "red";
  }
}
