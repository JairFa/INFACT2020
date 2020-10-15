<?php

class Usuario
{

    private $IDUsuario;
    private $IDRol;
    private $IDSucursal;
    private $Usuarios;
    private $Contraseña;
    private $EstadoUsu;
    
    public function getIDUsuario()
    {
        return $this->IDUsuario;
    }

    public function setIDUsuario($IDUsuario)
    {
        $this->IDUsuario = $IDUsuario;
    }

    public function getIDRol()
    {
        return $this->IDRol;
    }

    public function setIDRol($IDRol)
    {
        $this->IDRol = $IDRol;
    }

    public function getIDSucursal()
    {
        return $this->IDSucursal;
    }

    public function setIDSucursal($IDSucursal)
    {
        $this->IDSucursal = $IDSucursal;
    }

    public function getUsuarios()
    {
        return $this->Usuarios;
    }

    public function setUsuarios($Usuarios)
    {
        $this->Usuarios = $Usuarios;
    }

    public function getContraseña()
    {
        return $this->Contraseña;
    }

    public function setContraseña($Contraseña)
    {
        $this->Contraseña = $Contraseña;
    }

    public function getEstadoUsu()
    {
        return $this->EstadoUsu;
    }

    public function setEstadoUsu($EstadoUsu)
    {
        $this->EstadoUsu = $EstadoUsu;
    }
}
