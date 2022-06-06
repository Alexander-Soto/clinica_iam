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
    <link rel="stylesheet" href="productos/css/productos.css">
    <title>Clinica IAM</title>
</head>

<body>
    <div class="divTittle">
        <h1 class="titulo">Hacer cita</h1>
    </div>

    <div class="myDiv">
        <form>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label class="lbForm" for="txtSeccionMedico">Seleccion Medico: </label>
                    <select class="form-control" >
                        <option selected>Seleccione Medico</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label class="lbForm" for="txtFechaConsulta">Seleccione fecha de consulta: </label>
                    <input type="date" class="form-control" id="txtAccionTeraupeutica">
                </div>
        
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label class="lbForm" for="txtIndicaciones">Seleccione Hora de consulta: </label>
                    <input type="time" class="form-control" id="txtIndicaciones" placeholder="Indicaciones">
                </div>
            
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label class="lbForm" for="txtIndicaciones">Seleccione Paciente: </label>
                    <select class="form-control">
                        <option selected>Seleccione paciente</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group col-md-2 text-center">
                        <br>
                        <button type="submit" class="btn btn-success" id="btnAggPaciente">Nuevo Pct</button>
                        <br>
                    </div>
                    <div class="form-group col-md-2 text-center">
                        <br>
                        <button type="submit" class="btn btn-success" id="btnAggPaciente">Agregr Cita</button>
                        <br>
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