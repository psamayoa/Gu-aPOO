<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section class="container">
        <h1 class="text-center">Cuenta Bancaria</h1>

        <form action="" method="post">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre">

            <label for="">Tipo de cuenta</label>
            <input type="text" class="form-control" name="tipoCuenta">

            <label for="">Numero de cuenta</label>
            <input type="text" class="form-control" name="numeroCuenta">

            <label for="">Deposito</label>
            <input type="text" class="form-control" name="cantidad">

            <label for="">Retiro</label>
            <input type="text" class="form-control" name="valor">

            <input type="submit" class="btn btn-success mt-3" value="Enviar Datos"> 
        </form><br>

        <?php
            require "./Cuenta.php";
            //evaluando todos los campos del formulario que no esten vacios
            if(isset($_POST['nombre'],  $_POST['tipoCuenta'], $_POST['numeroCuenta'])){


                //instanciamos la clase Cancion
                $cuenta = new Cuenta($_POST['nombre'],  $_POST['tipoCuenta'], $_POST['numeroCuenta'], $_POST['cantidad'] );

                //imprimimos el metodo que contiene la informacion previa solicitada
                echo $cuenta->obtenerInformacion();
                echo $cuenta->depositar();
                echo $cuenta->retirar($_POST['valor']);
                
            }
        ?>
    </section>
</body>
</html>