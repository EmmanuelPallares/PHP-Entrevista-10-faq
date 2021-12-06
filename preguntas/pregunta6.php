<?php
include '../includes/headerPreguntas.php';

echo "¿Cómo funciona la comparación de objetos en PHP?";
echo "<br>";
echo "<br>";
echo "<p>El operador == considera como iguales a 2 objetos si

tienen los mismos atributos y valores (comparando cada uno con ==),
y son además instancias de una misma clase.
Para verificar si 2 objetos hacen referencia a una misma instancia de una misma clase, usamos el operador ===.</p>";
echo "<button class='leftbutton'><a href='pregunta5.php'class='button-4'>Anterior</a></button>";
echo "<button class='rightbutton'><a href='pregunta6.php'class='button-4'>Siguiente</a></button>";


include '../includes/footer.php';
    



