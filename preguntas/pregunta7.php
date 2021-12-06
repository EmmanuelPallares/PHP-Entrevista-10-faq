<?php
include '../includes/headerPreguntas.php';

echo "¿Cómo pueden interactuar PHP y Javascript?";
echo "<br>";
echo "<br>";
echo "<p>PHP es un lenguaje de lado del servidor. Javascript es un lenguaje de lado del cliente.

Y pueden comunicarse de muchas maneras, que además aplican para cualquier otra tecnología backend:

PHP como tecnología backend genera respuestas ante las solicitudes de los usuarios. Entonces PHP puede devolver una vista HTML incluyendo código Javascript, e imprimir de esta manera la declaración de variables JS con valores asignados.

Enviar valores de JS a PHP es posible haciendo peticiones al servidor. Por ejemplo,

haciendo uso de un formulario (con campos ocultos que contienen información asignada con JS),
enviando parámetros GET al visitar una URL (sí, JS también puede generar redirecciones en el navegador),
o haciendo peticiones asíncronas (Ajax).
De hecho, el servidor tiene la oportunidad de devolver una respuesta, y por tanto, comunicar valores nuevamente.</p>";
echo "<button class='leftbutton'><a href='pregunta6.php'class='button-4'>Anterior</a></button>";
echo "<button class='rightbutton'><a href='pregunta8.php'class='button-4'>Siguiente</a></button>";

include '../includes/footer.php';
    
