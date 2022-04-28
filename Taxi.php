<?php

namespace App\Model;

class Taxi
{
         public $matricula = "";
         public $modelox = "";
         public $potenciax = "";

         function __construct($matr,$modeloo,$potenc)
         {

            $this->establecerMatricula($matr);
            $this->establecerModelox($modeloo);
            $this->establecerPotenciax($potenc);

          }   

          public function obtenerMatricula()
          {
           
            return $this->matricula;
    
       }
         public function establecerMatricula($matr)
         {
           $this->matricula= $matr;
         }
         public function obtenerModelox()
         {
          
           return $this->modelox;
   
      }
        public function establecerModelox($modeloo)
        {
          $this->modelox= $modeloo;
        }
           public function obtenerPotenciax()
         {
      
                return $this->potenciax;
         }
            public function establecerPotenciax($potenc)
      {
     $this->potenciax= $potenc;
    
     }
}