<?php 
/** *************************************
 * @author Alexander Antonio Soto Brito *
 * @author Jaime Alberto Portillo Luna  *
 * @author Jose Miguel Arevalo Moreira  *
 * @copyright 2022 - 2025               *
 * @version 1.0.0                       *
 * @date 2022-06-05 12:32:21            *
 ************************************* **/
session_start();
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
switch ($tipo) {
    case 'iniciar':
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
        $clave = isset($_POST['clave']) ? $_POST['clave'] : '';
        IniciarSesion($usuario, $clave);
        break;
    case 'cerrar':
        CerrarSesion();
        break;
}

function IniciarSesion($usuario, $clave) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['clave'] = $clave;
    echo json_encode(array('estado' => 1, 'mensaje' => 'Bienvenido'));
}

function CerrarSesion() {
    session_destroy();
    echo json_encode(array('estado' => 1, 'mensaje' => 'Sesion Cerrada'));
}