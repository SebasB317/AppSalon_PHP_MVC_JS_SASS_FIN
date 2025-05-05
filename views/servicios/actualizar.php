<h1 class="nombre-pagina">ACTUALIZAR SERVICIO</h1>
<p class="descripcion-pagina">Modifica los datos requeridos para hacer la actualización</p>

<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
    $pagina_actual = 'actualizar-servicio';
    $titulo = 'Actualizar Servicio';
?>

<form method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" class="boton" value="Actualizar">
</form>