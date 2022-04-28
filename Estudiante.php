<?php

namespace App\Model;

class Estudiante
{
         public $nombre = "";
         public $codigo = "";
         public $carrera = "";

         function __construct($nomb1,$code,$carre)
         {

            $this->establecerNombre($nomb1);
            $this->establecerCodigo($code);
            $this->establecerCarrera($carre);

          }   

          public function obtenerNombre()
          {
           
            return $this->nombre;
    
       }
         public function establecerNombre($nomb1)
         {
           $this->nombre= $nomb1;
         }
         public function obtenerCodigo()
         {
          
           return $this->codigo;
   
      }
        public function establecerCodigo($code)
        {
          $this->codigo= $code;
        }
           public function obtenerCarrera()
         {
      
                return $this->carrera;
         }
            public function establecerCarrera($carre)
      {
     $this->carrera= $carre;
    
     }
}