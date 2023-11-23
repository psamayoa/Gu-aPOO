<?php

class Cuenta{


    #asignacion de atributos
    public $nombre;
    public $cantidad;
    public $tipoCuenta;
    public $numeroCuenta;
    //constructor para inicializar el objeto Cuenta
    public function __construct($nombre, $tipoCuenta, $numeroCuenta, $cantidad)
    {
        //accediendo al atributo y asignadole argumento
        $this->nombre = $nombre;
        $this->tipoCuenta = $tipoCuenta;
        $this->numeroCuenta = $numeroCuenta;
        $this->cantidad = $cantidad;
    }

    public function obtenerInformacion(){
        return "<div class='card'>
        <div class='card-body'>
        <h5 class='card-title'>DATOS DE DEPOSITO</h5>
        <p class='card-text'>
            <b>Nombre: </b>$this->nombre<br>
            <b>Tipo de Cuenta: </b>$this->tipoCuenta<br>
            <b>Numero de Cuenta: </b>$this->numeroCuenta<br>
        </p>
        </div>
    </div><br>";
        
    }


    public function depositar(){
        
        if($this->cantidad < 5){
            echo "<div class='alert alert-secondary' role='alert'>
                Debe depositar una cantidad mayor a $5.00.</div>";
        }else{
            echo "<div class='alert alert-secondary' role='alert'>
            Se ha depositado correctamente $ $this->cantidad .00</div>";
        }
    }


    public function retirar($valor){

        if($valor == 0){
            echo "<div class='alert alert-secondary' role='alert'>
            No se hizo retir.</div>";
        }else{

         if($valor >= 5){

            $total = ($this -> cantidad) - $valor;

            echo "<div class='alert alert-secondary' role='alert'>
            Su retiro es de $$valor.00 <br>Posee en su cuenta $$total.00 </div>";
 
        }else{
            echo "<div class='alert alert-secondary' role='alert'>
            No se existen fondos en la cuenta.</div>";
        }
        }

    }
}

?>