<?php

namespace App\Model;

class Usuario
{
         public $nombre = "";
         public $email = "";
         public $password = "";

         function __construct($nom,$correo,$contraseña)
         {

            $this->establecerNombre($nom);
            $this->establecerEmail($correo);
            $this->establecerPassword($contraseña);

          }   

          public function obtenerNombre()
          {
           
            return $this->nombre;
    
       }
         public function establecerNombre($nom)
         {
           $this->nombre= $nom;
         }
         public function obtenerEmail()
         {
          
           return $this->email;
   
      }
        public function establecerEmail($correo)
        {
          $this->email= $correo;
        }
           public function obtenerPassword()
         {
      
                return $this->password;
         }
            public function establecerPassword($contraseña)
      {
     $this->password= $contraseña;
    
     }
}
