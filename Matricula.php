<?php 
namespace App\Controller;
use App\Models\Curso;

class Matricula{

    private $fecha;
    private $cursos;

    public function __construct($fecha){
        
        $this->fecha=$fecha;
     
        
    }

    public function getFecha()
    {
        return $this->fecha;
    }


    public function agregar(Curso $curso){

        $this->cursos[]=$curso;
    }

    public function listar(){

        return $this->cursos;
    }
}
