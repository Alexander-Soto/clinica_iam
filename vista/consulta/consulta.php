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
    <div class="myDiv">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Identificación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Antecedentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Consulta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Exploración Física</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Diagnóstico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tratamiento</a>
            </li>
        </ul>
        <br>
        <form>
            <div class="form-row">
                <div class="input-group col-md-11">
                    <div class="form-outline col-md-5">
                        <input type="search" id="form1" class="form-control" placeholder="Paciente" />
                    </div>
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                    <div class="form-group col-md-2">
                </div>
                    <div class="form-outline col-md-3">
                        <input type="search" id="form1" class="form-control" placeholder="Dui" />
                    </div>
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="txtNombres" placeholder="Nombres">
                </div>
                <div class="form-group col-md-2">
                </div>
                <div class="form-group col-md-1">
                    <input type="text" class="form-control" id="txtApellidos" placeholder="Edad">
                </div>
                <div class="form-group col-md-3 text-center">

                    <button type="submit" class="btn btn-success" id="btnAggPaciente">Siguiente</button>
                    <br>
                </div>
            </div>