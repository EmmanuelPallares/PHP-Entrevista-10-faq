<?php
include '../includes/headerPreguntas.php';

echo "¿Cuál es la principal diferencia entre require() y require_once()?";
echo "<br>";
echo "<br>";
echo "<p>require() y require_once() cumplen con la misma tarea, pero la 2da función verifica si el script PHP ya se ha incluido, para evitar ejecutarlo nuevamente.

Nota: La misma idea aplica para include() e include_once().</p>";
echo "<button class='leftbutton'><a href='pregunta8.php'class='button-4'>Anterior</a></button>";
echo "<button class='rightbutton'><a href='pregunta10.php'class='button-4'>Siguiente</a></button>";

include '../includes/footer.php';
    
