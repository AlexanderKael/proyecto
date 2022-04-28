<?php

namespace App\Model;

class Caballo
{
         public $nombreCab = "";
         public $edadCab= "";
         public $pesoCab = "";

         function __construct($nomC,$edC,$pesC)
         {

            $this->establecerNombreC($nomC);
            $this->establecerEdadC($edC);
            $this->establecerPesoC($pesC);

          }   

          public function obtenerNombreC()
          {
           
            return $this->nombreCab;
    
       }
         public function establecerNombreC($nomC)
         {
           $this->nombreCab= $nomC;
         }
         public function obtenerEdadC()
         {
          
           return $this->edadCab;
   
      }
        public function establecerEdadC($edC)
        {
          $this->edadCab= $edC;
        }
           public function obtenerPesoC()
         {
      
                return $this->pesoCab;
         }
            public function establecerPesoC($pesC)
      {
     $this->pesoCab= $pesC;
    
     }
}