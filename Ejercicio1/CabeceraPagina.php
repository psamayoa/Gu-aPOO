<?php 


class CabeceraPagina{

    #asignacion de atributos
    public $titulo;
    public $orientacion;
    public $color;
    public $fuente; 


    //constructor para inicializar el objeto CabeceraPagina
    public function __construct($titulo, $orientacion, $color, $fuente)
    {
        //accediendo al atributo y asignadole argumento
        $this->titulo = $titulo;
        $this->orientacion = $orientacion;
        $this->color = $color;
        $this->fuente = $fuente;
    }


    public function orientacionTitulo(){
        switch($this->orientacion){
            case "Centrado":
                echo "<div class='alert alert-secondary' role='alert' >
                <h1 style='text-align:center';> El título aparecera orientado de esta forma.</h1>
                </div>";
                break;
            case "Izquierda":
                echo "<div class='alert alert-secondary' role='alert'>
                <h1 style='text-align: left;'> El título aparecera orientado de esta forma.</h1>
                </div>";
                break;
            case "Derecha":
                echo "<div class='alert alert-secondary' role='alert'>
                <h1 style='text-align: right;'>El título aparecera orientado de esta forma.</h1>
                </div>";
                break; 
            default:
                echo "Ingrese la orientación del título";
        }
    }



    public function obtenerInformacion()
    {
        return "<div class='card'>
            <div class='card-body'>
            <p class='card-text'>
                <b>Titulo: </b>$this->titulo<br>
                <b>Orientación de título: </b>$this->orientacion<br>
                <b>Color: </b>$this->color<br>
                <b>Fuente: </b>$this->fuente<br>
            </p>
            </div>
        </div>";
    }


}


?>