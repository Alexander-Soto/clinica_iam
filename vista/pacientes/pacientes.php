<?php 
/** *************************************
 * @author Alexander Antonio Soto Brito *
 * @author Jaime Alberto Portillo Luna  *
 * @author Jose Miguel Arevalo Moreira  *
 * @copyright 2022 - 2025               *
 * @version 1.0.0                       *
 * @date 2022-06-05 12:32:21            *
 ************************************* **/
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../recursos/clinica.png">
        <link rel="stylesheet" href="pacientes/css/pacientes.css">
        <title>Clinica IAM</title>
    </head>
    <body>
        <div class="divTittle">
            <h1 class="titulo">Pacientes</h1>
        </div>

        <div class="myDiv">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtNombres">Nombres: </label>
                        <input type="text" class="form-control" id="txtNombres" placeholder="Nombres">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtApellidos">Apellidos: </label>
                        <input type="text" class="form-control" id="txtApellidos" placeholder="Apellidos">
                    </div>
                    <div class="form-group col-md-2 text-center">
                        <br>
                        <button type="submit" class="btn btn-success" id="btnAggPaciente">Agregar</button>
                        <br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtDui">DUI: </label>
                        <input type="text" class="form-control" id="txtDui" placeholder="00000000-0">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtTelefono">Teléfono: </label>
                        <input type="text" class="form-control" id="txtTelefono" placeholder="+503 0000 - 0000">
                    </div>
                    <div class="form-group col-md-2 text-center">
                        <br>
                        <button type="submit" class="btn btn-warning" id="btnAggPaciente">Editar</button>
                        <br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label class="lbForm" for="txtDireccion">Dirección: </label>
                        <input type="text" class="form-control" id="txtDireccion" placeholder="Dirección de Residencia">
                    </div>
                    <div class="form-group col-md-2 text-center">
                        <br>
                        <button type="submit" class="btn btn-danger" id="btnAggPaciente">Eliminar</button>
                        <br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="lbForm" for="txtOcupación">Ocupacion: </label>
                        <input type="text" class="form-control" id="txtOcupación" placeholder="Ocupación">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="lbForm" for="txtFechNac">Fecha de Nacimiento: </label>
                        <input type="date" class="form-control" id="txtFechNac">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="lbForm" for="selSexo">Sexo: </label>
                        <select id="selSexo" class="form-control">
                            <option value="0">Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="lbForm" for="selEstadoCivil">Estado Civil: </label>
                        <select id="selEstadoCivil" class="form-control">
                            <option value="0">Seleccione</option>
                            <option value="1">Solter(a)</option>
                            <option value="2">Casad(a)</option>
                            <option value="3">Divorciad(a)</option>
                            <option value="4">Viud(a)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2 text-center">
                    </div>
                </div>
            </form>
            <div class="row" style="padding: 20px;">
                <table class="table table-sm">
                    <caption>List of users</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>