<?php

require_once __DIR__."/../vendor/autoload.php";

use App\Models\Curso;
use App\Models\Estudiante;
use App\Controller\Matricula;

$matricula = new Matricula("","");

$datos= new Matricula("20/06/22");

$nombre = new Estudiante("TRUJILLO VILCHERREZ JAHIR ANTHONY",2017110764);

$matricula->agregar(new Curso("MATEMATICA"));
$matricula->agregar(new Curso("QUIMICA"));
$matricula->agregar(new Curso("FISICA"));


echo "MATRICULA   ". "Fecha:".$datos->getFecha()."<br>";


echo "Alumno:".$nombre->getNombre()."<br>";
echo "Codigo:".$nombre->getCodigo()."<br>";

echo "<br>"."CURSOS MATRICULADOS"."<br>"."<br>";

foreach($matricula->listar() as $curso){

    echo "curso: ".$curso->getCursos()."<br>";

}


