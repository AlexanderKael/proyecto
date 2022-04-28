<?php

namespace App\Model;

class Computadora
{
    public $modelo = "";
    public $procesador = "";
    public $memoria = "";
    public $disco = "";

    function __construct($modelio,$proc,$mem,$disc)

    {
        $this->establecerModelo($modelio);
        $this->establecerProcesador($proc);
        $this->establecerMemoria($mem);
        $this->establecerDisco($disc);
    
    }


    public function obtenerModelo()
    {
       return $this->modelo;
    }
    public function establecerModelo($modelio)
    {
      $this->modelo=$modelio;
    }
    public function obtenerProcesador()
    {
       return $this->procesador;
    }
    public function establecerProcesador($proc)
    {
      $this->mprocesador=$proc;
    }
    public function obtenerMemoria()
    {
       return $this->memoria;
    }
    public function establecerMemoria($mem)
    {
      $this->memoria=$mem;
    }
    public function obtenerDisco()
    {
       return $this->disco;
    }
    public function establecerDisco($disc)
    {
      $this->disco=$disc;
    }
    

}