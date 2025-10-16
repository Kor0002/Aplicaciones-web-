//document.write("hola mundo");
var parrafo = document.getElementById("texto");
parrafo.innerHTML = "Texto de Javascript";
parrafo.style.color = "red";

var contenedor = document.getElementById("contenedor");
var nuevo = document.createElement("p");
var texto = document.createTextNode("Texto de javascript");

contenedor.appendChild(nuevo);
nuevo.appendChild(texto);
