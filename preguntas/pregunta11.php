<?php
include '../includes/headerPreguntas.php';

echo "¿Cómo se puede asignar un tiempo de ejecución infinito para un script PHP?";
echo "<br>";
echo "<br>";
echo "<p>No es una práctica recomendada, ya que lo mejor es tener un límite y controlar la ejecución de nuestros scripts. Por ejemplo, para tareas que puedan exceder el tiempo límite se pueden usar queue jobs.

De todas formas, se logra agregando set_time_limit(0) al inicio de un script. Esto evitaría el error de maximum execution time exceeded. Y esta configuración también se puede definir en el archivo php.ini.</p>";
echo "<button class='leftbutton'><a href='pregunta10.php'class='button-4'>Anterior</a></button>";
echo "<button class='rightbutton'><a href='pregunta12.php'class='button-4'>Siguiente</a></button>";


include '../includes/footer.php';
    