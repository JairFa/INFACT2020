<?php

include '../SemaSoft2020/datos/UsuarioDao.php';

class UsuarioControlador
{

    public static function login($Usuarios, $Contraseña)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuarios($Usuarios);
        $obj_usuario->setContraseña($Contraseña);

        return UsuarioDao::login($obj_usuario);
    }

    public function getUsuario($Usuarios, $Contraseña)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuarios($Usuarios);
        $obj_usuario->setContraseña($Contraseña);

        return UsuarioDao::getUsuario($obj_usuario);
    }

    public function registrar($IDUsuario, $IDRol, $IDSucursal, $Usuarios, $Contraseña, $EstadoUsu)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setIDUsuario($IDUsuario);
        $obj_usuario->setIDRol($IDRol);
        $obj_usuario->setIDSucursal($IDSucursal);
        $obj_usuario->setUsuarios($Usuarios);
        $obj_usuario->setContraseña($Contraseña);
        $obj_usuario->setEstadoUsu($EstadoUsu);

        return UsuarioDao::registrar($obj_usuario);
    }

}