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
        <h1 class="text-center">Operaciones matematicas</h1>
        <h5 class="text-center">Ingresar 2 números para calcular las siguientes operaciones matematicas: suma, resta, multiplicación, disivisión, potencia y factorial</h5>
        <form action="" method="post">
            <label for="">Ingresar primer numero</label>
            <input type="text" class="form-control" name="num1">

            <label for="">Ingresar segundo numero</label>
            <input type="text" class="form-control" name="num2">


            <input type="submit" class="btn btn-success mt-3" value="Enviar Datos"> 
        </form><br>

        <?php
            require "./Calculadora.php";
            //evaluando todos los campos del formulario que no esten vacios
            if(isset($_POST['num1'],  $_POST['num2'])){


                //instanciamos la clase Cancion
                $calculadora = new Calculadora();

                //imprimimos el metodo que contiene la informacion previa solicitada
                echo $calculadora->sumar($_POST['num1'],  $_POST['num2']);
                echo $calculadora->restar($_POST['num1'],  $_POST['num2']);
                echo $calculadora->multiplicar($_POST['num1'],  $_POST['num2']);
                echo $calculadora->dividir($_POST['num1'],  $_POST['num2']);
                echo $calculadora->potencia($_POST['num1'],  $_POST['num2']);
                echo $calculadora->factorial($_POST['num1']);
                
            }
        ?>
    </section>
</body>
</html>