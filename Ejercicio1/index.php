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
        <h1 class="text-center">Cabecera de la Pagina</h1>

        <form action="" method="post">
            <label for="">Título de la Página</label>
            <input type="text" class="form-control" name="titulo">
            <label for="">Orientación del título</label>
            <select name="orientacion" id="" class="form-control">
                <option value="">Eligir opción</option>
                <option value="Centrado">Centrado</option>
                <option value="Izquierda">Alineado a la izquierda</option>
                <option value="Derecha">Alineado a la derecha</option>
            </select>

            <label for="">Color de Cabecera</label>
            <input type="text" class="form-control" name="color">

            <label for="">Fuente</label>
            <input type="text" class="form-control" name="fuente">

            <input type="submit" class="btn btn-success mt-3" value="Enviar Datos"> 
        </form><br>

        <?php
            require "./CabeceraPagina.php";
            //evaluando todos los campos del formulario que no esten vacios
            if(isset($_POST['titulo'],  $_POST['orientacion'], $_POST['color'],$_POST['fuente'])){


                //instanciamos la clase CabeceraPagina
                $cabecerapagina = new CabeceraPagina($_POST['titulo'], $_POST['orientacion'],$_POST['color'],$_POST['fuente'] );

                //imprimimos el metodo que contiene la informacion previa solicitada
                echo $cabecerapagina->obtenerInformacion();
                echo $cabecerapagina->orientacionTitulo();
            }
        ?>
    </section>
</body>
</html>