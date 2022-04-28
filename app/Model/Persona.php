<?php

namespace App\Model;

class Persona
{
         public $nombre = "";
         public $apellido = "";
         public $dni = "";

         function __construct($nomw,$apell,$documento)
         {

            $this->establecerNombre($nomw);
            $this->establecerApellido($apell);
            $this->establecerDni($documento);

          }   

          public function obtenerNombre()
          {
           
            return $this->nombre;
    
       }
         public function establecerNombre($nomw)
         {
           $this->nombre= $nomw;
         }
         public function obtenerApellido()
         {
          
           return $this->apellido;
   
      }
        public function establecerApellido($apell)
        {
          $this->apellido= $apell;
        }
           public function obtenerDni()
         {
      
                return $this->dni;
         }
            public function establecerDni($documento)
      {
     $this->dni= $documento;
    
     }
}