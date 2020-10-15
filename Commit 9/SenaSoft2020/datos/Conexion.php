<?php
#Conexion con la base de datos para acceder a la informacion de las tablas
class Conexion
{

    /**
     * Conexión a la base datos
     *
     * @return PDO
     */
    public static function conectar()
    {
        try {

            $cn = new PDO("mysql:host=localhost;dbname=infact2020", "root", "");

            return $cn;

        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

}