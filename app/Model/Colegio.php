<?php

namespace App\Model;

class Colegio
{
    public $alumno = "";
    public $profesor = "";
    public $materia = "";

    function __construct($alumn,$curso,$profe)

    {
        $this->establecerAlumno($alumn);
        $this->establecerMateria($curso);
        $this->establecerProfesor($profe);
    
    }


    public function obtenerAlumno()
    {
       return $this->alumno;
    }
    public function establecerAlumno($alumn)
    {
      $this->alumno=$alumn;
    }
    public function obtenerMateria()
    {
       return $this->materia;
    }
    public function establecerMateria($curso)
    {
      $this->materia=$curso;
    }
    public function obtenerProfesor()
    {
       return $this->profesor;
    }
    public function establecerProfesor($profe)
    {
      $this->profesor=$profe;
    }

}