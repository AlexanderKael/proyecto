<?php

namespace App\Model;

class Lavadora
{
    public $marca = "";
    public $modelo = "";
    public $numeroDeSerie = "";

    function __construct($marc,$model,$serial)

    {
        $this->establecerMarca($marc);
        $this->establecerModelo($model);
        $this->establecerNumeroDeSerie($serial);
    
    }


    public function obtenerMarca()
    {
       return $this->marca;
    }
    public function establecerMarca($marc)
    {
      $this->marca=$marc;
    }
    public function obtenerModelo()
    {
       return $this->modelo;
    }
    public function establecerModelo($model)
    {
      $this->modelo=$model;
    }
    public function obtenerNumeroDeSerie()
    {
       return $this->numeroDeSerie;
    }
    public function establecerNumeroDeSerie($serial)
    {
      $this->numeroDeSerie=$serial;
    }

}