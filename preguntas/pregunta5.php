<?php
include '../includes/headerPreguntas.php';

echo "¿Qué representa una clase y un método cuando son declarados como final?";
echo "<br>";
echo "<br>";
echo "<p>La palabra reservada final se introduce en PHP 5.

Una final class es una clase que no puede ser extendida.

Una clase que incluye un método declarado como final puede tener clases hijas, pero los métodos declarados como final no pueden ser sobrescritos.

Nota: Hablamos de métodos porque son funciones al interior de una clase. Sin embargo, en la sintaxis de PHP, la declaración empezaría como final public function para un método público. </p>";

echo "<button class='leftbutton'><a href='pregunta4.php'class='button-4'>Anterior</a></button>";
echo "<button class='rightbutton'><a href='pregunta6.php'class='button-4'>Siguiente</a></button>";

include '../includes/footer.php';
    
