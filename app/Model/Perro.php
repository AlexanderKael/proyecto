<?php

namespace App\Model;

class Perro
{
    public $nombre = "";
    public $raza = "";
    public $edad = "";

    function __construct($name,$race,$age)

    {
        $this->establecerNombre($name);
        $this->establecerRaza($race);
        $this->establecerEdad($age);
    
    }


    public function obtenerNombre()
    {
       return $this->nombre;
    }
    public function establecerNombre($name)
    {
      $this->nombre=$name;
    }
    public function obtenerRaza()
    {
       return $this->raza;
    }
    public function establecerRaza($race)
    {
      $this->raza=$race;
    }
    public function obtenerEdad()
    {
       return $this->edad;
    }
    public function establecerEdad($age)
    {
      $this->edad=$age;
    }

}