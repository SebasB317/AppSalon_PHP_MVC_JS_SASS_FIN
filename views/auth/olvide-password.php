<h1 class="nombre-pagina">RESTABLECER CONTRASEÑA</h1>
<p class="descripcion-pagina">Restablece la contraseña ingresando tu email a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
    $pagina_actual = 'olvide';
    $titulo = 'Restablecer Contraseña';
?>

<form class="formulario" action="/olvide" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Email"
        />
    </div>

    <input type="submit" class="boton" value="Enviar Correo">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear Una</a>
</div>