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
            <h1 class="titulo">Vademecum</h1>
        </div>

        <div class="myDiv">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtPrincipioActivo">Principio Activo: </label>
                        <input type="text" class="form-control" id="txtPrinciooActivo" placeholder="Principio Activo">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtPrecauciones">Precauciones </label>
                        <input type="text" class="form-control" id="txtPrecauciones" placeholder="Precauciones">
                    </div>
                    <div class="form-group col-md-2 text-center">
                        <br>
                        <button type="submit" class="btn btn-success" id="btnAggPaciente">Agregar</button>
                        <br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtAccionTeraupeutica">Accion Terapeutica: </label>
                        <input type="text" class="form-control" id="txtAccionTeraupeutica" placeholder="Accion Teraupeutica">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtDosificacion">Dosificacion: </label>
                        <input type="text" class="form-control" id="txtDosificacion" placeholder="Dosificacion">
                    </div>
                    <div class="form-group col-md-2 text-center">
                        <br>
                        <button type="submit" class="btn btn-warning" id="btnAggPaciente">Editar</button>
                        <br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtIndicaciones">Indicaciones: </label>
                        <input type="text" class="form-control" id="txtIndicaciones" placeholder="Indicaciones">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtInteracciones">Interacciones: </label>
                        <input type="text" class="form-control" id="txtInteraaciones" placeholder="Interacciones">
                    </div>
                    <div class="form-group col-md-2 text-center">
                        <br>
                        <button type="submit" class="btn btn-danger" id="btnAggPaciente">Eliminar</button>
                        <br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtMarca">Marca: </label>
                        <input type="text" class="form-control" id="txtMarca" placeholder="Marca">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtContraindicaciones">Contra Indicaciones: </label>
                        <input type="text" class="form-control" id="txtContraindicaciones" placeholder="Contra Indicaciones">
                    </div>
                    <div class="form-group col-md-2 text-center">
                        
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtPropiedades">Propiedades: </label>
                        <input type="text" class="form-control" id="txtPropiedades" placeholder="Propiedades">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="lbForm" for="txtSobreDosificacion">Sobre Dosificacion: </label>
                        <input type="text" class="form-control" id="txtSobreDosificacion" placeholder="Contra Indicaciones">
                    </div>
                    <div class="form-group col-md-2 text-center">
                        
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label class="lbForm" for="txtReaccionesAdversas">Reacciones Adversas: </label>
                        <input type="text" class="form-control" id="txtReaccionesAdversas" placeholder="Reacciones Adversas">
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