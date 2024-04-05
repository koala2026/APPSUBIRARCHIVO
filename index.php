<?php

$formatos = array('.jpg','.png', '.gif', '.pdf', '.sql');

$directorio = 'archivos';

if(isset($_POST['boton'])){

    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTMPArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));

    if(in_array($ext,$formatos)){
        if(move_uploaded_file($nombreTMPArchivo,"$directorio/$nombreArchivo")){

        }else{
            echo "Ocurrió un Error subiendo el Archivo";
        }
        }else{
            echo "La extensión del Archivo no es la adecuada";
        }

    }







?>




<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css">
    </head>

    <body>



    <div
        class="container" style="text-align; color: blue"
    >
        <h1> SUBIR ARCHIVO</h1>

    </div>
    
       <div
        class="container mt-3"
       >

       <div class="card">
        <div class="card-header">
            Actividades Enviadas
             
        </div>

        <div class="card-block" >
            <div class="row">

        <?php
            if($dir=opendir($directorio)){

                while($archivo=readdir($dir)){
                    if($archivo != '.' && $archivo != '..'){
                        echo'<div class="col-sm-3 col-xs-12">';
                        echo "Archivo: <strong>$archivo</strong>";
                        echo '<img src="1.png" style= "width:30px; height:30px;" '
                         .$directorio . '/' .$archivo. ' title="archivo" />';

                         echo '</div>';
                    }
                    
                }

            }
         
    ?>
            </div>
        </div>



       </div>

       <div style= margin-top:400px;margin-left:200px>

       <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="archivo">ARCHIVO </label>
                <input type="file" class="form-control-file" id="archivo" aria-describedby="fileHelp" name="archivo">
                <small id="fileHelp" class="form-text tex-muted">Archivo Permitido</small>



            </div>
            <button type="submit" class="btn-btn-primary" name="boton">SUBIR ARCHIVO</button>



       </form>
       </div>
       
        



        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
