<?php 
namespace App\Models;
use App\Models\Curso;

class Estudiante{

    private $nombre;
    private $codigo;
    private $cursos;

    public function __construct($nombre,$codigo){
        
        $this->nombre=$nombre;
        $this->codigo=$codigo;
        
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
}