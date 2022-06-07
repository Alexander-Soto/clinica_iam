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
    <link rel="stylesheet" href="consulta/css/consulta.css">
    <title>Clinica IAM</title>
</head>

<body>
    <div class="divTittle">
        <h1 class="titulo">Consulta</h1>
    </div>
    <!-- Navegación de los tabs -->

    <div class="myDiv">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#identificacion"  data-toggle="tab">Identificación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#antecedentes" data-toggle="tab" tabindex="-1" aria-disabled="true">Antecedentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#Consulta" data-toggle="tab" tabindex="-1" aria-disabled="true">Consulta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#expfisica" data-toggle="tab" tabindex="-1" aria-disabled="true">Exploración Física</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#Diagnóstico" data-toggle="tab" tabindex="-1" aria-disabled="true">Diagnóstico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#Tratamiento" data-toggle="tab" tabindex="-1" aria-disabled="true">Tratamiento</a>
            </li>
        </ul>
        <br>

        <!-- Formulario Pacientes -->

        <form class="tab-content" method="post" id="myForm">
            <div class="form-row tab-pane active" id="identificacion">
                <div class="form-outline col-md-5">
                    <input type="search" id="form1" class="form-control" placeholder="Paciente" />
                </div>
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
                <div class="form-group col-md-1">
                </div>
                <div class="form-outline col-md-3">
                    <input type="search" id="form1" class="form-control" placeholder="Dui" />
                </div>
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>

            </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" required="" id="txtNombres" placeholder="Nombre">
                </div>
                <div class="form-group col-md-2">
                </div>
                <div class="form-group col-md-1">
                    <input type="text" class="form-control" id="txtApellidos" placeholder="Edad">
                </div>
                <div class="form-group col-md-3 text-center">

                    <button type="button" class="btn btn-success btn-ok" id="btnAggPaciente">Siguiente</button>
                    <br>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="date" class="form-control" id="txtNombres" placeholder="Fecha de nacimiento">
                </div>
                <div class="form-group col-md-3">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" id="txtApellidos" placeholder="Dui">
                </div>
                <div class="form-group col-md-3 text-center">

                    <button type="submit" class="btn btn-danger" id="btnAggPaciente">Cancelar</button>
                    <br>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="txtNombres" placeholder="Telefono">
                </div>
                <div class="form-group col-md-1">
                </div>
                <div class="form-group col-md-2">
                    <select id="selSexo" class="form-control">
                        <option value="0">Sexo</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>
                </div>
                <div class="form-group col-md-1">
                </div>
                <div class="form-group col-md-2">
                    <select id="selEstadoCivil" class="form-control">
                        <option value="0">Estado Civil</option>
                        <option value="1">Solter(a)</option>
                        <option value="2">Casad(a)</option>
                        <option value="3">Divorciad(a)</option>
                        <option value="4">Viud(a)</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" id="txtNombres" placeholder="Dirección">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripción"></textarea>
                </div>
            </div>

            <!-- Formulario Antecedentes  -->

            <!-- Formulario Consulta -->

            <!-- Formulario Exploracion física -->

            <!-- Formulario Diagnóstico -->

            <!-- Formulario Tratamiento -->


           