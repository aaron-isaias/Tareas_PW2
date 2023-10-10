<?php

    $dato1= $_POST["txtnombre"]; // usamos un arreglo para almacenar  

    if ($dato1=="Aaron Isaias"){
        echo "<h1>Has entrado con el usuario Correcto: </h1>" . $dato1;
        echo  "<br />";
        echo "Presiona este enlace para volver a la pagina de inicio";
        echo  "<br />";
        echo '<a href="Formulario.php">INICIO</a>';

    }else {
        echo "Nombre no valido, por favor introdusca el nombre correcto";
        echo "<br />";
        echo '<a href="Formulario.php">INICIO</a>';     
    }

        
?>