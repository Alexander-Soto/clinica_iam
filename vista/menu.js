function Sidebar() {
  $("#sidebar").toggleClass("active");
}

function CerrarSesion() {
  $.post(
    "../controlador/login.php",
    { tipo: "cerrar" },
    function (respuesta) {
      if (respuesta.estado == 1) {
        window.location.href = "../index.php";
      }
    },
    "json"
  );
}
