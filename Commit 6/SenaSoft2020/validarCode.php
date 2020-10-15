<?php

include '../SenaSoft2020/controlador/UsuarioControlador.php';
include '../SenaSoft2020/helps/helps.php';

session_start();

header('Content-type: application/json');
$resultado = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"])) {

        $txtUsuario  = validar_campo($_POST["txtUsuario"]);
        $txtPassword = validar_campo($_POST["txtPassword"]);

        $resultado = array("estado" => "true");

        
        header ("Location: vendedor.php");

        if (UsuarioControlador::login($txtUsuario, $txtPassword)) {
            $usuario             = UsuarioControlador::getUsuario($txtUsuario, $txtPassword);
            $_SESSION["usuario"] = array(
                "IDUsuario"         => $usuario->getIDUsuario(),
                "IDRol"     => $usuario->getIDRol(),
                "IDSucursal"    => $usuario->getIDSucursal(),
                "Usuarios"      => $usuario->getUsuarios(),
                "Contraseña" => $usuario->getContraseña(),
                "EstadoUsu" => $usuario->getEstadoUsu(),
            );
            return print(json_encode($resultado));
        }

    }
}

$resultado = array("estado" => "false");
return print(json_encode($resultado));
