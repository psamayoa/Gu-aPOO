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
        <h1 class="text-center">Canción</h1>

        <form action="" method="post">
            <label for="">Título</label>
            <input type="text" class="form-control" name="titulo">

            <label for="">Género</label>
            <input type="text" class="form-control" name="genero">

            <label for="">Autor</label>
            <input type="text" class="form-control" name="autor">

            <input type="submit" class="btn btn-success mt-3" value="Enviar Datos"> 
        </form><br>

        <?php
            require "./Cancion.php";
            //evaluando todos los campos del formulario que no esten vacios
            if(isset($_POST['titulo'],  $_POST['genero'], $_POST['autor'])){


                //instanciamos la clase Cancion
                $cancion = new Cancion($_POST['titulo'],  $_POST['genero']);

                //imprimimos el metodo que contiene la informacion previa solicitada
                echo $cancion->obtenerInformacion();
                $cancion->setAutor($_POST['autor']);
                echo $cancion->getAutor();

                
            }
        ?>
    </section>
</body>
</html>