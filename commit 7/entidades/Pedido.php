<?php

class Pedido
{

    private $idPe;
    private $idC;
    private $idPr;
    private $cantidadPe;
    private $valorU;
    private $valorT;
    private $estadoPe;
    private $fechaPe;

    public function getIdPe()
    {
        return $this->idPe;
    }

    public function setIdPe($idPe)
    {
        $this->idPe = $idPe;
    }

    public function getIdC()
    {
        return $this->idC;
    }

    public function setIdC($IdC)
    {
        $this->idC = $idC;
    }

    public function getIdPr()
    {
        return $this->idPr;
    }

    public function setUsuario($idPr)
    {
        $this->idPr = $idPr;
    }

    public function getCantidaPe()
    {
        return $this->cantidaPe;
    }

    public function setCantidadPe($cantidaPe)
    {
        $this->cantidaPe = $cantidaPe;
    }

    public function getValorU()
    {
        return $this->valorU;
    }

    public function setValorU($valorU)
    {
        $this->valorU = $valorU;
    }
    public function getValorT()
    {
        return $this->valorT;
    }

    public function setValorT($valorT)
    {
        $this->valorT = $valorT;
    }

    public function getEstadoPe()
    {
        return $this->estadoPe;
    }

    public function setEstadoPe($estadoPe)
    {
        $this->estadoPe = $estadoPe;
    }

    public function getFechaPe()
    {
        return $this->fechaPe;
    }

    public function setFechaPe($fechaPe)
    {
        $this->fechaPe = $fechaPe;
    }

}