<?php

include 'Conexion.php';
include '../SenaSoft2020/entidades/Usuario.php';

class UsuarioDao extends Conexion
{
    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

    /**
     * Metodo que sirve para validar el login
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function login($usuario)
    {
        $query = "SELECT * FROM tblusuarios WHERE Usuarios = :Usuarios AND Contraseña = :Contraseña";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":Usuarios", $usuario->getUsuarios());
        $resultado->bindValue(":Contraseña", $usuario->getContraseña());

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if ($filas["Usuarios"] == $usuario->getUsuarios()
                && $filas["Contraseña"] == $usuario->getContraseña()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Metodo que sirve obtener un usuario
     *
     * @param      object         $usuario
     * @return     object
     */
    public static function getUsuario($usuario)
    {
        $query = "SELECT IDUsuario,IDRol,IDSucursal,Usuarios,Contraseña,EstadoUsu FROM tblusuarios WHERE Usuarios = :Usuarios AND Contraseña = :Contraseña";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":Usuarios", $usuario->getUsuarios());
        $resultado->bindValue(":Contraseña", $usuario->getContraseña());

        $resultado->execute();

        $filas = $resultado->fetch();

        $usuario = new Usuario();
        $usuario->setIDUsuario($filas["IDUsuario"]);
        $usuario->setIDRol($filas["IDRol"]);
        $usuario->setIDSucursal($filas["IDSucursal"]);
        $usuario->setUsuarios($filas["Usuarios"]);
        $usuario->setContraseña($filas["Contraseña"]);
        $usuario->setEstadoUsu($filas["EstadoUsu"]);

        return $usuario;
    }

    /**
     * Metodo que sirve para registrar usuarios
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function registrar($usuario)
    {
        $query = "INSERT INTO tblusuarios (IDUsuario,IDRol,IDSucursal,Usuarios,Contraseña,EstadoUsu) VALUES (:IDUsuario,:IDRol,:IDSucursal,:Usuarios,:Contraseña,:EstadoUsu)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":IDUsuario", $usuario->getIDUsuario());
        $resultado->bindValue(":IDRol", $usuario->getIDRol());
        $resultado->bindValue(":IDSucursal", $usuario->getIDSucursal());
        $resultado->bindValue(":Usuarios", $usuario->getUsuarios());
        $resultado->bindValue(":Contraseña", $usuario->getContraseña());
        $resultado->bindValue(":EstadoUsu", $usuario->getEstadoUsu());

        if ($resultado->execute()) {
            return true;
        }

        return false;
    }
}
