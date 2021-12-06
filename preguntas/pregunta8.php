<?php
include '../includes/headerPreguntas.php';

echo "¿Cómo se gestionan los fallos producidos al ejecutar las funciones include() y require()?";
echo "<br>";
echo "<br>";
echo "<p>Si la función require() no puede acceder al archivo solicitado, entonces finaliza con un fatal error.

En cambio la función include() produce un warning y el script PHP continúa su ejecución.</p>";

echo "<button class='leftbutton'><a href='pregunta7.php'class='button-4'>Anterior</a></button>";
echo "<button class='rightbutton'><a href='pregunta8.php'class='button-4'>Siguiente</a></button>";

include '../includes/footer.php';
    
