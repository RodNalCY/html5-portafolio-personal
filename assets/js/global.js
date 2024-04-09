$(document).ready(function () {
  console.log("RDX");
});

$("#copyButton").click(function (event) {
  event.preventDefault(); // Evitar el comportamiento predeterminado del enlace

  // Copiar la URL actual al portapapeles
  var currentUrl = window.location.href;
  navigator.clipboard
    .writeText(currentUrl)
    .then(function () {
      console.log("URL copiada con éxito: " + currentUrl);
      // Puedes agregar un mensaje de éxito aquí si lo deseas
      custom_alert(
        "Enlace copiado! ahora puede compartir con sus amigos!",
        "success"
      );
    })
    .catch(function (err) {
      console.error("Error al copiar URL: ", err);
      // Puedes manejar el error aquí si lo deseas
    });
});
