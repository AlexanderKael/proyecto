<?php

namespace App\Model;

class Factura
{
         public $ruc = "";
         public $razon = "";
         public $direccion = "";

         function __construct($ruk,$raz,$dire)
         {

            $this->establecerRuc($ruk);
            $this->establecerRazon($raz);
            $this->establecerDireccion($dire);

          }   

          public function obtenerRuc()
          {
           
            return $this->ruc;
    
       }
         public function establecerRuc($ruk)
         {
           $this->ruc= $ruk;
         }
         public function obtenerRazon()
         {
          
           return $this->razon;
   
      }
        public function establecerRazon($raz)
        {
          $this->razon= $raz;
        }
           public function obtenerDireccion()
         {
      
                return $this->direccion;
         }
            public function establecerDireccion($dir)
      {
     $this->direccion= $dir;
    
     }
}