<html>
<?php

require_once __DIR__.'/bootstrap/app.php';


use App\Model\Usuario;

$usuario = new Usuario("Usuario kael con  "," correo: kael_tc@hotmail.com"," y contraseña: 962719192");

 echo $usuario->obtenerNombre();
 echo $usuario->obtenerEmail();
 echo $usuario->obtenerPassword();

echo "<br>";
 use App\Model\Hospital;
 $paciente = new Hospital(" El Paciente Pedro se atendio " ,"Con El Doctor Alejandro"," de gripe");
 echo $paciente->obtenerPaciente();
 echo $paciente->obtenerDoctor();
 echo $paciente->obtenerEnfermedad();

 echo "<br>";
 use App\Model\Colegio;
 $colegio = new Colegio(" El alumno Juan "," llevo la materia de matematicas"," con el profesor Alexander");
 echo $colegio->obtenerAlumno();
 echo $colegio->obtenerMateria();
 echo $colegio->obtenerProfesor();
 echo "<br>";
 use App\Model\Lavadora;
 $lavadoras = new Lavadora(" Lavadora de marca LG "," Modelo TUGEW"," con numero de serie 658dwe891 fue vendida");
 echo $lavadoras->obtenerMarca();
 echo $lavadoras->obtenerModelo();
 echo $lavadoras->obtenerNumeroDeSerie();
 echo "<br>";
 use App\Model\Perro;
 $perros = new Perro(" El perro Spike "," De raza Doberman"," Tiene 5 años ");
 echo $perros->obtenerNombre();
 echo $perros->obtenerRaza();
 echo $perros->obtenerEdad();
 echo "<br>";
 use App\Model\Vehiculo;
 $vehiculos = new Vehiculo(" El vehiculo con matricula 6584ET "," De modelo cr - v - "," Tiene 100 caballos de fuerza ");
 echo $vehiculos->obtenerMatricula();
 echo $vehiculos->obtenerModelo();
 echo $vehiculos->obtenerPotencia();
 echo "<br>";
 use App\Model\Libro;
 $libros = new Libro(" El libro Hamlet "," De William Shakespeare "," fue patentada por alma ");
 echo $libros->obtenerTitulo();
 echo $libros->obtenerAutor();
 echo $libros->obtenerEditorial();
 echo "<br>";
 use App\Model\Estudiante;
 $estudiantes = new Estudiante(" El estudiante Paolo "," Con codigo  20176518 "," estudia derecho ");
 echo $estudiantes->obtenerNombre();
 echo $estudiantes->obtenerCodigo();
 echo $estudiantes->obtenerCarrera();
 echo "<br>";
 use App\Model\Celular;
 $celulares = new Celular(" El telefono xiaomi "," Modelo 10s "," tiene 128gb ");
 echo $celulares->obtenerMarca();
 echo $celulares->obtenerModelo();
 echo $celulares->obtenerMemoria();

 echo "<br>";
 use App\Model\Persona;
 $personas = new Persona(" La persona con nombre jose "," y apellido perez "," con dni 72458962 ");
 echo $personas->obtenerNombre();
 echo $personas->obtenerApellido();
 echo $personas->obtenerDni();

 echo "<br>";
 use App\Model\Computadora;
 $computadoras = new Computadora(" La computadora de modelo XX1 "," con procesador core i9 "," Memoria de 64GB "," y Disco de 2TB ");
 echo $computadoras->obtenerModelo();
 echo $computadoras->obtenerProcesador();
 echo $computadoras->obtenerMemoria();
 echo $computadoras->obtenerDisco();

 echo "<br>";
 use App\Model\Taxi;
 $taxis = new Taxi(" El taxi de matricula 334-gff "," modelo GTX-344 "," potencia 344 HP ");
 echo $taxis->obtenerMatricula();
 echo $taxis->obtenerModelox();
 echo $taxis->obtenerPotenciax();

 echo "<br>";
 use App\Model\Caballo;
 $caballos = new Caballo(" El caballo tornado "," con 5 años de edad"," y un peso de 130 kilos se encuentra saludable ");
 echo $caballos->obtenerNombreC();
 echo $caballos->obtenerEdadC();
 echo $caballos->obtenerPesoC();

 echo "<br>";
 use App\Model\Factura;
 $Facturas = new Factura(" La factura para el Ruc 1022403565 "," que se encuentra a nombre de COMPUTADORAS SAC"," con direccion Jr. alamos 222 se genero con exito");
 echo $Facturas->obtenerRuc();
 echo $Facturas->obtenerRazon();
 echo $Facturas->obtenerDireccion();
 
?>
 </html>


