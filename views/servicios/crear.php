<h1 class="nombre-pagina">NUEVO SERVICIO</h1>
<p class="descripcion-pagina">Llena los campos para añadir un nuevo servicio</p>

<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
    $pagina_actual = 'nuevo-servicio';
    $titulo = 'Nuevo Servicio';
?>

<form action="/servicios/crear" method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" class="boton" value="Guardar Servicio">
</form>