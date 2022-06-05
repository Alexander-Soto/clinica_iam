/** *************************************
 * @author Alexander Antonio Soto Brito *
 * @author Jaime Alberto Portillo Luna  *
 * @author Jose Miguel Arevalo Moreira  *
 * @copyright 2022 - 2025               *
 * @version 1.0.0                       *
 * @date 2022-06-05 12:32:21            *
 ************************************* **/

function IniciarSession() {
  let usuario = $("#txtUsuario").val();
  let contra = $("#txtContra").val();
  if (usuario == "" || contra == "") {
    // Indica al usuario que complete los campos.
  } else {
    $.post(
      "controlador/login.php",
      { tipo: "iniciar", usuario: usuario, contra: contra },
      function (respuesta) {
        if (respuesta.estado == 1) {
          window.location.href = "vista/menu.php";
        } else {
          $("#modalError").modal("show");
        }
      },
      "json"
    );
  }
}
