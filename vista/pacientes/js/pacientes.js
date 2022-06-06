/** *************************************
 * @author Alexander Antonio Soto Brito *
 * @author Jaime Alberto Portillo Luna  *
 * @author Jose Miguel Arevalo Moreira  *
 * @copyright 2022 - 2025               *
 * @version 1.0.0                       *
 * @date 2022-06-05 12:32:21            *
 ************************************* **/

function AgregarPaciente() {
  document
    .getElementById("formLogin")
    .addEventListener("click", function (event) {
      event.preventDefault();
    });
  let nombres = $("#txtNombres").val();
  let apellidos = $("#txtApellidos").val();
  let dui = $("#txtDui").val();
  let telefono = $("#txtTelefono").val();
  let direccion = $("#txtDireccion").val();
  let ocupacion = $("#txtOcupacion").val();
  let fechaNacimiento = $("#txtFechNac").val();
  let sexo = $("#selSexo").val();
  let estadoCivil = $("#selEstadoCivil").val();
  console.log(
    nombres,
    apellidos,
    dui,
    telefono,
    direccion,
    ocupacion,
    fechaNacimiento,
    sexo,
    estadoCivil
  );
}
