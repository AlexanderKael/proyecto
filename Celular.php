<?php

namespace App\Model;

class Celular
{
    public $marca = "";
    public $modelo = "";
    public $memoria = "";

    function __construct($marc,$model,$memori)

{
    $this->establecerMarca($marc);
    $this->establecerModelo($model);
    $this->establecerMemoria($memori);


}
       public function obtenerMarca()
       {
          return $this->marca;
       }
       public function establecerMarca($marc)
       {
           $this->marca= $marc;
       }
       public function obtenerModelo()
       {
          return $this->modelo;
       }
       public function establecerModelo($model)
       {
           $this->modelo= $model;
       }
       public function obtenerMemoria()
       {
          return $this->memoria;
       }
       public function establecerMemoria($memori)
       {
           $this->memoria= $memori;
       }


}