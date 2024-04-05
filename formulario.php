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
    </head>

    <body>

        <div class="container">

        <?php

        $nombre = $email = $comentario = $website = $opcion = "" ;

        if($_SERVER["REQUEST_METHOD"]== "POST"){

            $nombre= test_input($_POST["nombre"]);
            $email= test_input($_POST["email"]);
            $website= test_input($_POST["website"]);
            $comentario= test_input($_POST["comentario"]);
            $opcion= test_input($_POST["opcion"]);
        }

        function test_input($data){
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;


        }

        

?>  

        <h4 style="text-align:center; color: blue;"> FORMULARIO </h4>

        <br><br>

        <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        Nombre: <input type="text" name="nombre" style="background-color: violet;">
        <br><br>
        E-mail: <input type="text" name="email" style="background-color: green;">
        <br><br>
        website: <input type="text" name="website" style="background-color: violet;">
        <br><br>
        comentario: <textarea name="comentario" id="" cols="40" rows="5" style="background-color:yellow;"></textarea>
        <br><br>
        Estudios Realizados: 
        <input type="radio" name="opcion" value="bachiller" Required>Bachiller
        <input type="radio" name="opcion" value="superior" Required>Superior
        <input type="radio" name="opcion" value="doctorado" Required>Doctorado
        <br><br>
        <input type="submit" name="submit" value="ENVIAR">





        </form>

        <?php

        echo $nombre;
        "<br>";
        echo $email;
        "<br>";
        echo $website;
        "<br>";
        echo $comentario;
        "<br>";
        echo $opcion;
        "<br>";

        ?>


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
