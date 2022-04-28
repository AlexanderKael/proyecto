<?php

namespace App\Model;

class Hospital
{
    public $paciente = "";
    public $doctor = "";
    public $enfermedad = "";

    function __construct($pac,$doc,$enf)

{
    $this->establecerPaciente($pac);
    $this->establecerDoctor($doc);
    $this->establecerEnfermedad($enf);


}
       public function obtenerPaciente()
       {
          return $this->paciente;
       }
       public function establecerPaciente($pac)
       {
           $this->paciente= $pac;
       }
       public function obtenerDoctor()
       {
          return $this->doctor;
       }
       public function establecerDoctor($doc)
       {
           $this->doctor= $doc;
       }
       public function obtenerEnfermedad()
       {
          return $this->enfermedad;
       }
       public function establecerEnfermedad($enf)
       {
           $this->enfermedad= $enf;
       }


}