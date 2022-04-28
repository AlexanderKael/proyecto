<?php

namespace App\Model;

class Vehiculo
{
         public $matricula = "";
         public $modelo = "";
         public $potencia = "";

         function __construct($matric,$mod,$power)
         {

            $this->establecerMatricula($matric);
            $this->establecerModelo($mod);
            $this->establecerPotencia($power);

          }   

          public function obtenerMatricula()
          {
           
            return $this->matricula;
    
       }
         public function establecerMatricula($matric)
         {
           $this->matricula= $matric;
         }
         public function obtenerModelo()
         {
          
           return $this->modelo;
   
      }
        public function establecerModelo($mod)
        {
          $this->modelo= $mod;
        }
           public function obtenerPotencia()
         {
      
                return $this->potencia;
         }
            public function establecerPotencia($power)
      {
     $this->potencia= $power;
    
     }
}