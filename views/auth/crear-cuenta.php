<h1 class="nombre-pagina">CREAR CUENTA</h1>
<p class="descripcion-pagina">Ingresa los siguientes datos para crear una cuenta</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
    $pagina_actual = 'crear-cuenta';
    $titulo = 'Crear Cuenta';
?>

<form class="formulario" method="POST" action="/crear-cuenta">
  
    <div class="campo">
        <label for="nombre">Nombres</label>
        <input
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Nombres"
            value="<?php echo s($usuario->nombre); ?>"
        />
    </div>

    <div class="campo">
        <label for="apellido">Apellidos</label>
        <input
            type="text"
            id="apellido"
            name="apellido"
            placeholder="Apellidos"
            value="<?php echo s($usuario->apellido); ?>"
        />
    </div>

    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input
            type="tel"
            id="telefono"
            name="telefono"
            placeholder="Teléfono"
            value="<?php echo s($usuario->telefono); ?>"
        />
    </div>

    <div class="campo">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Email"
            value="<?php echo s($usuario->email); ?>"
        />
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
        />
    </div>

    <input type="submit" value="Crear Cuenta" class="boton">


</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>