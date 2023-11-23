<?php

class Cancion{


    #asignacion de atributos
    public $titulo;
    public $genero;
    private $autor;



    //constructor para inicializar el objeto Cancion
    public function __construct($titulo, $genero)
    {
        //accediendo al atributo y asignadole argumento
        $this->titulo = $titulo;
        $this->genero = $genero;
    }


     //atributos privados utilizamos los metodos get y set
    /**
     * get => imprimir el atributo (retornarlo)
     * set => captura la informacion del atributo
     */

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getAutor(){
        return "Autor: " . $this->autor;
    }


    public function obtenerInformacion()
    {
        return "<div class='card'>
            <div class='card-body'>
            <h5 class='card-title'>DATOS DE LA CANCIÓN</h5>
            <p class='card-text'>
                <b>Titulo: </b>$this->titulo<br>
                <b>Genero: </b>$this->genero<br>
            </p>
            </div>
        </div>";
    }



}




?>