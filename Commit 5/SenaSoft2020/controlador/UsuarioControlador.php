<?php

include '../datos/UsuarioDao.php';

class UsuarioControlador
{

    public static function login($usuarioU, $passwordU)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuarioU($usuarioU);
        $obj_usuario->setPasswordU($passwordU);

        return UsuarioDao::login($obj_usuario);
    }

    public function getUsuario($usuarioU, $passwordU)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuarioU($usuarioU);
        $obj_usuario->setPasswordU($passwordU);

        return UsuarioDao::getUsuario($obj_usuario);
    }

    public function registrar($nombreU, $documentoU, $usuarioU, $passwordU, $privilegioU, $estadoU)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setNombreU($nombreU);
        $obj_usuario->setUsuarioU($usuarioU);
        $obj_usuario->setdocumentoU($documentoU);
        $obj_usuario->setPrivilegioU($privilegioU);
        $obj_usuario->setEstadoU($estadoU);
        $obj_usuario->setPasswordU($passwordU);

        return UsuarioDao::registrar($obj_usuario);
    }

}