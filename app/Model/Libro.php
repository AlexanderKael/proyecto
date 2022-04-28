<?php

namespace App\Model;

class Libro
{
         public $titulo = "";
         public $autor = "";
         public $editorial = "";

         function __construct($titu,$auto,$edit)
         {

            $this->establecerTitulo($titu);
            $this->establecerAutor($auto);
            $this->establecerEditorial($edit);

          }   

          public function obtenerTitulo()
          {
           
            return $this->titulo;
    
       }
         public function establecerTitulo($titu)
         {
           $this->titulo= $titu;
         }
         public function obtenerAutor()
         {
          
           return $this->autor;
   
      }
        public function establecerAutor($auto)
        {
          $this->autor= $auto;
        }
           public function obtenerEditorial()
         {
      
                return $this->editorial;
         }
            public function establecerEditorial($edit)
      {
     $this->editorial= $edit;
    
     }
}